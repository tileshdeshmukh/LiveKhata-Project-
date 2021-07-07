<?php

namespace App\Http\Controllers;
use App\Models\Taxes;
use App\Imports\TaxesImport;
use App\Exports\TaxesExport;
use Excel;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class TaxesController extends Controller
{
    public function logOut(){
        Auth::logout();
        return redirect('/') ;

    }
  
    public function showTaxes()
    {
        $compay_id= Auth::user()->id;
       
        $data['tax'] = Taxes::where("cmp_id", "=", $compay_id)
                            ->get();
        // $data = Taxes::all();
        // return view('taxes',['tax'=>$data]);
        return view('/taxes',$data);       


    }


    public function addTaxesGroup(Request $request){

        
        $taxes = Taxes::create($request->all());
        return redirect('taxes');
    }

    public function delete($id)
    {
        $data=Taxes::find($id);
        $data->delete();
        return redirect('taxes');
    }
    
    public function update($id)
    {
        $data1 = Taxes::find($id);       
        return view('updateTax',['taxUpdate'=>$data1]);               
    }
    public function taxUpdate(Request $request)
    {
        $data = Taxes::find($request->id);
        $data ->name = $request->name;
        $data ->CGST = $request->CGST;
        $data ->SGST = $request->SGST;
        $data ->IGST = $request->IGST;
        $data ->Cess = $request->Cess;
        $data ->GST = $request->GST;
        $data ->incl_rate = $request->incl_rate;
       
       $data->save();
       return redirect('taxes');
    }

    public function importTaxes(Request $request){

        Excel::import(new TaxesImport,$request->file);
        return redirect('taxes'); 
    }

    public function exportIntoExcel(){
        return Excel::download(new TaxesExport,'Taxes List.xlsx');
    }
    
    public function taxSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$showarr=Taxes::where('name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                //    -> orwhere('id','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

    	return view('taxes',['tax'=>$showarr]);

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
