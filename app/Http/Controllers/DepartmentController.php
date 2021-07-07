<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Imports\DepartmentImport;
use App\Exports\DepartmentExport;
use Illuminate\Http\Request;
use Illuminate\Supoort\Facades\DB;
use Excel;
use Auth;

class DepartmentController extends Controller
{

    public function showDepartment()
    {
        $compay_id= Auth::user()->id;

        $data = Department::where("cmp_id", "=", $compay_id)
                            ->get();
        return view('department',['department'=>$data]);
    }
    public function departmentSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$showarr=Department::where('department_name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('department_code','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

    	return view('department',['department'=>$showarr]);

    }

    public function addDepartment(Request $request){

        $department = Department::create($request->all());
        return redirect('department');                
    }
    public function delete($id)
    {
        $data=Department::find($id);
        $data->delete();
        return redirect('department');
    }

    public function searchDepartment(Request $request)
    {
        $search = $request->get('search');
        $gotItem = Department::find('department_name','like','%'.$search.'%');
        return view('department',['department'=>$gotItem]);               
    }
    
    public function update($id)
    {
        $data1 = Department::find($id);       
        return view('updateDepartment',['departmentUpdate'=>$data1]);               
    }
    public function departmentUpdate(Request $request)
    {
        $data = Department::find($request->id);
        $data ->department_name = $request->department_name;
        $data ->department_code = $request->department_code;
       
       
       $data->save();
       return redirect('department') ;
    }

    public function importDepartment(Request $request){

        Excel::import(new DepartmentImport,$request->file);
        return redirect('department'); 
    }

    public function exportIntoExcel(){
        return Excel::download(new DepartmentExport,'Department List.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
