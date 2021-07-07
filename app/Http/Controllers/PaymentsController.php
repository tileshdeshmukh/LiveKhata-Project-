<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Taxes;
use App\Models\AccountTreeGroup;
use App\Models\ProductTreeGroup;
use App\Models\Payments;
use App\Models\Payments_data;
use App\Models\Brand;
use App\Models\Size;
use App\Models\ProductTree;
use App\Models\AccountTree;
use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;
use Auth;
use PDF;
class PaymentsController extends Controller
{

  
    public function showServiceBill($i=0)
    {
        
        $compay_id= Auth::user()->id;
        $data['serviceBill'] = Payments::orderBy('id', 'ASC')
                                            ->where("cmp_id", "=", $compay_id)->get();
        
        $ids=[];
        $ids1=[];        
        foreach($data['serviceBill'] as $value)
        {
            array_push($ids,$value->id);
        }

        $billCount = count($ids);
        if($i){
            $data['last_id']=(int)$i;
            $data['bill_last_id']=$billCount+1;

      $data['serviceBillFetch1'] = Payments_data::where("payments_id", $i)
                                                    ->where('cmp_id', $compay_id)
                                                    ->get();
      
      $data['serviceBillFetch'] = Payments::where("Voucher_no",$i)       
                                                    ->where("cmp_id", $compay_id)
                                                    ->first();
                                                    // return $data['serviceBillFetch'];
        }
        else{             
            $data['last_id']=(int)$billCount+1;   
            $data['bill_last_id']=$billCount+1;
            

            $data['serviceBillFetch1']=$data['serviceBillFetch']=null;                        
        }
              
        $data['product'] = ProductTree::where("cmpUserId", "=", $compay_id)
                                        ->get();
        $data['product1'] = ProductTree::where("cmpUserId", $compay_id)
                                        ->select('id','itemname','Selling_Rate')
                                        ->get(); 

        $data['account'] = AccountTree::where("cmpUserId", "=", $compay_id)
                                        ->get();
        $data['productswithtax'] = Taxes::where("cmp_id", "=", $compay_id)
                                        ->get();
        $data['productswithbrand'] = Brand::where("cmp_id", "=", $compay_id)
                                        ->get();
        $data['productswithsize'] = Size::where("cmp_id", "=", $compay_id)
                                        ->get();
        $data['accountsGroup'] = AccountTreeGroup::where("cmp_id", "=", $compay_id)
                                        ->get();
        $data['productGroup'] = ProductTreeGroup::where("cmp_id", "=", $compay_id)
                                        ->get();
        
        return view('/payments',$data);
    }

    // Send SMS
    // public function sendSms(Request $request,$SMS){
    //     $sms = json_decode($SMS);

    //         //  return $sms->Amount;
    //         return redirect('receipts');
    // }
  
    // End Send SMS

    public function addServiceBill(Request $request){
        // return "Hello";
        // return $request->serviceBillData;
        $saveServiceBill=$request->serviceBillData;
        
        // Save Service Bill
        if($saveServiceBill=="saveServiceBill"){
                    $cmp_id= Auth::user()->id;
                    $receipts_id=$request->Voucher_no;
                    $account_name=array_filter($request->account_name);                               
                    $amount=array_filter($request->amount);                  
                    $remarks=array_filter($request->remarks);                   
                    $c=0;
                    $item_count=count($account_name);
                                                
                    foreach($account_name as $it)
                    {
                        $data=new Payments_data();
                        $data->payments_id=$receipts_id;
                        $data->cmp_id=$cmp_id;
                        $data->account_name=$account_name[$c];
                        $data->amount=$amount[$c];
                        $data->remarks=$remarks[$c];
                       
                    // echo $Description[$c]."\n";
                        $data->save();
                        $c++;
                        
                    }
            
                    $serviceBill = new Payments();
                    $serviceBill->cmp_id=Auth::user()->id;
                    $serviceBill->Voucher_no = $request->Voucher_no;
                    $serviceBill->billCreatedDate = $request->billCreatedDate;
                    
                    $serviceBill->Account = $request->Account;
                    $serviceBill->cheque_no = $request->cheque_no;
                    $serviceBill->bill_narration = $request->bill_narration;
                    // $serviceBill->paidTo = $request->paidTo;
                    $serviceBill->total = $request->total;
                                                           
                    $serviceBill->save();
                    // $lastId= ($serviceBill->id)+1;
        }
        // Update Service Bill
        else{
            
            $id=$request->Voucher_no;
            $compay_id=Auth::user()->id;


            $res=Payments::where('Voucher_no',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();

            $res1=Payments_data::where('payments_id',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();
            
            // Insert Service Bill

               
            $serviceBill = new Payments();
            $serviceBill->id=$id;
            $serviceBill->cmp_id=Auth::user()->id;

            $serviceBill->Voucher_no = $request->Voucher_no;
            $serviceBill->billCreatedDate = $request->billCreatedDate;
            
            $serviceBill->Account = $request->Account;
            $serviceBill->cheque_no = $request->cheque_no;
            $serviceBill->bill_narration = $request->bill_narration;
            // $serviceBill->paidTo = $request->paidTo;
            $serviceBill->total = $request->total;
                                               
            $serviceBill->save();

            // $lastId= ($serviceBill->id)+1;

            // Insert Service Bill Data
                    $cmp_id= Auth::user()->id;
                    $receipts_id=$request->Voucher_no;

                    $account_name=array_filter($request->account_name);
                    $amount=$request->amount;
                    $remarks=array_filter($request->remarks);
                                      
                    $c=0;
                    $item_count=count($account_name);
                                                
                    foreach($account_name as $it)
                    {
                        $data=new Payments_data();
                        
                        $data->payments_id=$receipts_id;
                        $data->cmp_id=$cmp_id;

                        $data->account_name=$account_name[$c];
                        $data->amount=$amount[$c];
                        $data->remarks=$remarks[$c];
                       
                        $data->save();
                        $c++;
                        
                    }                                        
        }
              
        return redirect('payments');       
   
    }

    // Add Account Tree
    public function addAccountTree(Request $request){
        $accountTree = AccountTree::create($request->all());
        return redirect('payments');
    }
    
    // Add Product Tree
    public function addProductTree(Request $request){

        $productTree = ProductTree::create($request->all());
        return redirect('payments');                
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Create PDF
    public function showTaxInvoiceServicePDF($id)
    {         

        $data['billName']="Receipt";

      $voucherId= $id;
      $compay_id= Auth::user()->id;

    $data['serviceBillFetch'] = Payments::where("cmp_id", $compay_id)
                                                ->where('Voucher_no', '=', $voucherId)
                                                ->first();

    $mobile = $data['serviceBillFetch']->mobile;

    $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                                                ->where('mobile_no', $mobile)
                                                ->first();
      
//   return  $data['serviceBillFetch1'] = Services_bill_data::where("cmp_id", $compay_id)
//                                                     ->where('service_bill_id',  $voucherId)
//                                                     ->get();

  $data['serviceBillFetch1'] = DB::table('payments_data')
                                ->rightjoin('product_trees','product_trees.id','payments_data.itemId')
                                ->where("cmp_id", $compay_id)
                                ->where('payments_id',  $voucherId)
                                ->select('payments_data.*','product_trees.hsn_sac','product_trees.unit')       
                                ->get();

        return view('invoiceBillPDF',$data);
    }
}
