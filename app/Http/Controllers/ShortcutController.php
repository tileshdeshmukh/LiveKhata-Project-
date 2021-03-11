<?php

namespace App\Http\Controllers;
use App\Models\Shortcut;
use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class ShortcutController extends Controller
{
  
    public function showTaxes()
    {
        // $data['shortcut'] = Shortcut::all();
        // return view('adminDashbord',$data);

    }

    public function createShortcuts($data){

        $data = json_decode($data);                
     
        $shortcut = new Shortcut();

        $shortcut->name = $data->name;
        $shortcut->cmp_id = $data->cmp_id;
        $shortcut->url =$data->urlname;
        $shortcut->save();
          return redirect('home');        
    }

    public function delete($id)
    {
        $data=Shortcut::find($id);
        $data->delete();
        return redirect('home');
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
