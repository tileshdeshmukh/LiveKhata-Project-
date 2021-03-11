<?php

namespace App\Http\Controllers;
use App\Models\Salesman;
use App\Imports\SalesmanImport;
use App\Exports\SalesmanExport;
use Excel;
use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class SalesmanController extends Controller
{

    public function showSalesman()
    {
        $data = Salesman::all();
        return view('salesman',['salesman'=>$data]);        
    }

    public function salesmanSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$showarr=Salesman::where('salesman_name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('salesman_code','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

    	return view('salesman',['salesman'=>$showarr]);

    }

    public function addSalesman(Request $request){

        $salesman = Salesman::create($request->all());
        return redirect('salesman');                
    }

    public function delete($id)
    {
        $data=Salesman::find($id);
        $data->delete();
        return redirect('salesman');
    }
    
    public function update($id)
    {
        $data1 = Salesman::find($id);       
        return view('updateSalesman',['salesmanUpdate'=>$data1]);               
    }
    public function salesmanUpdate(Request $request)
    {
        $data = Salesman::find($request->id);
        $data ->salesman_name = $request->salesman_name;
        $data ->salesman_code = $request->salesman_code;
       
       
       $data->save();
       return redirect('salesman');
    }

    public function importSalesman(Request $request){

        Excel::import(new SalesmanImport,$request->file);
        return redirect('salesman'); 
    }

    public function exportIntoExcel(){
        return Excel::download(new SalesmanExport,'Salesman List.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
