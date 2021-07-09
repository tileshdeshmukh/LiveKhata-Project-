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
    <title>Admin</title>
    <style>



#quantityCount{
    margin-left:500px;
}
#totalCount{
    margin-left:230px;
}
#quantityCountAfter{
    margin-left:500px;
}
#totalCountAfter{
    margin-left:230px;
}
    </style>    

</head>
<body  style="background-color:#d1faf0;">
    @include('adminnav')
    <p class="text-center text-white"  style="background-color:#10ac84;font-size:22px;">Sales Order</p>

    <div class="container mt-2" >
        <div class="row">
            <!-- -->
            <!-- Add search options-------------------------------------------@tilesh -->
            <form method="post" action="{{url('so_search')}}" enctype='multipart/form-data' class="form-group">
                  @csrf
              <div class="input-group" >
                                
                                <input type="search" class="form-control" id="name" name="stext"  placeholder="Search Name">                        
                                
                                <span class="input-group-prepend">
                                    <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img src="img/search.png" alt=""></button>
                                </span>
                    </div>
                
                  </form>
           <div class="col-lg-11">
              <div class="row">
                <div class="col-md-12">
            <form method="post" action="{{route('salesOrder-created')}}" enctype='multipart/form-data' > 
                @csrf
                    <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="name">Voucher No :</label>
                                <!-- <input type="text" class="form-control" value="" id="name" name="Voucher_no" placeholder="Voucher No"> -->
                                
                                <input type="text" class="form-control" id="Voucher_no" value="{{$last_id}}"  name="Voucher_no" >                                                                    
                            </div>

                            <div class="form-group col-md-2">
                                <fieldset>                                    
                                    <label for="datepicker1">Date</label>
                                    <input type="text" class="form-control" id="billCreatedDate" name="billCreatedDate" @if( $serviceBillFetch) value="{{$serviceBillFetch->billCreatedDate}}" @else value="" @endif>                                   
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
                                    <input type="text" class="form-control" onchange="resultDueDate()" id="dueDate" name="dueDate" @if( $serviceBillFetch) value="{{$serviceBillFetch->dueDate}}" @else value="" @endif>                                   
                                </fieldset>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState">Sales Order A/C :</label>
                                    <select id="Service_Acc" name="Service_Acc" class="form-control"  >
                                        <option selected value="Sales Order">Sales Order</option>                                                                                                                                                                                                                                                                    
                                    </select>     
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Sales Order A/C :</label>
                                    <select id="Sales_Account" name="Sales_Account" class="form-control">
                                        <option selected value="Sales Order">Sales Order</option>   
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

                                        <input list="partyAccount" class="form-control partyAccount" onchange="serviceBill_party()" name="customer_name"  type="text"  @if( $serviceBillFetch) value="{{$serviceBillFetch->customer_name}}" @else value="" @endif>                                                                                
                                        <datalist id="partyAccount">                                                                        
                                            @foreach ($account as $ServiceBillAccount)                                                                            
                                                <option  value="{{$ServiceBillAccount->name}}" data-id="{{$ServiceBillAccount->mobile_no}}">{{$ServiceBillAccount->name}}</option>                    
                                            @endforeach  
                                        </datalist>
                                        
                                    </div>

                                  
                                    <div class="form-group col-md-4">
                                        <label for="name">Mobile :</label>
                                        <input type="text" class="form-control" id="serviceBill_mobile"  name="mobile" placeholder="Mobile"   @if( $serviceBillFetch) value="{{$serviceBillFetch->mobile}}" @else value="" @endif>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="name">Narration :</label>
                                        <input type="text" class="form-control" id="bill_narration" name="bill_narration" placeholder="Narration"  @if( $serviceBillFetch) value="{{$serviceBillFetch->bill_narration}}" @else value="" @endif>
                                    </div>
                                    
                                    <div class="row">
                                       @if($bill_last_id==$last_id)
                                                <div class="form-group col-md-4">    
                                                                                   
                                                    <input type="hidden" step="any" class="form-control" id="quantityCounttxt" name="quantityCounttxt" placeholder="" @if( $serviceBillFetch) value="{{$serviceBillFetch->totalBillQuantity}}" @else value="" @endif>
                                                    <input type="hidden" step="any" class="form-control" id="totalCounttxt" name="totalCounttxt" placeholder="" @if( $serviceBillFetch) value="{{$serviceBillFetch->totalBillAmount}}" @else value="" @endif>
                                                </div>
                                        @else
                                                <div class="form-group col-md-4">   
                                                                                     
                                                    <input type="hidden" step="any" class="form-control" id="quantityCounttxt1" name="quantityCounttxt" placeholder="" @if( $serviceBillFetch) value="{{$serviceBillFetch->totalBillQuantity}}" @else value="" @endif>
                                                    <input type="hidden" step="any" class="form-control" id="totalCounttxt1" name="totalCounttxt" placeholder="" @if( $serviceBillFetch) value="{{$serviceBillFetch->totalBillAmount}}" @else value="" @endif>
                                                </div>
                                        @endif
                                   </div>
                              
                                </div>                                
                    </div>
              </div>
                  


                <div class="row">
                    <div class="col-lg-12" >
                        <div class="row">
                            
                            <div class="col-md-12 mt-2  " style="height:285px;overflow: scroll;" >                           
                                <table id="sum_table" class="text-white text-center" style="background-color:#10ac84;border:1px solid white;">                            
                                    <thead class="sticky_thead" style="border:2px solid white;">
                                        <tr>                                   
                                        <th scope="col">Sn</th>
                                        <th scope="col"> Item</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Quantity</th>                                        
                                        <th scope="col">Rate</th>                        
                                        <th scope="col" >Gross</th>                                                                            
                                        <th scope="col" >Action</th>                                                                            
                                       
                                        </tr>
                                    </thead>
                                    <tbody  style="background-color:#ffff; color:black;" >    
                                    @if($serviceBillFetch1)   
                                      
                                    <?php $i=1;?>
                                        @foreach($serviceBillFetch1 as $serv)
                                      
                                    <tr>                                    
                                        <td>
                                            {{$i}}
                                        </td>
                                        <td >                                  
                                            <input list="item" id="item{{$i}}" value="{{$serv->item}}" class="itemList" onchange="itemName({{$i}})"  name="Item[]"  type="text" style="height:23px;width:220px;">                                    
                                            <datalist id="item">                                
                                                @foreach ($product as $ServiceBillProduct) 
                                                    <option value="{{$ServiceBillProduct->itemname}}" data-id="{{$ServiceBillProduct->id}}" data-rate="{{$ServiceBillProduct->Selling_Rate}}">{{$ServiceBillProduct->itemname}}</option>                    
                                                @endforeach
                                            </datalist>
                                        </td>                                                                       
                                        <td>
                                            <input type="text" value="{{$serv->description}}" class=" txtBoxServiceBill"   id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description">                                        
                                        </td>                                                                                         
                                       
                                        <td>                                            
                                            <input type="number" value="{{$serv->quntity}}"  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                        </td>
                                        <td>                                            
                                            <input type="text" step="any" value="{{$serv->rate}}" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                            <input type="hidden" step="any" value="" class="txtBoxServiceBill calculation" id="itemId{{$i}}" name="itemId[]"  style="height:23px;width:160px;">                                        

                                        </td>
                                        <td>
                                            <input type="text" step="any" value="{{$serv->gross}}" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})"  name="Gross[]"  style="height:23px;width:158px;" >
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
                                                @foreach ($product as $ServiceBillProduct) 
                                                    <option value="{{$ServiceBillProduct->itemname}}" data-id="{{$ServiceBillProduct->id}}" data-rate="{{$ServiceBillProduct->Selling_Rate}}">{{$ServiceBillProduct->itemname}}</option>                    
                                                @endforeach
                                            </datalist>
                                        </td>                                                                       
                                        <td>
                                            <input type="text" class=" txtBoxServiceBill"   id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description">                                        
                                        </td>                                                                                         
                                       
                                        <td>                                            
                                            <input type="number"  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                        </td>
                                        <td>                                            
                                            <input type="text" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                            <input type="hidden" step="any" value="" class="txtBoxServiceBill calculation" id="itemId{{$i}}" name="itemId[]"  style="height:23px;width:160px;">                                        

                                        </td>
                                        <td>
                                            <input type="text" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})"  name="Gross[]"  style="height:23px;width:158px;" >
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
                                        <td >                                  
                                            <input list="item" id="item{{$i}}" value="" class="itemList" onchange="itemName({{$i}})"  name="Item[]"  type="text" style="height:23px;width:220px;">                                    
                                            <datalist id="item">                                
                                                @foreach ($product as $ServiceBillProduct) 
                                                    <option value="{{$ServiceBillProduct->itemname}}" data-id="{{$ServiceBillProduct->id}}" data-rate="{{$ServiceBillProduct->Selling_Rate}}">{{$ServiceBillProduct->itemname}}</option>                    
                                                @endforeach
                                            </datalist>
                                        </td>                                                                       
                                        <td>
                                            <input type="text" class=" txtBoxServiceBill" id="Description{{$i}}"  name="Description[]" style="height:23px;width:220px;" value="Description">                                        
                                        </td>                                                                                         
                                       
                                        <td>                                            
                                            <input type="number" step="any"  class="txtBoxServiceBill calculation QTY" id="Quantity{{$i}}" oninput="resultQuantity({{$i}})"   onchange="calculateQuantity({{$i}});calculateTotal({{$i}})"  name="Quantity[]"  style="height:23px;width:160px;">                                            
                                        </td>
                                        <td>                                            
                                            <input type="number" step="any" class="txtBoxServiceBill calculation" id="MRP{{$i}}" oninput="resultGross({{$i}})" onchange="calTotal({{$i}});"  name="MRP[]"  style="height:23px;width:160px;">                                        
                                            <input type="hidden" step="any" value="" class="txtBoxServiceBill calculation" id="itemId{{$i}}" name="itemId[]"  style="height:23px;width:160px;">                                        

                                        </td>
                                        <td>
                                            <input type="number" step="any" class="txtBoxServiceBill calculation GROSS" id="Gross{{$i}}" oninput="resultMrp({{$i}})"  name="Gross[]"  style="height:23px;width:158px;" >
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="clearText({{$i}})" style="height:23px;width:30px;">X</button>
                                        </td>                                                                                                                                                                                   
                                    </tr>
                                     @endfor      
                                     @endif                              
                                    </tbody>
                                    
                                </table>
                                
                            </div>                                                
                        </div>
                        
                    </div>
                </div>
           </div>
           <div class="col-md-1 mt-3">
           
            @if($bill_last_id==$last_id)

                <button type="submit" value="saveServiceBill" name="serviceBillData"  class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Save & print</button>   
            @else
                <button type="submit" value="updateServiceBill" name="serviceBillData" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Update</button>   
                <a class="btn mt-3" href="{{'salesOrderInvoice'}}/{{$last_id}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Print</a>
          
            @endif
                            <a class="btn mt-3" href="{{ url('salesOrder/') }}/{{$last_id-1}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Preview</a> 
                            @if($bill_last_id==$last_id)

                            @else
                            <a class="btn mt-3" href="{{ url('salesOrder/') }}/{{$last_id+1}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Next</a>
                            <a class="btn mt-3" href="{{ url('salesOrder/') }}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Last Record</a>
                            <!-- <a class="btn mt-3" href="{{ url('serviceBill/') }}/{{$bill_last_id}}" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Last Record</a> -->
                            @endif
                          <!--  <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >print</a>
                        <a href="{{ url('taxInvoiceServicePDF')}}" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  ><img src="img/printBill.png" alt=""></a>
                             <button type="submit" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >W/E</button> -->
                            <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" >Print Preview</a>
                           <!-- <button type="submit" class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  onclick="sendSms()" >SMS</button> -->
                           <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white" data-toggle="modal" data-target=".productTreeAdd" data-whatever="@mdo">Add Item</a>
                           <a class="btn mt-3" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"  data-toggle="modal" data-target=".accountTreeAddAccount" data-whatever="@mdo">Add Customer</a>
           </div>
           </form>

           @if($bill_last_id==$last_id)
           <div class="row mt-2">
               <h6 id="quantityCount"></h6>
               <h6 id="totalCount"></h6>   
            </div>
            @else
            <div class="row mt-2">
                <h6 id="quantityCountAfter">Quantity ={{$serviceBillFetch->totalBillQuantity}}</h6>
                <h6 id="totalCountAfter">Total ={{$serviceBillFetch->totalBillAmount}}</h6> 
            </div>
            @endif  
            
        
    
        </div>
    </div>
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
      <form method="POST" action="{{route('salesOrderaccountTree.created')}}">
      @csrf
        
            
      <input type="hidden" class="form-control" id="name" value="{{ Auth::user()->id }}" name="cmpUserId" >
           
           <div class="form-row">
           <div class="form-group col-md-6">
           <label for="name">Name :</label>
           <input type="text" class="form-control" id="name" name="name" placeholder="Name">
           </div>
         
         
           <div class="form-group col-md-6">
               <label for="name">Choose Group Name :</label>
                   <input type="hidden" class="fetchId" name="id">
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

            <form method="POST" action="{{route('salesOrderproductTree.created')}}">
            
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
        <script src="js/serviceBill.js"></script>
        
    @else
        <!-- After click Update Button -->
        <script src="../js/updateServiceBill.js"></script>   
    @endif
 

</section>
<!-- Account Tree Add Group modal End -->
 

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>