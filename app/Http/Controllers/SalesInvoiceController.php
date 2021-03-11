<?php

namespace App\Http\Controllers;
use App\Models\SalesInvoice;
use App\Models\AccountTree;
use App\Models\Taxes;
use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class SalesInvoiceController extends Controller
{

    public function showSalesInvoice()
    {   
        $accountTree = AccountTree::all();
        $tax = Taxes::all();        
        return view('salesInvoice',compact('accountTree','tax'));
            
             
    }
  
    public function addSalesInvoice(Request $request){
        
           
       

        $salesInvoice = SalesInvoice::create($request->all());
        return redirect('salesInvoice');  

        // $data = new SalesInvoice;
        // $data->customer = $customer;        
        // $data->sales_account = $sales_account;
        // $data->date = $date;
        // $data->narration = $narration;           
        // $data->loading_No = $loading_No;
                       
        //    $data->Taxes = $request->$Taxes[$key];
        //    $data->Item = $request->$Item[$key];
        //    $data->Description = $request->$Description[$key];
        //    $data->Quantity = $request->$Quantity[$key];
        //    $data->MRP = $request->$MRP[$key];
        //    $data->Gross = $request->$Gross[$key];           
        //    $data->save();
    
       
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
