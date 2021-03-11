<?php

namespace App\Http\Controllers;
use App\Models\Warehouse;
use Excel;
use App\Imports\WarehouseImport;
use App\Exports\WarehouseExport;
use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class WarehouseController extends Controller
{

    public function showWarehouse()
    {
        $data = Warehouse::all();
        return view('warehouse',['warehouse'=>$data]);        
    }
    public function warehouseSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$showarr=Warehouse::where('warehouse_name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('warehouse_code','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

    	return view('warehouse',['warehouse'=>$showarr]);

    }

    public function addWarehouse(Request $request){

        $warehouse = Warehouse::create($request->all());
        return redirect('warehouse');                
    }

    public function delete($id)
    {
        $data=Warehouse::find($id);
        $data->delete();
        return redirect('warehouse');
    }
    
    public function update($id)
    {
        $data1 = Warehouse::find($id);       
        return view('updateWarehouse',['warehouseUpdate'=>$data1]);               
    }
    public function warehouseUpdate(Request $request)
    {
        $data = Warehouse::find($request->id);
        $data ->warehouse_name = $request->warehouse_name;
        $data ->warehouse_code = $request->warehouse_code;
       
       
       $data->save();
       return redirect('warehouse') ;
    }

    public function importWarehouse(Request $request){

        Excel::import(new WarehouseImport,$request->file);
        return redirect('warehouse'); 
    }

    public function exportIntoExcel(){
        return Excel::download(new WarehouseExport,'Warehouse List.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
