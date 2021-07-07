<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        BASE_URL="<?php echo url(''); ?>";
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="css/taxinvoicetable.css">
    <link rel="stylesheet" href="../css/taxinvoicetable.css">
    <title>Admin</title>  

</head>
<body  style="background-color:#d1faf0;">
    @include('adminnav')
    <p class="text-center text-white"  style="background-color:#10ac84;font-size:22px;">Purchace Voucher</p>

    <div class="container mt-2" >
        <div class="row">            

           <div class="col-lg-11">
              <div class="row">
              <!-- Add search options-------------------------------------------@tilesh -->
                  <form method="post" action="{{url('pv_search')}}" enctype='multipart/form-data' class="form-group">
                  @csrf
              <div class="input-group" >
                                
                                <input type="search" class="form-control" id="name" name="stext"  placeholder="Search Name">                        
                                
                                <span class="input-group-prepend">
                                    <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img src="img/search.png" alt=""></button>
                                </span>
                    </div>
                
                  </form>
                <div class="col-md-12 mt-3">



            <form method="post" action="{{route('purchaceVoucher.created')}}" enctype='multipart/form-data' > 
                @csrf
                    <div class="form-row">



                            <div class="form-group col-md-2">
                                <label for="name">Voucher No :</label>
                                <!-- <input type="text" class="form-control" value="" id="name" name="Voucher_no" placeholder="Voucher No"> -->
                                
                                <input type="text" class="form-control" id="Voucher_no" value="{{$last_id}}"  name="Voucher_no" >  
                            </div>

                            <div class="form-group col-md-2">
                                <fieldset>                                    
                                    <label for="datepicker1">Date :</label>
                                    <input type="text" class="form-control" id="billCreatedDate" name="billCreatedDate" @if($taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->billCreatedDate}}" @else value="" @endif required>                                   
                                </fieldset>
                            </div>
                            <!-- <div class="form-group col-md-2">
                                <fieldset>                                    
                                    <label for="datepicker1">Date</label>
                                    <input type="text" class="form-control" id="billCreatedDate" name="billCreatedDate">                                   
                                </fieldset>
                            </div> -->
                           
                            <div class="form-group col-md-2">
                                <fieldset>                                    
                                    <label for="dueDate">Due Date</label>
                                    <input type="text" class="form-control" onchange="resultDueDate()" id="dueDate" name="dueDate" @if($taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->dueDate}}" @else value="" @endif required>                                   
                                </fieldset>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState">Purchace A/C :</label>
                                    <select id="Service_Acc" name="Service_Acc" class="form-control"  >
                                        <option selected value="Purchace">Purchace</option>
                                    </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState">Purchace Account :</label>
                                    <select id="Sales_Account" name="Sales_Account" class="form-control" required>
                                        <option selected value="Purchace">Purchace</option>   
                                        @foreach ($account as $ServiceBillAccount)                                                                            
                                            <option  value="{{$ServiceBillAccount->name}}">{{$ServiceBillAccount->name}}</option>                    
                                        @endforeach                                                                           
                                    </select> 
                            </div>
                        </div>
                        
                         <!------------------------------------->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                                                        
                                        <label for="name">Customer Name :</label>
                                        <input list="partyAccount" class="form-control partyAccount" onchange="serviceBill_party()" name="customer_name"  type="text" @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->customer_name}}" @else value="" @endif required>                                                                                                                        
                                        <datalist id="partyAccount">
                                            @foreach ($account as $ServiceBillAccount)
                                                <option  value="{{$ServiceBillAccount->name}}" data-id="{{$ServiceBillAccount->mobile_no}}" data-gst="{{$ServiceBillAccount->gst_party_type}}">{{$ServiceBillAccount->name}}</option>                    
                                            @endforeach 
                                        </datalist>
                                        
                                    </div>
                                  
                                    <div class="form-group col-md-4">
                                        <label for="name">Mobile :</label>
                                        <input type="text" class="form-control" id="serviceBill_mobile"  name="mobile" placeholder="Mobile" @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->mobile}}" @else value="" @endif required>
                                        <input type="hidden" class="form-control" id="gstpartytype" name="gstpartytype" placeholder="GST PARTY TYPE" @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->gstpartytype}}" @else value="" @endif >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="name">Narration :</label>
                                        <input type="text" class="form-control" id="bill_narration" name="bill_narration" placeholder="Narration" @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->bill_narration}}" @else value="" @endif>
                                    </div>

                                   <div class="row">

                                        <div class="form-group col-md-3">
                                            <input type="hidden" class="form-control" id="quantityCounttxt" name="quantityCounttxt" placeholder="" >	
                                        </div>

                                        <div class="form-group col-md-3">
                                            <input type="hidden" class="form-control" id="totalTaxabletxt" name="totalTaxabletxt" placeholder="" >
                                        </div>
                                                        
                                        <div class="form-group col-md-3">
                                            <input type="hidden" class="form-control" id="totalGSTtxt" name="totalGSTtxt" placeholder="" >
                                            <input type="hidden" class="form-control" id="totalIGSTtxt" name="totalIGSTtxt" placeholder="" >
                                        </div>

                                   </div>
                                                                                              
                                </div>                                
                    </div>

              </div>
                  
    
              <input step="any" class="ml-1" type="hidden" id="demonetAMT" name="roundoff" @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->totalRoundoffAmount}}" @else value="" @endif>

                <div class="row">
                    <div class="col-lg-12" >
                        <div class="row">
                            
                                                                                                
                            <div id="table-scroll col-md-12 mt-2 " class="table-scroll">
                            <table id="main-table" class="main-table" style="background-color:#10ac84;border:1px solid white;">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">Sn</th>
                                    <th scope="col"> Item</th>
                                    <th scope="col" >GST</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col" >Gross</th>
                                    <th scope="col" >Discount</th>
                                    <th scope="col" >Trade Disc</th>
                                    <th scope="col" >Add/Less Other</th>
                                    <th scope="col" >Taxable</th>
                                    <th scope="col" >CGST</th>
                                    <th scope="col" >SGST</th>
                                    <th scope="col" >IGST</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($taxInvoiceServiceFetch1)   
                                      
                                      <?php $i=1;?>
                                          @foreach($taxInvoiceServiceFetch1 as $serv)
                                        
                                                                <tr>
                                                                    <td>
                                                                        {{$i}}
                                                                    </td>
                                                                    <td >                                  
                                                                        <input list="item" id="item{{$i}}" value="{{$serv->item}}" class="itemList" onchange="itemName({{$i}})"  name="Item[]"  type="text" style="height:23px;width:220px;">                                    
                                                                        <datalist id="item">
                                                                            @foreach ($product1 as $taxInvoiceProduct) 
                                                                            <option value="{{$taxInvoiceProduct->itemname}}" data-id="{{$taxInvoiceProduct->id}}" data-tax="{{$taxInvoiceProduct->Taxes}}" data-rate="{{$taxInvoiceProduct->Selling_Rate}}">{{$taxInvoiceProduct->itemname}}</option>                                                                                                    
                                                                            @endforeach
                                                                        </datalist>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="{{$serv->GST}}" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="GST[]"  style="height:23px;width:100px;" >
                                                                        <!-- <input type="text" step="any" class="txtBoxServiceBill calculation" id="Demo{{$i}}" name="demo[]"  style="height:23px;width:160px;" > -->
                                                                    </td>                                                                 
                                                                    <td>
                                                                        <input type="text" value="{{$serv->description}}" class=" txtBoxServiceBill"   id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description" >                                        
                                                                    </td>                                                                                                                                                         
                                                                    <td>
                                                                        <input type="number" value="{{$serv->quntity}}"  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                                                    </td>
                                                                    <td>                                            
                                                                        <input type="text" step="any"  value="{{$serv->rate}}" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                                                        <input type="hidden" step="any"  value="{{$serv->itemId}}" class="txtBoxServiceBill calculation" id="itemId{{$i}}"  name="itemId[]"  style="height:23px;width:160px;">                                        
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" value="{{$serv->gross}}" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})"  name="Gross[]"  style="height:23px;width:160px;" >
                                                                    </td>

                                                                    <!------------------------------------------------------------------------------------------------>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="discount{{$i}}" onblur="resultDiscount(this,{{$i}});calculateDisc({{$i}});" name="Discount[]"  style="height:23px;width:160px;" @if( $serv->Discount == "0" ) value="00" @else value="{{$serv->Discount}}" @endif>
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation DISCOUNT" id="discountTxt{{$i}}" style="height:23px;width:160px;" name="singleItemDiscPrice[]"  @if( $serv->singleItemDiscPrice == "0" ) value="00" @else value="{{$serv->singleItemDiscPrice}}" @endif>
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" name="DiscountforUpdate[]" id="discountTxtTot{{$i}}" style="height:23px;width:160px;" @if( $serv->DiscountforUpdate == "0" ) value="00" @else value="{{$serv->DiscountforUpdate}}" @endif >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="tradedisc{{$i}}" onblur="resultTradeDiscount(this,{{$i}});calculateTradeDisc({{$i}})"  name="Tradedisc[]"  style="height:23px;width:160px;" @if( $serv->Tradedisc == "0" ) value="00" @else value="{{$serv->Tradedisc}}" @endif>
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation TRADEDISC" id="tradediscTxt{{$i}}" style="height:23px;width:160px;" name="singleItemTradeDiscPrice[]" @if( $serv->singleItemTradeDiscPrice == "0" ) value="00" @else value="{{$serv->singleItemTradeDiscPrice}}" @endif>
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="tradediscTxtTot{{$i}}" name="TradediscforUpdate[]" style="height:23px;width:160px;" @if( $serv->TradediscforUpdate == "0" ) value="00" @else value="{{$serv->TradediscforUpdate}}" @endif>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any"  class="txtBoxServiceBill calculation" id="addlesstotal{{$i}}" onblur="resultAddless(this,{{$i}});"  name="Addless[]"  style="height:23px;width:160px;" @if( $serv->Addless == "0" ) value="00" @else value="{{$serv->Addless}}" @endif >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" value="{{$serv->Taxable}}" class="txtBoxServiceBill calculation TAXABLE" id="taxable{{$i}}" name="Taxable[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any"  class="txtBoxServiceBill calculation" id="CGST{{$i}}" name="CGST[]"  style="height:23px;width:160px;" @if( $serv->CGST == "0" ) value="00" @else value="{{$serv->CGST}}" @endif >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="" style="height:23px;width:160px;" @if( $serv->singleItemGSTPrice == "0" ) value="00" @else value="{{$serv->singleItemGSTPrice}}" @endif>
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation GSTTOTAL"  id="gstTxt{{$i}}" name="GSTforUpdate[]" style="height:23px;width:160px;" @if( $serv->GSTforUpdate == "0" ) value="00" @else value="{{$serv->GSTforUpdate}}" @endif>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="SGST{{$i}}" onchange="result({{$i}})" name="SGST[]"  style="height:23px;width:160px;" @if( $serv->CGST == "0" ) value="00" @else value="{{$serv->CGST}}" @endif >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="IGST{{$i}}" oninput="result({{$i}})"  name="IGST[]"  style="height:23px;width:160px;" @if( $serv->IGST == "0" ) value="00" @else value="{{$serv->IGST}}" @endif  >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation IGSTTOTAL" id="IGSTTxt{{$i}}"  name="IGSTforUpdate[]" style="height:23px;width:160px;" @if( $serv->IGSTforUpdate == "0" ) value="00" @else value="{{$serv->IGSTforUpdate}}" @endif >
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="clearText({{$i}})" style="height:23px;width:30px;">X</button>
                                                                    </td>
                                                                 
                                                                                                                                                                                                                                                    
                                                                </tr>


                                                            <?php $i++?>
                                    @endforeach
                                                            @for($i;$i<=100;$i++)
                                                                <tr>                                    
                                                                    <td>
                                                                        {{$i}}
                                                                    </td>
                                                                    <td >                                  
                                                                        <input list="item" id="item{{$i}}" value="" class="itemList" onchange="itemName({{$i}})"  name="Item[]"  type="text" style="height:23px;width:220px;">                                    
                                                                        <datalist id="item">                                
                                                                            @foreach ($product1 as $taxInvoiceProduct) 
                                                                            <option value="{{$taxInvoiceProduct->itemname}}" data-id="{{$taxInvoiceProduct->id}}" data-tax="{{$taxInvoiceProduct->Taxes}}" data-rate="{{$taxInvoiceProduct->Selling_Rate}}">{{$taxInvoiceProduct->itemname}}</option>                    
                                                                            @endforeach
                                                                        </datalist>
                                                                    </td>       
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="GST[]"  style="height:23px;width:100px;" >
                                                                        <!-- <input type="text" step="any" class="txtBoxServiceBill calculation" id="Demo{{$i}}" name="demo[]"  style="height:23px;width:160px;" > -->
                                                                    </td>                                                                 
                                                                    <td>
                                                                        <input type="text" class=" txtBoxServiceBill"   id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description">                                        
                                                                    </td>                                                                                         
                                                                


                                                                    <td>                                            
                                                                        <input type="number" value=""  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                                                    </td>
                                                                    <td>                                            
                                                                        <input type="text" step="any" value="" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                                                        <input type="hidden" step="any" value="" class="txtBoxServiceBill calculation" id="itemId{{$i}}" name="itemId[]"  style="height:23px;width:160px;">                                        
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})"  name="Gross[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <!------------------------------------------------------------------------------------------------>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="discount{{$i}}" onblur="resultDiscount(this,{{$i}});calculateDisc({{$i}});" name="Discount[]"  style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation DISCOUNT" id="discountTxt{{$i}}" style="height:23px;width:160px;" name="singleItemDiscPrice[]">
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation " name="DiscountforUpdate[]" id="discountTxtTot{{$i}}" style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="tradedisc{{$i}}" onblur="resultTradeDiscount(this,{{$i}});calculateTradeDisc({{$i}})"  name="Tradedisc[]"  style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation TRADEDISC" id="tradediscTxt{{$i}}" style="height:23px;width:160px;" name="singleItemTradeDiscPrice[]"  >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="tradediscTxtTot{{$i}}" name="TradediscforUpdate[]" style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="addlesstotal{{$i}}" onblur="resultAddless(this,{{$i}});"  name="Addless[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation TAXABLE" id="taxable{{$i}}" name="Taxable[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="CGST{{$i}}" name="CGST[]"  style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="" style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation GSTTOTAL"  id="gstTxt{{$i}}" name="GSTforUpdate[]" style="height:23px;width:160px;">
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="SGST{{$i}}" onchange="result({{$i}})" name="SGST[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="IGST{{$i}}" oninput="result({{$i}})"  name="IGST[]"  style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation IGSTTOTAL" id="IGSTTxt{{$i}}" name="IGSTforUpdate[]" style="height:23px;width:160px;">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="clearText({{$i}})" style="height:23px;width:30px;">X</button>
                                                                    </td>
                                                                 
                                                                                                                                                                                                                                                    
                                                                </tr>
                                                    @endfor
                                                        @else                                                                
                                                            @for($i=1;$i<=100;$i++)
                                                                <tr>                                    
                                                                    <td>
                                                                        {{$i}}
                                                                    </td>
                                                                    <td>
                                                                        <input list="item" id="item{{$i}}" value="" class="itemList" onchange="itemName({{$i}})"  name="Item[]"  type="text" style="height:23px;width:220px;">                                    
                                                                        <datalist id="item">                                
                                                                            @foreach ($product1 as $taxInvoiceProduct) 
                                                                            <option value="{{$taxInvoiceProduct->itemname}}" data-id="{{$taxInvoiceProduct->id}}" data-tax="{{$taxInvoiceProduct->Taxes}}" data-rate="{{$taxInvoiceProduct->Selling_Rate}}">{{$taxInvoiceProduct->itemname}}</option>                    
                                                                            @endforeach
                                                                        </datalist>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="GST[]"  style="height:23px;width:100px;" >
                                                                        <!-- <input type="text" step="any" class="txtBoxServiceBill calculation" id="Demo{{$i}}" name="demo[]"  style="height:23px;width:160px;" > -->
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class=" txtBoxServiceBill"   id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description">                                        
                                                                    </td>                                                                                         
                                                                    <td>                                            
                                                                        <input type="number" value=""  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                                                    </td>
                                                                    <td>                                            
                                                                        <input type="text" step="any" value="" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                                                        <input type="hidden" step="any" value="" class="txtBoxServiceBill calculation" id="itemId{{$i}}" name="itemId[]"  style="height:23px;width:160px;">                                        
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})" name="Gross[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <!------------------------------------------------------------------------------------------------>
                                                                    
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="discount{{$i}}" onblur="resultDiscount(this,{{$i}});calculateDisc({{$i}});" name="Discount[]" style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation DISCOUNT" id="discountTxt{{$i}}" style="height:23px;width:160px;" name="singleItemDiscPrice[]" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation " name="DiscountforUpdate[]" id="discountTxtTot{{$i}}" style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="tradedisc{{$i}}" onblur="resultTradeDiscount(this,{{$i}});calculateTradeDisc({{$i}})" name="Tradedisc[]"  style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation TRADEDISC" id="tradediscTxt{{$i}}" style="height:23px;width:160px;"  name="singleItemTradeDiscPrice[]" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="tradediscTxtTot{{$i}}" name="TradediscforUpdate[]" style="height:23px;width:160px;" >

                                                                    </td>
                                                                    <td> <!----onblur="checkTextField(this); -->
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="addlesstotal{{$i}}" onblur="resultAddless(this,{{$i}});" name="Addless[]"  style="height:23px;width:160px;" >
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation TAXABLE" id="taxable{{$i}}" name="Taxable[]" style="height:23px;width:160px;">
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="CGST{{$i}}" name="CGST[]" style="height:23px;width:160px;">
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation" id="GST{{$i}}" name="" style="height:23px;width:160px;" >
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation GSTTOTAL"  id="gstTxt{{$i}}" name="GSTforUpdate[]" style="height:23px;width:160px;"> 
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="SGST{{$i}}" onchange="result({{$i}})" name="SGST[]" style="height:23px;width:160px;">
                                                                        <!-- <input type="text" step="any" class="txtBoxServiceBill calculation" id="{{$i}}" style="height:23px;width:160px;"> -->
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" step="any" class="txtBoxServiceBill calculation" id="IGST{{$i}}" oninput="result({{$i}})"  name="IGST[]" style="height:23px;width:160px;">
                                                                        <input type="hidden" step="any" class="txtBoxServiceBill calculation IGSTTOTAL" id="IGSTTxt{{$i}}" name="IGSTforUpdate[]" style="height:23px;width:160px;">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="clearText({{$i}})" style="height:23px;width:30px;">X</button>
                                                                    </td>
                                                                </tr>


                                                                @endfor
                                                                @endif                              

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sn</th>                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td id="quantityCount"></td>
                                    <td></td>
                                    <td id="totalCount"></td>
                                    <th id="totalDisc"></th>
                                    <td id="totalTrradeDisc"></td>
                                    <!--  id=totalAddLess -->
                                    <td id=""></td>
                                    <td id="totalTaxable"></td>
                                    <td class="totalGST" id="totalGstFetch"></td>
                                    <td class="totalGST"></td>
                                    <td id="totalIGST"></td>
                                    
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="col-md-1 mt-3">

           @if($bill_last_id==$last_id)                     
                <button type="submit" value="saveTaxInvoice" name="serviceBillData"  class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Save & Print</button>   
            @else
                <button type="submit" value="updateTaxInvoice" name="serviceBillData" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Update</button>   
                <a class="btn mt-3" href="{{'taxServiceBillInvoice'}}/{{$last_id}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Print</a>
                @endif
           
                            <a class="btn mt-3" href="{{ url('purchaceVoucher/') }}/{{$last_id-1}}"  style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Preview</a>                             
                            @if($bill_last_id==$last_id)

                            @else
                           
                            <a class="btn mt-3" href="{{ url('purchaceVoucher/') }}/{{$last_id+1}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Next</a>
                            <a class="btn mt-3" href="{{ url('purchaceVoucher/') }}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Last Record</a>
                            @endif
                            
                            <!--  <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >print</a>
                            <a href="{{ url('taxInvoiceServicePDF')}}" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  ><img src="img/printBill.png" alt=""></a>
                             <button type="submit" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >W/E</button> -->
                            <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Print Preview</a>
                            <!-- <button type="submit" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  onclick="sendSms()" >SMS</button> -->
                            <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" data-toggle="modal" data-target=".productTreeAdd" data-whatever="@mdo">Add Item</a>
                            <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  data-toggle="modal" data-target=".accountTreeAddAccount" data-whatever="@mdo">Add Customer</a>
           </div>
           
           @if($bill_last_id==$last_id)
           <div>
               <h6 id="netAmt" class="mt-2"></h6>
               <input type="hidden" name="" id="netAmountTxt">
             
             <!-- --------------------------- -->
             <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="">Hamali -</label>
                                <input type="text" class="form-control" onblur="resultHamali(this)" id="hamaliTxt" name="hamali" placeholder=""   >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="">Cash Disc -</label>
                                <input type="text" class="form-control" onblur="resultCashDisc(this)" id="cashDiscTxt" name="cashDisc" placeholder=""  >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Round Up - </label>
                                <input type="text" class="form-control" id="addRoundTxt1" name="addRound" placeholder=""  >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="">Net Amount -</label>  
                                <input type="text" class="form-control" id="netAmountTxt1" name="lastNetAmt" placeholder=""  >
                            </div>
                         
                        </div>
                    </div>
                </div>
                    <!-- --------------------------- -->
            </div>
           @else
           <div>
               <h6 class="mt-2" id="netAmt">Round Off - {{$taxInvoiceServiceFetch->totalRoundoffAmount}}</h6>
               <input type="hidden" name="" id="netAmountTxt">
               <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="">Hamali -</label>
                                <input type="text" class="form-control" onblur="resultHamali(this)" id="hamaliTxt" name="hamali" placeholder=""  @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->hamali}}" @else value="" @endif >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="">Cash Disc -</label>
                                <input type="text" class="form-control" onblur="resultCashDisc(this)" id="cashDiscTxt" name="cashDisc" placeholder=""  @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->cashDisc}}" @else value="" @endif >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Round Up - </label>
                                <input type="text" class="form-control" id="addRoundTxt1" name="addRound" placeholder=""  @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->addRound}}" @else value="" @endif >
                            </div>     
                            <div class="form-group col-md-3">
                                <label for="">Net Amount -</label>
                                <input type="text" class="form-control" id="netAmountTxt1" name="lastNetAmt" placeholder=""  @if( $taxInvoiceServiceFetch) value="{{$taxInvoiceServiceFetch->lastNetAmt}}" @else value="" @endif >
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
             <!-- --------------------------- -->
           @endif  
           
        </div>
    </div>
    </form>

    <!-- Account Tree Add Group modal -->
<section>
  
  <div class="modal fade accountTreeAddAccount" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
      
      <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Account Tree</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body ">
      <!--  -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Account" role="tab" aria-controls="home" aria-selected="true">Account</a>
      </li>
    
      <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#GST" role="tab" aria-controls="contact" aria-selected="false">GST</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bank_details" role="tab" aria-controls="contact" aria-selected="false">Bank Details</a>
      </li>
      </ul>
      <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="Account" role="tabpanel" aria-labelledby="home-tab">

      <div class="mt-3">
      <form method="POST" action="{{route('serviceBillaccTree.created')}}">
      @csrf
          <div class="form-row">
          <div class="form-group col-md-6">
          <label for="name">Name :</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
        
        
          <div class="form-group col-md-6">
              <label for="name">Choose Group Name :</label>
                  <input type="hidden" id="fetchId" name="id">
                      <select id="" name="group_id" class="form-control">                                                                                                                       
                          @foreach ($accountsGroup as $groupName)
                              <option  value="{{$groupName->id}}">{{$groupName->groupname}}</option>   
                          @endforeach
                      </select>         
          </div>
       
          
         
  


          <div class="form-group col-md-12">
          <label for="inputState">Type</label>
              <select id="inputState" name="type_account" class="form-control">
                  <option selected value="Customer/Vendor account">Customer/Vendor account</option>
                  <option  value="Cash/Petty cash account">Cash/Petty cash account</option>
                  <option value="Assets / Liabilities account">Assets / Liabilities account</option>
                  <option value="Bank account">Bank account</option>
                  <option value="Employee account">Employee account</option>
                  <option value="Fixed Assets">Fixed Assets</option>
                  <option value="Income / Expense account">Income / Expense account</option>
                  <option value="Purchases account">Purchases account</option>
                  <option value="Sales account">Sales account</option>
                  <option value="TDS">TDS</option>
                  <option value="Trading Expenses">Trading Expenses</option>
              </select>
          </div>
          </div>

          <div class="form-row mt-3">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Address 1 :</label>
              <input type="text" class="form-control" id="inputEmail4" name="address1" placeholder="Address 1">
              </div>
            
              <div class="form-group col-md-6">
              <label for="inputEmail4">City :</label>
              <input type="text" class="form-control" id="inputEmail4" name="city" placeholder="City">
              </div>
              
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Adhar No :</label>
              <input type="text" class="form-control" id="inputEmail4" name="Adhar_No" placeholder="Adhar No">
              </div>
              <div class="form-group col-md-6">
              <label for="inputPassword4">Pin :</label>
              <input type="text" class="form-control" id="inputPassword4" name="pin" placeholder="Pin">
              </div>
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Cont. Person Name :</label>
              <input type="text" class="form-control" id="inputEmail4" name="cont_person" placeholder="Cont. Person Name">
              </div>
              <div class="form-group col-md-6">
              <label for="inputPassword4">Tel No :</label>
              <input type="text" class="form-control" id="inputPassword4" name="tel_no" placeholder="Phone No">
              </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="inputPassword4">Mobile No :</label>
              <input type="text" class="form-control" id="inputPassword4" name="mobile_no" placeholder="Mobile No">
                  </div>
                  
                  <div class="form-group col-md-6">
                  <label for="inputPassword4">Email ID :</label>
              <input type="text" class="form-control" id="inputPassword4" name="email" placeholder="Email ID">
                  </div>
             
              </div>
         
         
      </div>

      </div>
      <div class="tab-pane fade" id="GST" role="tabpanel" aria-labelledby="contact-tab">
      <div action="">
          <div class="form-row mt-3">
                  <div class="form-group col-md-6">      
                  <label for="inputEmail4">State Name :</label>
                                   
                  <select name="stateName"  class="form-control"  id="country"></select> 
                                                                    
                  </div>
                  <div class="form-group col-md-6">                                           
                  <label for="inputEmail4">State Code :</label>

                  <select name="stateCode" class="form-control"  id="state"></select>    
                  
                  </div>

                 
          </div>
          <div class="form-row mt-3">

          <div class="form-group col-md-6">
                  <label for="inputEmail4">GSTIN :</label>
                  <input type="text" class="form-control" id="inputEmail4" name="GSTIN" placeholder="GSTIN">
                  </div>

                  <div class="form-group col-md-6">
          <label for="inputState">Business Type :</label>
              <select id="inputState" name="business_type" class="form-control">
                  <option selected value="B2C">B2C</option>
                  <option  value="B2B">B2B</option>
                  <option value="EXP">EXP</option>
                  <option value="IMP">IMP</option>
                 
              </select>
          </div>

         </div>
          <div class="form-row mt-3">
                  <div class="form-group col-md-6">
                  <label for="inputEmail4">PAN :</label>
                  <input type="text" class="form-control" id="inputEmail4" name="pan" placeholder="PAN">
                  </div>
              
                  <div class="form-group col-md-6">
                      <label for="inputState">GST Party Type :</label>
                          <select id="inputState" name="gst_party_type" class="form-control">
                              <option selected value="InState">InState</option>
                              <option value="OutState">OutState</option>                                    
                          </select>
                  </div>
          </div>
          <div class="form-row mt-3">     
                  <div class="form-group col-md-6">
                      <label for="inputState">Acc Head Type :</label>
                          <select id="inputState" name="acc_head_type" class="form-control">
                              <option selected value="Goods">Goods</option>
                              <option value="Service">Service</option>                                    
                          </select>
                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputState">GST Reg Type :</label>
                          <select id="inputState" name="gst_reg_type" class="form-control">
                              <option selected value="Regular">Regular</option>
                              <option value="Un-Regular">Un-Regular</option>                                    
                              <option value="Composit">Composit</option>                                    
                              <option value="Consumer">Consumer</option>                                    
                          </select>
                  </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Eligible ITC :</label>
              <input type="text" class="form-control" id="inputEmail4" name="Eligible_ITC" placeholder="Eligible ITC">
              </div>

              <div class="form-group col-md-6">
                      <label for="inputState">Invoice Type :</label>
                          <select id="inputState" name="invoice_type" class="form-control">
                              <option selected value="Regular">Regular</option>
                              <option value="SEZ_supplies_with_payment">SEZ Supplies with Payment</option>                                    
                              <option value="SEZ_supplies_without_payment">SEZ Supplies Without Payment</option>                                    
                              <option value="DeemedExp">DeemedExp</option>                                    
                          </select>
                  </div>
              </div>
      </div>
      </div>
    
      <div class="tab-pane fade" id="bank_details" role="tabpanel" aria-labelledby="profile-tab">
      <div action="">
          <div class="form-row mt-3">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Bank Name :</label>
              <input type="text" class="form-control" id="inputEmail4" name="bank_name" placeholder="Bank Name">
              </div>
              <div class="form-group col-md-6">
              <label for="inputPassword4">Branch Name :</label>
              <input type="text" class="form-control" id="inputPassword4" name="bank_branch" placeholder="Branch Name">
              </div>
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputEmail4">Bank A/C No :</label>
              <input type="text" class="form-control" id="inputEmail4" name="bank_account_no" placeholder="Bank A/C No">
              </div>
              <div class="form-group col-md-6">
              <label for="inputEmail4">ISFC Code :</label>
              <input type="text" class="form-control" id="inputEmail4" name="ISFC_code" placeholder="ISFC Code">
              </div>
              </div>

              <div class="form-row">
          
              <div class="form-group col-md-6">
              <label for="inputPassword4">Swift Code :</label>
              <input type="text" class="form-control" id="inputPassword4" name="swift_code" placeholder="Swift Code">
              </div>

              <div class="form-group col-md-6">
                      <label for="inputState">TCS :</label>
                          <select id="inputState" name="TCS" class="form-control">
                              <option selected value="GST">GST</option>
                              <option  value="Required">Required</option>
                              <option value="Not Required">Not Required</option>                                    
                          </select>
                  </div>
              </div>            
      </div>
      </div>
      <!--  -->
      <!-- <center><button type="button" class="btn btn-primary">Submit</button></center> -->
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Submit</button> -->
              <input type="submit" class="btn btn-primary" value="Submit" >
          </div>
      </form>
          </div>
          </div>
      </div>
  </div>


</section>
<!-- Account Tree Add Account modal End -->
<!-- Account Tree Add Group modal -->
<section>
 
    <div class="modal fade productTreeAdd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Tree(Add Product)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Product" role="tab" aria-controls="home" aria-selected="true">Product Details</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Other</a>
        </li>
       
      
        </ul>
    
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Product" role="tabpanel" aria-labelledby="home-tab">

        <div class="mt-3">

            <form method="POST" action="{{route('serviceBillproTree.created')}}">
            
                 @csrf
            <input type="hidden" class="form-control" id="name" value="{{ Auth::user()->id }}" name="cmpUserId" >

                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="name">Item Name :</label>
                        <input type="text" class="form-control" id="name" name="itemname" placeholder="Item Name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name">Item Code :</label>
                        <input type="text" class="form-control" id="name" name="itemcode" placeholder="Item Code">
                        </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="cmpbankdetails">Description :</label>
                            <input type="text" class="form-control" id="cmpbankdetails" name="description" placeholder="Description" value="Description">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Choose Group Name :</label>
                                    <input type="hidden" class="fetchId" name="id">
                                        <select id="" name="group_id" class="form-control">                                                                                                                       
                                            @foreach ($productGroup as $groupName)
                                                <option  value="{{$groupName->id}}">{{$groupName->groupname}}</option>   
                                            @endforeach
                                        </select>         
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Unit :</label>
                        <input type="text" class="form-control" id="cmpbankdetails" name="unit" placeholder="Unit">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cmpbankdetails">HSN / SAC :</label>
                            <input type="text" class="form-control" id="cmpbankdetails" name="hsn_sac" placeholder="HSN / SAC">
                        </div>
                        </div>
                       

                        </div>
                        </div>


<div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
<div class="mt-3">

               
<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Selling Rate :</label>
                        <input type="text" class="form-control" id="cmpbankdetails" name="Selling_Rate" placeholder="Selling Rate">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cmpbankdetails">Buying Rate :</label>
                            <input type="text" class="form-control" id="cmpbankdetails" name="Buying_Rate" placeholder="Buying Rate">
                        </div>


                        </div>


                        <div class="form-row">
                        <!-- <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Selling Rate :</label>
                        <input type="text" class="form-control" id="cmpbankdetails" name="Selling_Rate" placeholder="Selling Rate">
                        </div> -->
                        <div class="form-group col-md-6">
                                <label for="cmpbankdetails">Item Type :</label>
                                    <select id="inputState" name="item_type" class="form-control">
                                            <option selected value="Imported">Imported</option>                                                                                                                 
                                            <option  value="Branded">Branded</option>
                                        </select>        
                         </div>

                       
                        </div>

                        <div class="form-row">                    
                        <div class="form-group col-md-6">
                        <label for="inputState">Product Category :</label>
                            <select id="inputState" name="product_category" class="form-control">
                                <option selected value="Normal">Normalcd</option>
                                <option value="CapitalGoods">CapitalGoods</option>                                    
                                <option value="Exempted">Exempted</option>                                    
                                <option value="Non-GST">Non-GST</option>                                    
                                <option value="ReverseCharge">ReverseCharge</option>                                    
                                <option value="Nil">Nil</option>                                    
                            </select>
                    </div>


                        <div class="form-group col-md-6">
                        <label for="name">GST Unit :</label>
                        <input type="text" class="form-control" id="name" name="gst_unit" placeholder="GST Unit">
                        </div>
                        </div>

                        <div class="form-row">                    
                            <div class="form-group col-md-6">
                            <label >Taxes :</label>
                                <select id="tax" name="Taxes" class="form-control">                                                                                 
                                    <option selected value="NoN">NoN</option>   
                                        @foreach ($productswithtax as $tax)
                                            <option  value="{{$tax->name}}" data-id="{{$tax->INCL}}">{{$tax->name}}</option>   
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">INCL Rate:</label>
                                    <select id="inputState" name="INCL" class="form-control">
                                        <option selected value="NoN">NoN</option>  
                                        @foreach ($productswithtax as $tax)
                                            <option  value="{{$tax->incl_rate}}">{{$tax->incl_rate}}</option>   
                                        @endforeach                                          
                                    </select>
                            </div>
                        </div>

                        <div class="form-row">                    
                            <div class="form-group col-md-6">
                            <label for="inputState">Brand Name :</label>
                                <select id="inputState" name="Brand_Name" class="form-control">
                                    <option selected value="NoN">NoN</option>      
                                    @foreach ($productswithbrand as $brand)
                                            <option  value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>   
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">Size :</label>
                                    <select id="inputState" name="Size" class="form-control">
                                        <option selected value="NoN">NoN</option>  
                                        @foreach ($productswithsize as $size)                                          
                                            <option value="{{$size->size_name}}">{{$size->size_name}}</option>  
                                        @endforeach
                                    </select>
                            </div>
                        </div>



             
            </div>
                    
            </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                            <input type="submit" class="btn btn-primary" value="Submit" >
                        </div>
            </form>
        
        </div>
        </div>
      
    </div>

    @if($bill_last_id==$last_id)
        <script src="js/taxInvoiceService.js"></script>
        
    @else        
        <script src="../js/updatetaxInvoiceService.js"></script>
    @endif
 

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/taxInvoiceService.js"></script>

<script>

</script>
</html>