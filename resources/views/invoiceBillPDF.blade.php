<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  
</head>
<body>
<div class="float-right">
      <a  class="btn printPage h3" href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg>
      </a>
      <a href="{{$path}}" class="btn" > <span class="h3 text-dark" aria-hidden="true">&times;</span></a>
    </div>  


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$('a.printPage').click(function(){
   window.print();
           return false;
});
</script>
<!-- <a href="{{ url('pdfserviceBill')}}" class="btn ml-2 p-1" style="background-color:#10ac84;color:white;"><img class="img-fluid " src="img/pdf.png" alt=""> <strong>PDF</strong></a> 

 <h6 id="generate-invoice" class="mb-30 right-text"><a class="c-btn" href="javascript:generateInvoice()">Generate PDF</a></h6> -->


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
              <!-- <small>Phone : {{Auth::user()->cmpregistermobile}}  </small></br/> -->
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
        
              <strong>{{$serviceBillFetch->customer_name}}</strong>
              @if(!$acc)
              <div>Cash Party Name : {{$serviceBillFetch->bill_narration}}</div>
              <div>Phone : {{$serviceBillFetch->mobile}} </div>
              @endif
            </div>
            @if($acc)
              <div> {{$acc->address1}} ,</div>
              <div> {{$acc->city}} </div>
              <div> {{$acc->pin}} </div>
              <div>State : {{$acc->stateCode}} - {{$acc->stateName}} </div> 
              <div> Telephone No : {{$acc->tel_no}} </div>
            <div>Phone : {{$serviceBillFetch->mobile}} </div>
              <div>Email : {{$acc->email}} </div>      
              <div>GSTIN : {{$acc->GSTIN}} </div>      
              <div>Pan : {{$acc->pan}} </div>      
            
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
      <strong>:  {{$serviceBillFetch->Voucher_no}}</strong>
      <div>  : {{$serviceBillFetch->billCreatedDate}} </div>
      <div>: {{$serviceBillFetch->dueDate}} </div>
      
      </div>
      </div>
      

      <!-- <div>[shipping address 2]</div> -->
      <!-- <div>Email:[customer_email]</div> -->
      <div></div>
      
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

      <th class="right text-right">Gross</th>
      </tr>
      </thead>
      <tbody>
     <?php  $a=1;?>
      @foreach($serviceBillFetch1 as $serviceBillRecord)
        <tr>
        <!-- <td class="center">1</td> -->
        <td class="left">     <?php echo $a;?></td>
        <td class="left strong">{{$serviceBillRecord->item}} <br> {{$serviceBillRecord->	description}}</td>
        <td class="left">{{$serviceBillRecord->hsn_sac}}</td>
        <td class="left">{{$serviceBillRecord->unit}}</td>
        
        <td class="center">{{$serviceBillRecord->quntity}}</td>
          <td class="left">{{$serviceBillRecord->rate}}</td>
        <td class="right text-right">{{$serviceBillRecord->gross}}</td>
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
          <div class="col-sm-5">
            <!-- <div class="col-sm-3"> -->
              <strong>Bank Detail:</strong>
            <!-- </div> -->
            <hr>
                <div>Bank Name : {{Auth::user()->bankname}}</div>
                <div>A/c Name : {{Auth::user()->bankname}}</div>
                <div>A/c No : {{Auth::user()->bank_account_no}}</div>
                <div>IFSC Code : {{Auth::user()->IFSC}}</div>
                <div>Branch : {{Auth::user()->branchname}}</div>
          </div>
          <div class="col-sm-7">
         
          <table class="table-sm table-borderless">
              <thead>
                <tr>
                  <th scope="col">Taxes</th>
                  <th scope="col">CGST</th>
                  <th scope="col">SGST</th>
                  <th scope="col">IGST</th>
                  <th scope="col">Taxable</th>
                </tr>
              </thead>
              <tbody>
                @foreach($taxes as $tax)
                <tr>
                  <th scope="row">{{ $tax->name }}</th>
                  <td>{{$tax->CGST}}</td>
                  <td>{{$tax->SGST}}</td>
                  <td>{{$tax->IGST}}</td>
                  <td>{{$tax->incl_rate}}</td>
                </tr>
              @endforeach
                
              </tbody>
            </table>

          </div>

        </div>
            

        </div>
        <div class="col-sm-5 pt-2 pb-2">
         <p> Quantity : {{$serviceBillFetch->totalBillQuantity}} &emsp; &emsp; <span style="float:right;">Total : <strong>{{$serviceBillFetch->totalBillAmount}}</strong></span>  </p>
         @if(!empty($serviceBillFetch->lastNetAmt))
         <p> Cash Disc : {{$serviceBillFetch->cashDisc}} &emsp; &emsp; <span style="float:right;">Hamali : {{$serviceBillFetch->hamali}}</span> </p>
         <p> Rount Off : {{$serviceBillFetch->addRound}} &emsp; &emsp; 
         <hr>  
         <span style="float:right;">Net Amount Total : <strong>{{$serviceBillFetch->lastNetAmt}}/-</span>  </strong></p>
        </div>
        @else

        <hr>  
        <p> Rount Off : {{$serviceBillFetch->addRound}} &emsp; &emsp; <span style="float:right;">Net Amount Total : <strong>{{$serviceBillFetch->totalBillAmount}}/-</span>  </strong></p>
        </div>

        @endif
      </div>
    <div class="row" style="border:1px solid grey;">
    <div class="col-sm-12 mt-1" >
            <h6><strong>Amount Inwords : 
              <span style="text-transform: uppercase;">
              @php 
                echo NumConvert::word($serviceBillFetch->totalBillAmount);
              @endphp
              Only 
              </span>
            </strong> </h6>
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