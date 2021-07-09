<?php
namespace App\Http\Controllers;
use App\Models\SalesInvoice;
use App\Models\AccountTree;
use App\Models\ProductTree;
use App\Models\Opening_Balance_data;
use App\Models\OpeningBalance;
use App\Models\Taxes;
use App\Models\Size;
use App\Models\Brand;
use App\Models\AccountTreeGroup;
use App\Models\ProductTreeGroup;
use PDF;
use Auth;
use DB;
use App\Models\GeneralEntry;
use App\Models\General_Entry_data;
use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class OpeningBalanceController extends Controller
{
  
        public function showServiceBill($i=0)
        {
            
            $compay_id= Auth::user()->id;
            $data['serviceBill'] = OpeningBalance::orderBy('id', 'ASC')
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

          $data['serviceBillFetch1'] = Opening_Balance_data::where("opening_balance_id", $i)
                                                        ->where('cmp_id', $compay_id)
                                                        ->get();
          
          $data['serviceBillFetch'] = OpeningBalance::where("Voucher_no",$i)       
                                                        ->where("cmp_id", $compay_id)
                                                        ->first();
                                                        // return $data['serviceBillFetch'];
            }
            else{             
                $data['last_id']=(int)$billCount+1;   
                $data['bill_last_id']=$billCount+1;
                

                $data['serviceBillFetch1']=$data['serviceBillFetch']=null;                        
            }
                  
            $data['product'] = ProductTree::all();                        
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
            
            return view('/openingBalances',$data);
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
                        $debit=array_filter($request->debit);                  
                        $credit=array_filter($request->credit); 
                        $DueDate=array_filter($request->DueDate); 

                        $c=0;
                        $item_count=count($account_name);
                                                    
                        foreach($account_name as $it)
                        {
                            $data=new Opening_Balance_data();
                            $data->opening_balance_id=$receipts_id;
                            $data->cmp_id=$cmp_id;

                            $data->account_name=$account_name[$c];
                            $data->debit=$debit[$c];
                            $data->credit=$credit[$c];                            
                            $data->DueDate=$DueDate[$c];
                          
                        // echo $Description[$c]."\n";
                            $data->save();
                            $c++;
                            
                        }
                
                        $serviceBill = new OpeningBalance();
                        $serviceBill->cmp_id=Auth::user()->id;
                        $serviceBill->Voucher_no = $request->Voucher_no;
                        
                        $serviceBill->billCreatedDate = $request->billCreatedDate;                        
                        $serviceBill->dueDate = $request->dueDate;

                        $serviceBill->debitTotal = $request->debitTotal;
                        $serviceBill->creditTotal = $request->creditTotal;
                      
                                                              
                        $serviceBill->save();
                        // $lastId= ($serviceBill->id)+1;
            }
            // Update Service Bill
            else{
                
                $id=$request->Voucher_no;
                $compay_id=Auth::user()->id;


                $res=OpeningBalance::where('Voucher_no',$id)
                                ->where('cmp_id', $compay_id)
                                ->delete();

                $res1=Opening_Balance_data::where('opening_balance_id',$id)
                                ->where('cmp_id', $compay_id)
                                ->delete();
                
                // Insert Service Bill

                  
                $serviceBill = new OpeningBalance();
                $serviceBill->id=$id;
                $serviceBill->cmp_id=Auth::user()->id;

                $serviceBill->Voucher_no = $request->Voucher_no;
                        
                $serviceBill->billCreatedDate = $request->billCreatedDate;
                $serviceBill->dueDate = $request->dueDate;

                $serviceBill->debitTotal = $request->debitTotal;
                $serviceBill->creditTotal = $request->creditTotal;
                                                  
                $serviceBill->save();

                // $lastId= ($serviceBill->id)+1;

                // Insert Service Bill Data
                        $cmp_id= Auth::user()->id;
                        $receipts_id=$request->Voucher_no;

                        $account_name=array_filter($request->account_name);
                        $debit=array_filter($request->debit);                  
                        $credit=array_filter($request->credit); 
                        $DueDate=array_filter($request->DueDate);
                                          
                        $c=0;
                        $item_count=count($account_name);
                                                    
                        foreach($account_name as $it)
                        {
                            $data=new Opening_Balance_data();
                            
                            $data->opening_balance_id=$receipts_id;
                            $data->cmp_id=$cmp_id;

                            $data->account_name=$account_name[$c];
                            $data->debit=$debit[$c];
                            $data->credit=$credit[$c];                            
                            $data->DueDate=$DueDate[$c];
                          
                            $data->save();
                            $c++;
                            
                        }                                        
            }
                  
            return redirect('openingBalances');       
      
        }

        // Add Account Tree
        public function addAccountTree(Request $request){
            $accountTree = AccountTree::create($request->all());
            return redirect('openingBalances');
        }
        
        // Add Product Tree
        public function addProductTree(Request $request){

            $productTree = ProductTree::create($request->all());
            return redirect('openingBalances');                
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

        $data['serviceBillFetch'] = OpeningBalance::where("cmp_id", $compay_id)
                                                    ->where('Voucher_no', '=', $voucherId)
                                                    ->first();

        $mobile = $data['serviceBillFetch']->mobile;

        $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                                                    ->where('mobile_no', $mobile)
                                                    ->first();
          

      $data['serviceBillFetch1'] = DB::table('opening_balance_data')
                                    ->rightjoin('product_trees','product_trees.id','opening_balance_data.itemId')
                                    ->where("cmp_id", $compay_id)
                                    ->where('opening_balance_id',  $voucherId)
                                    ->select('opening_balance_data.*','product_trees.hsn_sac','product_trees.unit')       
                                    ->get();

            return view('invoiceBillPDF',$data);
        }







    // General Entry -------------------------------------------------------------------------------------
        
        
        public function showServiceBill1($i=0)
        {
            
            $compay_id= Auth::user()->id;
            $data['serviceBill'] = GeneralEntry::orderBy('id', 'ASC')
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

          $data['serviceBillFetch1'] = General_Entry_data::where("general_entry_id", $i)
                                                        ->where('cmp_id', $compay_id)
                                                        ->get();
          
          $data['serviceBillFetch'] = GeneralEntry::where("Voucher_no",$i)       
                                                        ->where("cmp_id", $compay_id)
                                                        ->first();
                                                        // return $data['serviceBillFetch'];
            }
            else{             
                $data['last_id']=(int)$billCount+1;   
                $data['bill_last_id']=$billCount+1;
                

                $data['serviceBillFetch1']=$data['serviceBillFetch']=null;                        
            }
                  
            $data['product'] = ProductTree::all();                        
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
            
            return view('/generalEntry',$data);
        }


        
        // Send SMS
        // public function sendSms(Request $request,$SMS){
        //     $sms = json_decode($SMS);

        //         //  return $sms->Amount;
        //         return redirect('receipts');
        // }

        // End Send SMS

        public function addServiceBill1(Request $request){
            // return "Hello";
            // return $request->serviceBillData;
            $saveServiceBill=$request->serviceBillData;
            
            // Save Service Bill
            if($saveServiceBill=="saveServiceBill"){
                        $cmp_id= Auth::user()->id;
                        $receipts_id=$request->Voucher_no;

                        $account_name=array_filter($request->account_name);                               
                        $debit=array_filter($request->debit);                  
                        $credit=array_filter($request->credit); 
                        $DueDate=array_filter($request->DueDate); 

                        $c=0;
                        $item_count=count($account_name);
                                                    
                        foreach($account_name as $it)
                        {
                            $data=new General_Entry_data();
                            $data->general_entry_id=$receipts_id;
                            $data->cmp_id=$cmp_id;

                            $data->account_name=$account_name[$c];
                            $data->debit=$debit[$c];
                            $data->credit=$credit[$c];                            
                            $data->DueDate=$DueDate[$c];
                          
                        // echo $Description[$c]."\n";
                            $data->save();
                            $c++;
                            
                        }
                
                        $serviceBill = new GeneralEntry();
                        $serviceBill->cmp_id=Auth::user()->id;
                        $serviceBill->Voucher_no = $request->Voucher_no;
                        
                        $serviceBill->billCreatedDate = $request->billCreatedDate;                        
                        $serviceBill->dueDate = $request->dueDate;

                        $serviceBill->debitTotal = $request->debitTotal;
                        $serviceBill->creditTotal = $request->creditTotal;
                      
                                                              
                        $serviceBill->save();
                        // $lastId= ($serviceBill->id)+1;
            }
            // Update Service Bill
            else{
                
                $id=$request->Voucher_no;
                $compay_id=Auth::user()->id;


                $res=GeneralEntry::where('Voucher_no',$id)
                                ->where('cmp_id', $compay_id)
                                ->delete();

                $res1=General_Entry_data::where('general_entry_id',$id)
                                ->where('cmp_id', $compay_id)
                                ->delete();
                
                // Insert Service Bill

                  
                $serviceBill = new GeneralEntry();
                $serviceBill->id=$id;
                $serviceBill->cmp_id=Auth::user()->id;

                $serviceBill->Voucher_no = $request->Voucher_no;
                        
                $serviceBill->billCreatedDate = $request->billCreatedDate;
                $serviceBill->dueDate = $request->dueDate;

                $serviceBill->debitTotal = $request->debitTotal;
                $serviceBill->creditTotal = $request->creditTotal;
                                                  
                $serviceBill->save();

                // $lastId= ($serviceBill->id)+1;

                // Insert Service Bill Data
                        $cmp_id= Auth::user()->id;
                        $receipts_id=$request->Voucher_no;

                        $account_name=array_filter($request->account_name);
                        $debit=array_filter($request->debit);                  
                        $credit=array_filter($request->credit); 
                        $DueDate=array_filter($request->DueDate);
                                          
                        $c=0;
                        $item_count=count($account_name);
                                                    
                        foreach($account_name as $it)
                        {
                            $data=new General_Entry_data();
                            
                            $data->general_entry_id=$receipts_id;
                            $data->cmp_id=$cmp_id;

                            $data->account_name=$account_name[$c];
                            $data->debit=$debit[$c];
                            $data->credit=$credit[$c];                            
                            $data->DueDate=$DueDate[$c];
                          
                            $data->save();
                            $c++;
                            
                        }                                        
            }
                  
            return redirect('/generalEntry');       
      
        }

        // Add Account Tree
        public function addAccountTree1(Request $request){
            $accountTree = AccountTree::create($request->all());
            return redirect('/generalEntry');
        }
        
        // Add Product Tree
        public function addProductTree1(Request $request){

            $productTree = ProductTree::create($request->all());
            return redirect('/generalEntry');                
        }
        public function __construct1()
        {
            $this->middleware('auth');
        }

        // Create PDF
        public function showTaxInvoiceServicePDF1($id)
        {         

            $data['billName']="Receipt";

          $voucherId= $id;
          $compay_id= Auth::user()->id;

        $data['serviceBillFetch'] = GeneralEntry::where("cmp_id", $compay_id)
                                                    ->where('Voucher_no', '=', $voucherId)
                                                    ->first();

        $mobile = $data['serviceBillFetch']->mobile;

        $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                                                    ->where('mobile_no', $mobile)
                                                    ->first();
          

      $data['serviceBillFetch1'] = DB::table('General_Entry_data')
                                    ->rightjoin('product_trees','product_trees.id','General_Entry_data.itemId')
                                    ->where("cmp_id", $compay_id)
                                    ->where('general_entry_id',  $voucherId)
                                    ->select('General_Entry_data.*','product_trees.hsn_sac','product_trees.unit')       
                                    ->get();
    
        $data['taxes'] = Taxes::latest()->get(); 
            return view('invoiceBillPDF',$data);
        }




}
