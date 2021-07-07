<?php
namespace App\Http\Controllers;
use App\Models\SalesInvoice;
use App\Models\AccountTree;
use App\Models\ProductTree;
use App\Models\Purchase_Voucher_data;
use App\Models\PurchaseVoucher;
use App\Models\Taxes;
use App\Models\Size;
use App\Models\Brand;
use App\Models\AccountTreeGroup;
use App\Models\ProductTreeGroup;
use PDF;
use Auth;
use DB;
use Illuminate\Http\Request;

class PurchaseVoucherController extends Controller
{

    // Searching code ---------------------------------------------  @tilesh
  public function search_pv(Request $request){
    $input = trim($request->stext);
    $search['search_data'] = PurchaseVoucher::where('customer_name', 'like', "%{$input}%")->orWhere('mobile', 'like', "%{$input}%")->orderBy('created_at', 'desc')->get();
    $search['url'] = 'purchaceVoucher';
    // $Voucher_no = $search['search_data']->Voucher_no;
    // $cmp_id = $search['search_data']->cmp_id;
    return view('search_result',$search);
    
  }

  public function showSalesReturn($i=0)
  {   
    $compay_id= Auth::user()->id;

    $data['taxInvoiceService'] = PurchaseVoucher::orderBy('id', 'ASC')
                                          ->where("cmp_id", "=", $compay_id)->get();
   
   // -----------------------------------------------
    $ids=[];
    $ids1=[];        
    foreach($data['taxInvoiceService'] as $value)
    {
        array_push($ids,$value->id);
    }

    $billCount = count($ids);
    if($i){
        $data['last_id']=(int)$i;
        $data['bill_last_id']=$billCount+1;

  $data['taxInvoiceServiceFetch1'] = Purchase_Voucher_data::where("purchase_voucher_id", $i)
                                                ->where('cmp_id', $compay_id)
                                                ->get();
  
  $data['taxInvoiceServiceFetch'] = PurchaseVoucher::where("Voucher_no",$i)
                                                ->where("cmp_id", $compay_id)
                                                ->first();
                                                // return $data['serviceBillFetch'];
    }
    else{             
        $data['last_id']=(int)$billCount+1;
        $data['bill_last_id']=$billCount+1;
        $data['taxInvoiceServiceFetch1']=$data['taxInvoiceServiceFetch']=null;

    }
  
      $data['productTree'] = ProductTree::where("cmpUserId",  $compay_id)
                                          ->get();

      $data['product1'] = ProductTree::where("cmpUserId", $compay_id)
                                  ->select('id','itemname','Selling_Rate','Taxes')
                                  ->get();

      $data['account'] = AccountTree::where("cmpUserId", $compay_id)
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

      return view('purchaceVoucher',$data);  

  }
          
  public function __construct()
  {
      $this->middleware('auth');
  }

  // Insert tax Invoice ---------------------------------------------

  public function addTaxInvoiceServiceBill(Request $request){
    
  //   return $saveServiceBill;
    // Save Service Bill
    
    $saveServiceBill=$request->serviceBillData;
    if($saveServiceBill=="saveTaxInvoice"){

                $serviceBill = new PurchaseVoucher();
                $serviceBill->cmp_id=Auth::user()->id;
                $serviceBill->Voucher_no = $request->Voucher_no;
                
                $serviceBill->billCreatedDate = $request->billCreatedDate;
                $serviceBill->dueDate = $request->dueDate;
                
                $serviceBill->Sales_Account = $request->Sales_Account;
                $serviceBill->Service_Acc = $request->Service_Acc;
                $serviceBill->customer_name = $request->customer_name;
                $serviceBill->bill_narration = $request->bill_narration;
                $serviceBill->mobile = $request->mobile;
                $serviceBill->gstpartytype = $request->gstpartytype;

                $serviceBill->totalBillQuantity = $request->quantityCounttxt;
                $serviceBill->totalTaxableAmount = $request->totalTaxabletxt;
                $serviceBill->totalGSTAmount = $request->totalGSTtxt;
                $serviceBill->totalIGSTtxt = $request->totalIGSTtxt;
                $serviceBill->totalRoundoffAmount = $request->roundoff;
  // Add hamali -------------------------------------------@tilesh
                $serviceBill->addRound = $request->addRound;
                $serviceBill->hamali = $request->hamali;

                $serviceBill->cashDisc = $request->cashDisc;
                $serviceBill->lastNetAmt = $request->lastNetAmt;


                $cmp_id= Auth::user()->id;
                $service_bill_id=$request->Voucher_no;
                $itme_name=array_filter($request->Item);
                $GST=array_filter($request->GST);
                $Description=array_filter($request->Description);
              //   $Description=$request->Description;
                $Quantity=array_filter($request->Quantity);
                $MRP=array_filter($request->MRP);
                $itemId=array_filter($request->itemId);
                $Gross=array_filter($request->Gross);
                $Discount=array_filter($request->Discount);
                $Tradedisc=array_filter($request->Tradedisc);
                $Addless=array_filter($request->Addless);
                $Taxable=array_filter($request->Taxable);
                $CGST=array_filter($request->CGST);
                $SGST=array_filter($request->SGST);
                $IGST=array_filter($request->IGST);

                

                $DiscountforUpdate=array_filter($request->DiscountforUpdate);
                $TradediscforUpdate=array_filter($request->TradediscforUpdate);
                $GSTforUpdate=array_filter($request->GSTforUpdate);
                $IGSTforUpdate=array_filter($request->IGSTforUpdate);
                $singleItemDiscPrice=array_filter($request->singleItemDiscPrice);
                $singleItemTradeDiscPrice=array_filter($request->singleItemTradeDiscPrice);
                
                
                $c=0;
                $item_count=count($itme_name);
                                      
                foreach($itme_name as $it)
                {
                    $data=new Purchase_Voucher_data();
                    $data->purchase_voucher_id=$service_bill_id;
                    $data->cmp_id=$cmp_id;
                    $data->item=$itme_name[$c];
                    $data->GST=$GST[$c];
                    $data->description=$Description[$c];
                    $data->quntity=$Quantity[$c];
                    $data->rate=$MRP[$c]; 
                    $data->itemId=$itemId[$c];
                    $data->gross=$Gross[$c];

                    $data->Discount=$Discount[$c];
                    $data->Tradedisc=$Tradedisc[$c];
                    $data->Addless=$Addless[$c];
                    $data->Taxable=$Taxable[$c];
                    $data->CGST=$CGST[$c];
                    $data->SGST=$SGST[$c];
                    $data->IGST=$IGST[$c];

                    

                    $data->DiscountforUpdate=$DiscountforUpdate[$c];
                    $data->TradediscforUpdate=$TradediscforUpdate[$c];
                    $data->GSTforUpdate=$GSTforUpdate[$c];
                    $data->IGSTforUpdate=$IGSTforUpdate[$c];            

                    $data->singleItemDiscPrice=$singleItemDiscPrice[$c];
                    
                    $data->singleItemTradeDiscPrice=$singleItemTradeDiscPrice[$c];                      
                    
                // echo $Description[$c]."\n";
                    $data->save();
                    $c++;
                    
                }
                                                                             
                $serviceBill->save();
                
    }
    // Update Service Bill
    // -------------------------------------------------
    else{
        
        $id=$request->Voucher_no;
        $compay_id=Auth::user()->id;


        $res=PurchaseVoucher::where('Voucher_no',$id)
                        ->where('cmp_id', $compay_id)
                        ->delete();

        $res1=Purchase_Voucher_data::where('purchase_voucher_id',$id)
                        ->where('cmp_id', $compay_id)
                        ->delete();
        
        // Insert Service Bill
           
        $taxInvoiceService = new PurchaseVoucher();

        $taxInvoiceService->id=$id;

        $taxInvoiceService->cmp_id=Auth::user()->id;
        $taxInvoiceService->Voucher_no = $request->Voucher_no;

        $taxInvoiceService->billCreatedDate = $request->billCreatedDate;
        $taxInvoiceService->dueDate = $request->dueDate;
        
        $taxInvoiceService->Sales_Account = $request->Sales_Account;          
        $taxInvoiceService->Service_Acc = $request->Service_Acc;          
        $taxInvoiceService->customer_name = $request->customer_name;
        $taxInvoiceService->bill_narration = $request->bill_narration;
        $taxInvoiceService->mobile = $request->mobile;
        $taxInvoiceService->gstpartytype = $request->gstpartytype;

        $taxInvoiceService->totalBillQuantity = $request->quantityCounttxt;
        $taxInvoiceService->totalTaxableAmount = $request->totalTaxabletxt;
        $taxInvoiceService->totalGSTAmount = $request->totalGSTtxt;
        $taxInvoiceService->totalIGSTtxt = $request->totalIGSTtxt;
        $taxInvoiceService->totalRoundoffAmount = $request->roundoff;
        // Add hamali -------------------------------------------@tilesh
        $taxInvoiceService->addRound = $request->addRound;
        $taxInvoiceService->hamali = $request->hamali;
        $taxInvoiceService->cashDisc = $request->cashDisc;
        $taxInvoiceService->lastNetAmt = $request->lastNetAmt;

        // dd($taxInvoiceService);
        $cmp_id= Auth::user()->id;
        $service_bill_id=$request->Voucher_no;
        $itme_name=array_filter($request->Item);                  
        $GST=array_filter($request->GST);                  
        $Description=array_filter($request->Description);                  
      //   $Description=$request->Description;
        $Quantity=array_filter($request->Quantity);
        $MRP=array_filter($request->MRP);
        $itemId=array_filter($request->itemId);
        $Gross=array_filter($request->Gross);
        $Discount=array_filter($request->Discount);
        $Tradedisc=array_filter($request->Tradedisc);
        $Addless=array_filter($request->Addless);
        $Taxable=array_filter($request->Taxable);
        $CGST=array_filter($request->CGST);
        $SGST=array_filter($request->SGST);
        $IGST=array_filter($request->IGST);
        
       

        $DiscountforUpdate=array_filter($request->DiscountforUpdate);
        $TradediscforUpdate=array_filter($request->TradediscforUpdate);
        $GSTforUpdate=array_filter($request->GSTforUpdate);
        $IGSTforUpdate=array_filter($request->IGSTforUpdate);
        $singleItemDiscPrice=array_filter($request->singleItemDiscPrice);
        $singleItemTradeDiscPrice=array_filter($request->singleItemTradeDiscPrice);
        

       
        $c=0;
        $item_count=count($itme_name);
                              
        foreach($itme_name as $it)
        {
            
            $data=new Purchase_Voucher_data();
            $data->purchase_voucher_id=$service_bill_id;
            $data->cmp_id=$cmp_id;
            $data->item=$itme_name[$c];
            $data->GST=$GST[$c];
            $data->description=$Description[$c];
            $data->quntity=$Quantity[$c];
            $data->rate=$MRP[$c];
            $data->itemId=$itemId[$c];
            $data->gross=$Gross[$c];

            $data->Discount=$Discount[$c];
            $data->Tradedisc=$Tradedisc[$c];
            $data->Addless=$Addless[$c];
            $data->Taxable=$Taxable[$c];
            $data->CGST=$CGST[$c];
            $data->SGST=$SGST[$c];
            $data->IGST=$IGST[$c];

            
            
            $data->DiscountforUpdate=$DiscountforUpdate[$c];
            $data->TradediscforUpdate=$TradediscforUpdate[$c];
            $data->GSTforUpdate=$GSTforUpdate[$c];
            $data->IGSTforUpdate=$IGSTforUpdate[$c];                    
            $data->singleItemDiscPrice=$singleItemDiscPrice[$c];
            $data->singleItemTradeDiscPrice=$singleItemTradeDiscPrice[$c];                      
          // dd($data);
        // echo $Description[$c]."\n";
            $data->save();
            $c++;
            
        }                                                                     
        $taxInvoiceService->save();
    }
    // dd($service_bill_id);
    return redirect("purchaceVoucher/taxServiceBillInvoice/$service_bill_id");
  }
   
    // Create PDF
    public function showTaxInvoiceServicePDF($id)
    {                      

      $data['billName']="Purchase Voucher";

      $voucherId= $id;
      $compay_id= Auth::user()->id;

    $data['taxInvoiceServiceFetch'] = PurchaseVoucher::where("cmp_id", $compay_id)
                                                ->where('Voucher_no', '=', $voucherId)
                                                ->first();

    $mobile = $data['taxInvoiceServiceFetch']->mobile;

    $data['acc'] = AccountTree::where("cmpUserId", $compay_id)
                               ->where('mobile_no', $mobile)
                               ->first();
                                                 
    // $data['taxInvoiceServiceFetch1'] = Tax_Invoice_Service_data::where("cmp_id", $compay_id)
    //                                                 ->where('tax_invoice_service_id',  $voucherId)
    //                                                 ->get();

   $data['taxInvoiceServiceFetch1'] = DB::table('purchase_voucher_data')
                                      ->rightjoin('product_trees','product_trees.id','purchase_voucher_data.itemId')
                                      ->where("cmp_id", $compay_id)
                                      ->where('purchase_voucher_id',  $voucherId)    
                                      ->select('purchase_voucher_data.*','product_trees.hsn_sac','product_trees.unit')       
                                      ->get();

   $data['print'] = $voucherId;                                   
                    
        return view('taxInvoicePDF',$data);
    }

}
