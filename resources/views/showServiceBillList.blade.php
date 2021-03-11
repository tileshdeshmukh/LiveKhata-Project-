<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminpage.css">
    <title>Admin</title>
</head>
<body style="background-color:#d1faf0;">
    @include('adminnav')
    <div class="container mt-3">

    <h3>Service Bill List</h3>
         <table class="table table-hover text-white" style="background-color:#10ac84;border:solid 1px white;">
                        
                        <thead>
                            <tr>
                            <th scope="col">Sr No.</th>
                            <th scope="col">Bill Date</th>
                            <th scope="col">Account List</th>
                            <th scope="col">Bill Amount</th>                            
                            <th scope="col" >Action</th>                        
                            </tr>
                        </thead>
                        <tbody class="" style="background-color:#d1faf0; color:black;border:solid 1px white;">
                            @foreach ($serviceBillFetch as $bill)
                            <tr>
                            <th  class="p-1" scope="row">{{$bill->Voucher_no}}</th>
                            <th  class="p-1" scope="row">{{$bill->billCreatedDate}}</th>
                            <th  class="p-1" scope="row">{{$bill->customer_name}}</th>
                            <th  class="p-1" scope="row">{{$bill->totalBillAmount}}</th>
                            
                                       
                            <td  class="p-1">
                                <div class="div" >
                                    <a href={{"serviceBill/".$bill->Voucher_no}}> <button class="btn btn-success p-1">update</button> </a>
                                    <a href={{"taxInvoiceServicePDF/".$bill->Voucher_no}}> <button class="btn btn-success p-1"><img src="img/printBill.png" alt=""> </button> </a>
                                    <a href={{"pdfserviceBill/".$bill->Voucher_no}}> <button class="btn btn-success p-1">print </button></a>
                                </div>
                            </td>                               
                            </tr>
                            @endforeach
                           
                           
                        </tbody>
                </table>
    </div> 
   
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>