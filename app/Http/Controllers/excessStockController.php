<?php

namespace App\Http\Controllers;
use App\Models\ExcessStock;
use App\Models\Excess_Stock_data;
use App\Models\ServiceBill;
use Illuminate\Http\Request;
use App\Models\Taxes;
use App\Models\AccountTreeGroup;
use App\Models\ProductTreeGroup;
use App\Models\Services_bill_data;
use App\Models\Brand;
use App\Models\Size;
use App\Models\ProductTree;
use App\Models\AccountTree;
use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;
use Auth;
class excessStockController extends Controller
{
  
    public function showServiceBill($i=0)
    {
        
        $compay_id= Auth::user()->id;

        $data['serviceBill'] = ExcessStock::orderBy('id', 'ASC')
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
        
      $data['serviceBillFetch1'] = Excess_Stock_data::where("excess_stock_id", $i)
                                                    ->where('cmp_id', $compay_id)
                                                    ->get();
      
      $data['serviceBillFetch'] = ExcessStock::where("Voucher_no",$i)       
                                                    ->where("cmp_id", $compay_id)
                                                    ->first();
                                                    // return $data['serviceBillFetch'];
        }
        else{             
            $data['last_id']=(int)$billCount+1;   
            $data['bill_last_id']=$billCount+1;
            
            $data['serviceBillFetch1']=$data['serviceBillFetch']=null;                        
        }

        // $ids2=array_values($ids);
        // $last_id=end($ids2);
        
        // $data['last_id']=(int)$last_id+1;               
        $data['product'] = ProductTree::where("cmpUserId", "=", $compay_id)
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
        
        return view('/excessStock',$data);
    }

    public function showServiceBillPreview($i=0)
    {

        $compay_id= Auth::user()->id;
        $data['serviceBill'] = ExcessStock::orderBy('id', 'ASC')
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
        
      $data['serviceBillFetch1'] = Excess_Stock_data::where("excess_stock_id", $i)
                                                    ->where('cmp_id', $compay_id)
                                                    ->get();
      
      $data['serviceBillFetch'] = ExcessStock::where("Voucher_no",$i)       
                                                    ->where("cmp_id", $compay_id)
                                                    ->first();
                                                    // return $data['serviceBillFetch'];
        }
        else{             
            $data['last_id']=(int)$billCount+1;   
            $data['bill_last_id']=$billCount+1;
            
            $data['serviceBillFetch1']=$data['serviceBillFetch']=null;                        
        }

        // $ids2=array_values($ids);
        // $last_id=end($ids2);
        
        // $data['last_id']=(int)$last_id+1;               
        $data['product'] = ProductTree::where("cmpUserId", "=", $compay_id)
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
        

        return view('/excessStock',$data);
    }


    public function addServiceBill(Request $request){

        // return $request->serviceBillData;
        $saveServiceBill=$request->serviceBillData;
        $newid = $request->Voucher_no;
        // Save Service Bill
        if($saveServiceBill=="saveServiceBill"){
                    $cmp_id= Auth::user()->id;
                    $excess_stock_id=$request->Voucher_no;
                    $itme_name=array_filter($request->Item);
                    $Description=$request->Description;
                    $Quantity=array_filter($request->Quantity);
                    $MRP=array_filter($request->MRP);
                    $Gross=array_filter($request->Gross);
                    $itemId=array_filter($request->itemId);
                    $c=0;
                    $item_count=count($itme_name);
                            
                    
                    foreach($itme_name as $it)
                    {
                        $data=new Excess_Stock_data();
                        $data->excess_stock_id=$excess_stock_id;
                        $data->cmp_id=$cmp_id;
                        $data->item=$itme_name[$c];
                        $data->description=$Description[$c];
                        $data->quntity=$Quantity[$c];
                        $data->rate=$MRP[$c];
                        $data->gross=$Gross[$c];
                        $data->itemId=$itemId[$c];
                    // echo $Description[$c]."\n";
                        $data->save();
                        $c++;
                        
                    }
            
                    $serviceBill = new ExcessStock();
                    $serviceBill->cmp_id=Auth::user()->id;
                    $serviceBill->Sales_Account = $request->Sales_Account;
                    $serviceBill->Voucher_no = $request->Voucher_no;
                    
                    $serviceBill->Service_Acc = $request->Service_Acc;
                    $serviceBill->billCreatedDate = $request->billCreatedDate;
                    $serviceBill->dueDate = $request->dueDate;
                    $serviceBill->customer_name = $request->customer_name;
                    $serviceBill->bill_narration = $request->bill_narration;
                    $serviceBill->mobile = $request->mobile;
                    $serviceBill->totalBillQuantity = $request->quantityCounttxt;
                    $serviceBill->totalBillAmount = $request->totalCounttxt;
                    
                    
                    $serviceBill->save();

                    // $lastId= ($serviceBill->id)+1;

        }
        // Update Service Bill
        else{
            
            $id=$request->Voucher_no;
            $compay_id=Auth::user()->id;


            $res=ExcessStock::where('Voucher_no',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();

            $res=Excess_Stock_data::where('excess_stock_id',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();
            
            // Insert Service Bill

               
                    $cmp_id= Auth::user()->id;
                    $excess_stock_id=$request->Voucher_no;
                    $itme_name=array_filter($request->Item);
                    $Description=$request->Description;
                    $Quantity=array_filter($request->Quantity);
                    $MRP=array_filter($request->MRP);
                    $Gross=array_filter($request->Gross);
                    $itemId=array_filter($request->itemId);
                    $c=0;
                    $item_count=count($itme_name);
                            
                    
                    foreach($itme_name as $it)
                    {
                        $data=new Excess_Stock_data();
                        $data->id=$id;
                        $data->excess_stock_id=$excess_stock_id;
                        $data->cmp_id=$cmp_id;
                        $data->item=$itme_name[$c];
                        $data->description=$Description[$c];
                        $data->quntity=$Quantity[$c];
                        $data->rate=$MRP[$c];
                        $data->gross=$Gross[$c];
                        $data->itemId=$itemId[$c];
                    // echo $Description[$c]."\n";
                        $data->save();
                        $c++;
                        
                    }
            
                    $serviceBill = new ExcessStock();
                    $serviceBill->id=$id;
                    $serviceBill->cmp_id=Auth::user()->id;
                    $serviceBill->Sales_Account = $request->Sales_Account;
                    $serviceBill->Voucher_no = $request->Voucher_no;
                    
                    $serviceBill->Service_Acc = $request->Service_Acc;
                    $serviceBill->billCreatedDate = $request->billCreatedDate;
                    $serviceBill->dueDate = $request->dueDate;
                    $serviceBill->customer_name = $request->customer_name;
                    $serviceBill->bill_narration = $request->bill_narration;
                    $serviceBill->mobile = $request->mobile;
                    $serviceBill->totalBillQuantity = $request->quantityCounttxt;
                    $serviceBill->totalBillAmount = $request->totalCounttxt;                                        
                    $serviceBill->save();
           
        }
       

        $authKey = "35819AU38NdjKKcZ5eda05e7P30";   //fast smsindia

        //Multiple mobiles numbers separated by comma
        $mobileNumber = $request->mobile;
        
        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "102234";
        
        $Voucher_No=$request->Voucher_no;
        $Date=$request->billCreatedDate;
        $Amount=$request->totalCounttxt;
        $Cmp_Name=Auth::user()->cmpname;
        //Your message to send, Add URL encoding here.  
        $message = urlencode(
                                "Voucher No : ".$Voucher_No."\n".
                                "Bill Date : ".$Date."\n".
                                "Company Name : ".$Cmp_Name."\n".
                                "Bill Amount : ".$Amount."\n".
                                "Thank You!!"
    );
        
        //Define route 
        $route = "default";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );
        
        //API URL
        $url="http://sms.fastsmsindia.com/api/sendhttp.php";
        
        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));
        
        
        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        
        
        //get response
        $output = curl_exec($ch);
        
        //Print error if any
        if(curl_errno($ch))
        {
        //  echo 'error:' . curl_error($ch);
            return response([
                "message"=>curl_error($ch)
            ]);
            curl_close($ch);
        }
        else{
        
            curl_close($ch);
        
        }
        // return redirect('excessStock');
       return redirect("/excessStock/excessStockInvoice/$newid");
   
    }

    // Add Account Tree
    public function addAccountTree(Request $request){

        $accountTree = AccountTree::create($request->all());
        return redirect('excessStock');
    }
    
    // Add Account Tree
    public function addProductTree(Request $request){

        $productTree = ProductTree::create($request->all());
        return redirect('excessStock');                
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTaxInvoiceServicePDF($id)
    {         
        
        $data['billName']="Excess Stock";
        
      $voucherId= $id;
      $compay_id= Auth::user()->id;

    $data['serviceBillFetch'] = ExcessStock::where("cmp_id", $compay_id)
                                                ->where('Voucher_no', '=', $voucherId)
                                                ->first();

    $mobile = $data['serviceBillFetch']->mobile;

    $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                                                ->where('mobile_no', $mobile)
                                                ->first();
      
    // $data['serviceBillFetch1'] = excess_Stock_data::where("cmp_id", $compay_id)
    //                                                 ->where('excess_stock_id',  $voucherId)
    //                                                 ->get();    

    $data['serviceBillFetch1'] = DB::table('excess_Stock_data')
                            ->rightjoin('product_trees','product_trees.id','excess_Stock_data.itemId')
                            ->where("cmp_id", $compay_id)
                            ->where('excess_stock_id',  $voucherId)    
                            ->select('excess_Stock_data.*','product_trees.hsn_sac','product_trees.unit')       
                            ->get();
        $data["path"]='/excessStock';
        $data['taxes'] = Taxes::latest()->get();   
        return view('invoiceBillPDF',$data);
    }
}
