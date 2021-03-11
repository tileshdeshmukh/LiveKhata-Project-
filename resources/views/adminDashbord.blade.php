<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="css/shortcutes.css">
    <title>Retailer</title>
</head>
<body style="background-color:#d1faf0;">

@include('adminnav')
<div class="container">
    
    <div class="row">
     
        <div class="col-md-4 mt-5 shortcutesList">
      

            <button type="submit" class="btn text-white createShortcutes" style="background-color:#10ac84;">Create Shortcutes</button>
            <ul class="showShortcuts mt-2" id="menu-v">
                    <li><a href="#" id="Company_DetailsBTN">Company Details</a></li>
                    <li>
                        <a href="#" class="arrow">Masters</a>
                        <ul>
                            <li><a class="shortcutName" data-id="Account Master" data-urlname="accountTree" id="{{ Auth::user()->id }}" href="#">Accounts Master</a></li>
                            <li><a class="shortcutName" data-id="Product Master"data-urlname="productTree" id="{{ Auth::user()->id }}" href="#">Product Master</a></li>
                            <li><a class="shortcutName" data-id="Taxes" data-urlname="taxes" id="{{ Auth::user()->id }}" href="#">Taxes</a></li>
                            <li><a class="shortcutName" data-id="Brand" data-urlname="brand" id="{{ Auth::user()->id }}" href="#">Brand</a></li>
                            <li><a class="shortcutName" data-id="Size" data-urlname="size" id="{{ Auth::user()->id }}" href="#">Size</a></li>
                            <li><a class="shortcutName" data-id="Sales Man" data-urlname="salesman" id="{{ Auth::user()->id }}" href="#">Sales Man</a></li>
                            <li><a class="shortcutName" data-id="Warehouse" data-urlname="warehouse" id="{{ Auth::user()->id }}" href="#">Warehouse</a></li>
                            <li><a class="shortcutName" data-id="Department" data-urlname="department" id="{{ Auth::user()->id }}" href="#">Department</a></li>                                                        
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="arrow">Transactions</a>
                        <ul>
                            <li>
                                <a href="#" class="arrow">Cash & Bank</a>
                                <ul>
                                    <li><a class="shortcutName" data-id="Receipt" data-urlname="productTree" id="{{ Auth::user()->id }}" href="#">Receipt</a></li>
                                    <li><a class="shortcutName" data-id="Payment" data-urlname="productTree" id="{{ Auth::user()->id }}" href="#">Payment</a></li>
                                    <li><a class="shortcutName" data-id="Petty Cash" data-urlname="productTree" id="{{ Auth::user()->id }}" href="#">Petty Cash</a></li>                   
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="arrow">Purchases</a>
                                <ul>
                                    <li><a class="shortcutName" href="#">Purchases Voucherse</a></li>
                                    <li><a class="shortcutName" href="#">Purchases Returns</a></li>                   
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="arrow">Sales</a>
                                <ul>
                                    <li><a class="shortcutName" href="#">Sales Invoice</a></li>
                                    <li><a class="shortcutName" href="#">Tax Invoice</a></li>                   
                                    <li><a class="shortcutName" data-id="Composition Bill" data-urlname="compositionBill" id="{{ Auth::user()->id }}" href="#">Compassion Bill</a></li>                   
                                    <li><a class="shortcutName" href="#">Sales Return</a></li>                   
                                    <li><a class="shortcutName" href="#">Sales Order</a></li>                   
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="arrow">Service Bill</a>
                                <ul>
                                    <li><a class="shortcutName" data-id="Service Bill" data-urlname="serviceBill" id="{{ Auth::user()->id }}" href="#">Service Bill</a></li>
                                    <li><a class="shortcutName" data-id="Tax Invoice Service" data-urlname="taxInvoiceService" id="{{ Auth::user()->id }}" href="#">Tax Invoice Service</a></li>                                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="arrow">Journals</a>
                                <ul>
                                    <li><a class="shortcutName" href="#">Creates Notes</a></li>
                                    <li><a class="shortcutName" href="#">Debits Notes</a></li>                                                    
                                    <li><a class="shortcutName" data-id="Composition Bill" data-urlname="" id="{{ Auth::user()->id }}"  href="#">Opening Balance</a></li>                                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="arrow">Stocks</a>
                                <ul>
                                    <li><a class="shortcutName" data-id="Opening Stocks" data-urlname="openingStock" id="{{ Auth::user()->id }}" href="#">Opening Stocks</a></li>
                                    <li><a class="shortcutName" data-id="Shortage Stocks" data-urlname="shortageStock" id="{{ Auth::user()->id }}" href="#">Shortage Stocks</a></li>                                                    
                                    <li><a class="shortcutName" data-id="Excess Stocks" data-urlname="excessStock" id="{{ Auth::user()->id }}" href="#">Excess Stocks</a></li>                                                    
                                </ul>
                            </li>
                        
                        </ul>
                    </li>                                                                                                          
            </ul>    
        </div>
        <div class="col-md-8 mt-5">

           <div class="row">
                @foreach($shortcut as $sh)
                    <div class="card mr-2 mt-2" style="width: 14rem;">
                        <div class="card-body" style="background-color:#10ac84;">
                            <a href={{"deleteShortcutName/".$sh->id}} class="card-title float-right"> <img src="img/delete.png" alt="Del"></a>               
                            <a class="text-white" href={{"$sh->url"}}><h6 class="card-text"><strong>{{$sh->name}}</strong></h6></a>
                        </div>
                    </div>
               @endforeach
           
           </div>

        </div>
    </div>

</div>
                
  
   

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/shortcuteBtn.js"></script>


</html>
