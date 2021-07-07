<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Imports\BrandImport;
use App\Exports\BrandExport;
use Excel;
use Auth;
use Illuminate\Http\Request;


class BrandController extends Controller
{

    public function showBrand()
    {                        
        $compay_id= Auth::user()->id;

        $data = Brand::where("cmp_id", "=", $compay_id)
                    ->get();
        return view('brand',['showarr'=>$data]);
    }
   
    public function addBrand(Request $request){     

        $brand = Brand::create($request->all());
        return redirect('brand');                
    }
    public function delete($id)
    {
        $data=Brand::find($id);
        $data->delete();
        return redirect('brand');
    }
    
    public function update($id)
    {
        $data1 = Brand::find($id);       
        return view('updateBrand',['brandUpdate'=>$data1]);               
    }
    public function brandUpdate(Request $request)
    {
        $data = Brand::find($request->id);
        $data ->brand_name = $request->brand_name;
       
       
       $data->save();
       return redirect('brand');
    }

    public function importBrand(Request $request){

          $data = $request->file("file")->get();
            return json_decode($data);

        // return Excel::import(new BrandImport,$request->file);
        // Excel::import(new BrandImport,$request->file);
        // return redirect('brand');
    }

    public function exportIntoExcel(){
        return Excel::download(new BrandExport,'Brand List.xlsx');
    }
    
    public function brandSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$showarr=Brand::where('brand_name','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('id','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();

    	return view('brand',['showarr'=>$showarr]);

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
