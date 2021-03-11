<?php

namespace App\Http\Controllers;
use App\Models\ProductTree;
use App\Models\ProductTreeGroup;
use App\Models\Taxes;
use App\Models\Brand;
use App\Models\Size;
use Excel;
use Auth;
use App\Imports\ProductTreeImport;
use App\Exports\ProductTreeExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTreeController extends Controller
{
  
    public function showProductTree()
    {
        $compay_id= Auth::user()->id;

        // $data['products'] = ProductTree::all();

        $data['products'] = DB::table('product_treesgroup')
        ->rightjoin('product_trees','product_treesgroup.id','product_trees.group_id')
        // ->select('account_trees.cmpUserId')
        ->where("cmpUserId", $compay_id)
        ->get();


        $data['group']=DB::table('product_treesgroup')
                        ->get('id');

        $data['group_name']=DB::table('product_treesgroup')
                    ->orderBy('id')
                    ->get('groupname');
            //  return $data['group_name'];
        $data['group_list']=array();
        $data['group_name_list']=array();
            foreach($data['group_name'] as $g)
            {
                array_push($data['group_name_list'],$g->groupname);
            }
            // return $data['group_name_list'];
            foreach($data['group'] as $g)
            {
                array_push($data['group_list'],$g->id);
            }
            $data['a']=0;
            //     foreach($data['group_list'] as $g)
            //     {
            //         echo "group name is ".$data['group_name_list'][$a]."<br>";
            //         $a++;
            //         foreach($data['accountsName'] as $ac)
            //         {                    
            //             if($g==$ac->group_id)
            //             {
            //                 echo "member is ".$ac->name. "<br>";
            //             }
            //         }
            //     }
            //    exit();
            // return $group_list;

            // $data['accountsGroup'] = AccountTreeGroup::all();        
            // return view('/accountTree',$data);       

        $data['productswithtax'] = Taxes::all();
        $data['productswithbrand'] = Brand::all();
        $data['productswithsize'] = Size::all();
        $data['productGroup']= ProductTreeGroup::all();
        return view('productTree',$data);
        // return view('productTree',['products'=>$data]); 
      

    }
    public function addProductTree(Request $request){

        $productTree = ProductTree::create($request->all());
        return redirect('productTree');                
    }

     // Insert Product Tree Group
     public function insertProductGroup(Request $request){
        
        $productTreeGroup = ProductTreeGroup::create($request->all());
        return redirect('productTree');
    }

    public function deleteGroup($id)
    {
        $data=ProductTreeGroup::find($id);
        $data->delete();
        return redirect('productTree');
    }
    // ------------------------------------------

    // Delete Product Tree
    public function delete($id)
    {
        $data=ProductTree::find($id);
        $data->delete();
        return redirect('productTree');
    }
    
    public function update($id)
    {
        $product = ProductTree::find($id);         
        $productswithtax = Taxes::all();
        $productswithbrand = Brand::all();
        $productswithsize = Size::all();
        return view('updatePro',compact('product','productswithtax','productswithbrand','productswithsize'));      

    }

    public function productUpdate(Request $request)
    {
        $data = ProductTree::find($request->id);
        $data ->itemname = $request->itemname;
        $data ->itemcode = $request->itemcode;
        $data ->description = $request->description;
        $data ->unit = $request->unit;
        $data ->hsn_sac = $request->hsn_sac;
        $data ->Selling_Rate = $request->Selling_Rate;
        $data ->Buying_Rate = $request->Buying_Rate;
        $data ->item_type = $request->item_type;
        $data ->product_category = $request->product_category;
        $data ->gst_unit = $request->gst_unit;
        $data ->Taxes = $request->Taxes;
        $data ->INCL = $request->INCL;
        $data ->Brand_Name = $request->Brand_Name;
        $data ->Size = $request->Size;
       
       
       $data->save();
       return redirect('productTree') ;
    }

    public function importProductTree(Request $request){
        
        Excel::import(new ProductTreeImport,$request->file);
        return redirect('productTree'); 
    }
    public function exportIntoExcel(){
        return Excel::download(new ProductTreeExport,'Product List.xlsx');
    }

    public function productSearch(){

        $searchbtn=$_GET['Sbtn'];
    	$products=ProductTree::where('itemname','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('hsn_sac','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('Taxes','LIKE','%'.$searchbtn.'%')   	   								    								
    	                   -> orwhere('unit','LIKE','%'.$searchbtn.'%')   	   								    								
    					->get();


                        $productswithtax = Taxes::all();
                        $productswithbrand = Brand::all();
                        $productswithsize = Size::all();
        // return view('productTree',['products'=>$showarr]);
        return view('productTree',compact('products','productswithtax','productswithbrand','productswithsize'));


    }

    public function moveproductGroup(Request $request)
    {        
        $data = ProductTree::find($request->id);
        $data ->group_id= $request->group_id;        
        $data->save();
        return redirect('productTree') ;
        
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
