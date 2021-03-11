<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Imports\SizeImport;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SizeExport;
use Excel;

class SizeController extends Controller
{

    public function showSize()
    {
        $size = Size::all();
        $Warehouse = Warehouse::all();
        return view('size',compact('size','Warehouse'));
        // return view('size',['size'=>$data]);        
    }

    public function sizeSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$size=Size::where('size_name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('id','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

                        $Warehouse = Warehouse::all();
                        return view('size',compact('size','Warehouse'));
    }

    public function addSize(Request $request){
        $size = Size::create($request->all());
        return redirect('size');                
    }

    public function delete($id)
    {
        $data=Size::find($id);
        $data->delete();
        return redirect('size');
    }
    
    public function update($id)
    {
        $data1 = Size::find($id);       
        return view('updateSize',['sizeUpdate'=>$data1]);               
    }

    public function deleteAll(Request $request)
    {
      $ids = $request->ids;
      Size::whereIn('id',$ids)->delete();
      return response()->json(['success'=>'Done']);
    }

    public function sizeUpdate(Request $request)
    {
        $data = Size::find($request->id);
        $data ->size_name = $request->size_name;
       
       
       $data->save();
       return redirect('size') ;
    }

    public function importSize(Request $request){

        Excel::import(new SizeImport,$request->file);
        return redirect('size'); 
    }

    public function exportIntoExcel(){
        return Excel::download(new SizeExport,'Size List.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
