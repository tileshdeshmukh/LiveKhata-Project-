<?php

namespace App\Http\Controllers;
use App\Models\AccountTree;
use App\Models\AccountTreeGroup;
use App\Imports\AccountTreeImport;
use App\Exports\AccountTreeExport;
use Illuminate\Http\Request;
use Excel;
use Auth;
use Illuminate\Support\Facades\DB;

class AccountTreeController extends Controller
{
    // public function showTree(){
    //     return view('accountTree');
    // }

    public function logOut(){
        Auth::logout();
        return redirect('/') ;

    }


    public function showAccount()
    {
        $compay_id= Auth::user()->id;

        $data['accountsName'] = DB::table('account_treesgroup')
                                ->rightjoin('account_trees','account_treesgroup.id','account_trees.group_id')
                                // ->select('account_trees.cmpUserId')
                                ->where("cmpUserId", "=", $compay_id)
                                ->get();

        //return $data['accountsName'];

        $data['group']=DB::table('account_treesgroup')
                    ->get('id');
        $data['group_name']=DB::table('account_treesgroup')
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

        $data['accountsGroup'] = AccountTreeGroup::all();        
        return view('/accountTree',$data);       
    }

    public function accountTreeSearch(){

        // return $searchbtn=$_GET['Sbtn'];
    	// $data['accountsName']=DB::table('account_treesgroup')       
        //                 ->rightjoin('account_trees','account_treesgroup.id','account_trees.group_id')
        //                 ->where('account_trees.mobile_no','LIKE','%'.$searchbtn.'%')   	   								    								
    	//                    -> orwhere('account_treesgroup.groupname','LIKE','%'.$searchbtn.'%')   	   								    								
    	//                    -> orwhere('account_trees.name','LIKE','%'.$searchbtn.'%')   	   								    								
    	//                    -> orwhere('account_trees.city','LIKE','%'.$searchbtn.'%')   	   								    								
    	// 				->get();

        //                 $data['accountsGroup'] = AccountTreeGroup::all(); 
        //                 return view('/accountTree',$data);     
    }
   
    public function addAccountTree(Request $request){
        
        $accountTree = AccountTree::create($request->all());
        return redirect('accountTree'); 
    }
   
    // Account Tree Group
    public function insertAccountGroup(Request $request){

        $accountTreeGroup = AccountTreeGroup::create($request->all());
        return redirect('accountTree'); 
    }
    // ------------------------------------------

    public function delete($id)
    {
        $data=AccountTree::find($id);
        $data->delete();
        return redirect('accountTree');
    }
    public function deleteGroup($id)
    {
        $data=AccountTreeGroup::find($id);
        $data->delete();
        return redirect('accountTree');
    }
    
    public function update($id)
    {
        $data1 = AccountTree::find($id);       
        return view('update',['accountsUpdate'=>$data1]);               
    }

  
   
    public function moveGroup(Request $request)
    {        
        $data = AccountTree::find($request->id);
        $data ->group_id= $request->group_id;
        
        $data->save();
        return redirect('accountTree') ;
        
    }
   
    public function insertUpdate(Request $request)
    {
        $data = AccountTree::find($request->id);
        $data ->name = $request->name;
        $data ->type_account = $request->type_account;
        $data ->address1 = $request->address1;
        $data ->city = $request->city;
        $data ->Adhar_No = $request->Adhar_No;
        $data ->pin = $request->pin;
        $data ->cont_person = $request->cont_person;
        $data ->tel_no = $request->tel_no;
        $data ->mobile_no = $request->mobile_no;                
        $data ->email = $request->email;
        $data ->stateName = $request->stateName;
        $data ->stateCode = $request->stateCode;
        $data ->GSTIN = $request->GSTIN;
        $data ->business_type = $request->business_type;
        $data ->pan = $request->pan;
        $data ->gst_party_type = $request->gst_party_type;
        $data ->acc_head_type = $request->acc_head_type;
        $data ->gst_reg_type = $request->gst_reg_type;
        $data ->Eligible_ITC = $request->Eligible_ITC;
        $data ->invoice_type = $request->invoice_type;
        $data ->bank_name = $request->bank_name;
        $data ->bank_branch = $request->bank_branch;
        $data ->bank_account_no = $request->bank_account_no;
        $data ->ISFC_code = $request->ISFC_code;
        $data ->swift_code = $request->swift_code;
        $data ->TCS = $request->TCS;
       $data->save();
       return redirect('accountTree') ;
    }

    public function importAccount(Request $request){

        Excel::import(new AccountTreeImport,$request->file);
        return redirect('accountTree'); 
    }

    
    public function exportIntoExcel(){
        return Excel::download(new AccountTreeExport,'Account List.xlsx');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}

