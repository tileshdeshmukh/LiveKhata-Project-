<?php

namespace App\Http\Controllers;
use App\Models\CompanyDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
// use Illuminate\Supoort\Facades\DB;

class CompanyDetailsController extends Controller
{ 
        
    public function showCompany()
    {
        $id=Auth::user()->id;
        $data['cmp'] = User::where("id", "=", $id)
                ->first();
        return view('/companyDetails',$data);
                
    }

    // Update Company
    public function updateCmp(Request $request)
    {        
        // return $data = User::find($request->id);      
        $id=Auth::user()->id;
        
        $data = User::find($id);            
        $data->cmpname = $request->cmpname;
        $data->cmplogo = $request->cmplogo;
        $data->cmpowner = $request->cmpowner;
        $data->cmpaddress = $request->cmpaddress;
        $data->cmpregistrationdetails = $request->cmpregistrationdetails;
        $data->cmpregistermobile = $request->cmpregistermobile;
        $data->bankname = $request->bankname;
        $data->ownerpan = $request->ownerpan;
        $data->cmpgstn = $request->cmpgstn;
        $data->cmpauthlic = $request->cmpauthlic;     
        $data->branchname = $request->branchname;
        $data->bank_account_no = $request->bank_account_no;
        $data->IFSC = $request->IFSC;        
        $data->subject = $request->subject;

        $data->save();
        return redirect('/companyDetails');

    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
