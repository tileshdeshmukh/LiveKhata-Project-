<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  
</head>
<body>
<!-- <a href="{{ url('pdfserviceBill')}}" class="btn ml-2 p-1" style="background-color:#10ac84;color:white;"><img class="img-fluid " src="img/pdf.png" alt=""> <strong>PDF</strong></a> -->

<!-- <h6 id="generate-invoice" class="mb-30 right-text"><a class="c-btn" href="javascript:generateInvoice()">Generate PDF</a></h6> -->
<div class="invoice" id="invoice">
    <div class="container">
      <H2 class="text-center mt-2">{{$billName}}</H2>      
        <div class="card">
      <div class="card-header">
        <div class="row">
        <div class="col-md-6">
            <img src="../../img/logo.png" alt="Logo" width="150px;">
        </div>
       
          <div class="col-md-6 text-right">
              <h4>{{Auth::user()->cmpname}}</h4>
              <small> {{Auth::user()->cmpaddress}} , </small><br>              
              <small>Pan : {{Auth::user()->ownerpan}} &emsp; GSTIN : {{Auth::user()->cmpgstn}};  </small>
              <small> {{Auth::user()->cmpregistrationdetails}} </small>
          </div>
        </div>
      </div>

      <div class="card-body">
      <div class="row mb-4">
      <div class="col-sm-8">
      <!-- <h6 class="mb-3">From:</h6> -->
      <div>
      
            <strong>{{$taxInvoiceServiceFetch->customer_name}}</strong>
            </div>
            <div>Phone : {{$taxInvoiceServiceFetch->mobile}} </div>
            @if($acc)
              <div> {{$acc->address1}} ,</div>
              <div> {{$acc->city}} </div>
              <div>GSTIN : {{$acc->GSTIN}} </div>      
              <div>State : {{$acc->stateCode}} - {{$acc->stateName}} </div>
            @endif
           
      </div>
      
      <div class="col-sm-4 ">
      <!-- <h6 class="mb-3">To:</h6> -->
      <div class="row">
      <div class="col-sm-6">
          <strong>Document No </strong>
          <div>Document Date </div>
          <div>Due Date  </div>
      </div>
      <div class="col-sm-6">
      <strong>:  {{$taxInvoiceServiceFetch->Voucher_no}}</strong>
      <div>  : {{$taxInvoiceServiceFetch->billCreatedDate}} </div>
      <div>: {{$taxInvoiceServiceFetch->dueDate}} </div>
      
      </div>
      </div>
      
      </div>
      
      
      </div>
      
      <div class="table-responsive-sm">
      <table class="table">
      <thead>
      <tr >
      <th class="center">Sr No</th>
      <!-- <th>Item</th> -->
      <th>Description</th>
      <th>HSN/SAC</th>
      <th>Unit</th>
      
      <th class="left">Quantity</th>
        <th class="center">Rate</th>

        <th class="center">Gross</th>
        <th class="center">Discount</th>
        <th class="center">Trade Disc</th>
        <th class="center">Add Other</th>
        <th class="center">Taxable</th>

      <th class="right text-right">GST</th>
      </tr>
      </thead>
      <tbody>
     <?php  $a=1;?>
      @foreach($taxInvoiceServiceFetch1 as $serviceBillRecord)
        <tr>
        <!-- <td class="center">1</td> -->
        <td class="left">     <?php echo $a;?></td>
        <td class="left strong">{{$serviceBillRecord->item}} <br> {{$serviceBillRecord->	description}}</td>
        <td class="left">{{$serviceBillRecord->hsn_sac}}</td>
        <td class="left">{{$serviceBillRecord->unit}}</td>
        
        <td class="center">{{$serviceBillRecord->quntity}}</td>
          <td class="left">{{$serviceBillRecord->rate}}</td>
          
          <td class="left">{{$serviceBillRecord->gross}}</td>
          <td class="left">{{$serviceBillRecord->	Discount}}%</td>
          <td class="left">{{$serviceBillRecord->Tradedisc}}%</td>
          <td class="left">{{$serviceBillRecord->Addless}}</td>
          <td class="left">{{$serviceBillRecord->Taxable}}</td>

        <td class="right text-right">{{$serviceBillRecord->GST}}</td>
        </tr>
        <?php  $a++;?>
      @endforeach
      
      </tbody>
      </table>
      </div>
      <hr/>
      <div class="row mt-2" style="border:1px solid grey;">
      
    

        <div class="col-sm-7">
        <div class="row pt-2 pb-2">
            
            <div class="col-sm-3">
              <strong>Bank Detail:</strong>
            </div>
            <div class="col-sm-9">
                <div>Bank Name : {{Auth::user()->bankname}}</div>
                <div>A/c Name : {{Auth::user()->bankname}}</div>
                <div>A/c No : {{Auth::user()->bank_account_no}}</div>
                <div>IFSC Code : {{Auth::user()->IFSC}}</div>
                <div>Branch : {{Auth::user()->branchname}}</div>
            </div>
        </div>


        </div>
        <div class="col-sm-5" >
         <!-- <div> Quantity : {{$taxInvoiceServiceFetch->totalBillQuantity}} &emsp; &emsp; <span style="float:right;">Taxable Amt : {{$taxInvoiceServiceFetch->totalTaxableAmount}}</span>  </strong></div>           -->
          <div class="row">
              <div class="col-sm-6">
                <div>Taxable Amt <span style="float:right;">:</span></div>
                <div>CGST<span style="float:right;">:</span></div>
                <div>SGST<span style="float:right;">:</span></div>
                <div>IGST<span style="float:right;">:</span></div>                
                <div><strong>Grand Total</strong><span style="float:right;">:</span></div>
              </div>
              <div class="col-sm-6 text-right">
                <div>  {{$taxInvoiceServiceFetch->totalTaxableAmount}} </div>          
                <div>  {{$taxInvoiceServiceFetch->totalGSTAmount}}</div>
                <div>  {{$taxInvoiceServiceFetch->totalGSTAmount}}</div>
                <div>  {{$taxInvoiceServiceFetch->totalGSTAmount}}</div>
                <div> <strong>{{$taxInvoiceServiceFetch->totalRoundoffAmount}}</strong></div>
              </div>
          </div> 
         
          
        </div>
        
      </div>

    <div class="row" style="border:1px solid grey;">
    <div class="col-sm-12 mt-1" >
            <h6><strong>Amount Inwords : </strong>
              <span style="text-transform: uppercase;">
              @php 
                echo NumConvert::word($taxInvoiceServiceFetch->totalRoundoffAmount);
              @endphp
              Only 
              </span>
             </h6>
        </div>
    </div>
      <div class="row" style="border:1px solid grey;">
      
      <div class="col-sm-12 mt-1">
            <h6><strong>Narration :</strong> {{$taxInvoiceServiceFetch->bill_narration}}</h6>
        </div>
      </div>

      <div class="row mt-2" style="border:1px solid grey;">
        <div class="col-sm-12">
          <strong>Terms & Conditions : </strong> * {{Auth::user()->subject}}
        </div>

        </div>

      <div class="row mt-2" style="border:1px solid grey;">
 
        <div class="col-sm-6 text-left">
           <div style="padding-top:70px;"> Reciever's Sign</div>
        </div>
        <div class="col-sm-6 text-right">
        <div><strong>{{Auth::user()->cmpname}}</strong></div>
        <div class="pt-5">  Authorised Signature</div>
        </div>
      </div>

      
  
      
      </div>
      
      </div>

      <!-- <h6 style="margin-left:30%;">This invoice is computer generated,no signature is required.</h6> -->
      </div>
     </div>
    </div>
    
</body>
<script>
        function generateInvoice(){

            var invoiceDiv = $('#invoice'),
                invoiceHeight = invoiceDiv.height(),
                invoiceWidth = invoiceDiv.width();

            var pdf = new jsPDF('p', 'pt', [invoiceWidth, invoiceHeight]);
            var options = {
                background: '#fff'
            };

            var trimmed = 'aaa';

            pdf.addHTML($(invoiceDiv)[0], options, function () {
                pdf.save('Invoice_'+ trimmed +'.pdf');
            });
        }
</script>
</html>