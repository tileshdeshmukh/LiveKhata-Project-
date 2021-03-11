<?php

namespace App\Http\Controllers;
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
use PDF;
class ServiceBillController extends Controller
{

  
    public function showServiceBill($i=0)
    {

        $compay_id= Auth::user()->id;
        $data['serviceBill'] = ServiceBill::orderBy('id', 'ASC')
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

      $data['serviceBillFetch1'] = Services_bill_data::where("service_bill_id", $i)
                                                    ->where('cmp_id', $compay_id)
                                                    ->get();
      
      $data['serviceBillFetch'] = ServiceBill::where("Voucher_no",$i)       
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
        $data['product'] = ProductTree::all();                        
        $data['product1'] = ProductTree::where("cmpUserId", $compay_id)
                                        ->select('id','itemname','Selling_Rate')
                                        ->get(); 

        $data['account'] = AccountTree::all();            
        $data['productswithtax'] = Taxes::all();
        $data['productswithbrand'] = Brand::all();
        $data['productswithsize'] = Size::all();
        $data['accountsGroup'] = AccountTreeGroup::all();  
        $data['productGroup'] = ProductTreeGroup::all();  
        
        return view('/serviceBill',$data);
    }

    // Send SMS
    public function sendSms(Request $request,$SMS){
        $sms = json_decode($SMS);

            //  return $sms->Amount;
            return redirect('serviceBill');
    }
  
    // End Send SMS

    public function addServiceBill(Request $request){
        // return "Hello";
        // return $request->serviceBillData;
        $saveServiceBill=$request->serviceBillData;
        
        // Save Service Bill
        if($saveServiceBill=="saveServiceBill"){
                    $cmp_id= Auth::user()->id;
                    $service_bill_id=$request->Voucher_no;
                $itme_name=array_filter($request->Item);
           // return $itme_name[1];
                    $Description=$request->Description;
                    $Quantity=array_filter($request->Quantity);
                    // $q=(string)$Quantity;
                    // var_dump($q);
                    // exit();
                    $MRP=array_filter($request->MRP);
                    $itemId=array_filter($request->itemId);
                    $Gross=array_filter($request->Gross);
                    $c=0;
                    $item_count=count($itme_name);
                
            
                    
                    foreach($itme_name as $it)
                    {
                        $data=new Services_bill_data();
                        $data->service_bill_id=$service_bill_id;
                        $data->cmp_id=$cmp_id;
                        $data->item=$itme_name[$c];
                        $data->description=$Description[$c];
                        $data->quntity=$Quantity[$c];
                        $data->rate=$MRP[$c];
                        $data->itemId=$itemId[$c];
                        $data->gross=$Gross[$c];
                    // echo $Description[$c]."\n";
                        $data->save();
                        $c++;
                        
                    }
            
                    $serviceBill = new ServiceBill();
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


            $res=ServiceBill::where('Voucher_no',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();

            $res1=Services_bill_data::where('service_bill_id',$id)
                            ->where('cmp_id', $compay_id)
                            ->delete();
            
            // Insert Service Bill

               
            $serviceBill = new ServiceBill();
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

            // $lastId= ($serviceBill->id)+1;

            // Insert Service Bill Data
                    $cmp_id= Auth::user()->id;
                    $service_bill_id=$request->Voucher_no;
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
                        $data=new Services_bill_data();
                        // $data->id=$id;
                        $data->service_bill_id=$service_bill_id;
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
        return redirect('serviceBill');       
   
    }

    // Add Account Tree
    public function addAccountTree(Request $request){
        $accountTree = AccountTree::create($request->all());
        return redirect('serviceBill');
    }
    
    // Add Product Tree
    public function addProductTree(Request $request){

        $productTree = ProductTree::create($request->all());
        return redirect('serviceBill');                
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Create PDF
    public function showTaxInvoiceServicePDF($id)
    {         

        $data['billName']="Service Bill";

      $voucherId= $id;
      $compay_id= Auth::user()->id;

    $data['serviceBillFetch'] = ServiceBill::where("cmp_id", $compay_id)
                                                ->where('Voucher_no', '=', $voucherId)
                                                ->first();

    $mobile = $data['serviceBillFetch']->mobile;

    $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                                                ->where('mobile_no', $mobile)
                                                ->first();
      
//   return  $data['serviceBillFetch1'] = Services_bill_data::where("cmp_id", $compay_id)
//                                                     ->where('service_bill_id',  $voucherId)
//                                                     ->get();

  $data['serviceBillFetch1'] = DB::table('service_bill_data')
                                ->rightjoin('product_trees','product_trees.id','service_bill_data.itemId')
                                ->where("cmp_id", $compay_id)
                                ->where('service_bill_id',  $voucherId)    
                                ->select('service_bill_data.*','product_trees.hsn_sac','product_trees.unit')       
                                ->get();

        return view('invoiceBillPDF',$data);
    }
}
