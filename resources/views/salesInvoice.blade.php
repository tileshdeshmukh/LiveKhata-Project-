<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminpage.css">
  
    <title>Admin</title>
</head>
<body  style="background-color:#d1faf0;">
    @include('adminnav')
    <h2 class="text-center mt-2">Sales Invoice</h2>

    <div class="container" >
        <div class="row">
            <!-- -->
    
           <div class="col-lg-12">
                <div class="row">                    
                    <div class="col-md-12">
                        <form method="POST"  action="{{route('salesInvoice.created')}}">
                        @csrf
                                <div class="form-row">

                                <div class="form-group col-md-2">
                                    <label for="name">Voucher No :</label>
                                    <input type="text" class="form-control" id="" placeholder="Voucher No" name="Voucher_No">
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputState">Sales Account :</label>
                                        <select id="inputState" name="Sales Account" class="form-control">
                                        <option selected value="Sales Account">Sales A/C</option>   
                                      
                                        </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="name">Date :</label>
                                    <input type="text" class="form-control" id="todayDate" name="date">
                                </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                               
                                    <label for="inputState">Customer :</label>
                                        <select id="inputState" name="customer" class="form-control">
                                        <option selected value="Regular">Select Customer</option>   
                                        @foreach ($accountTree as $customer)
                                            <option  value="{{$customer->name}}">{{$customer->name}}</option>   
                                        @endforeach
                                        </select>
                                 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="name">Narration :</label>
                                    <input type="text" class="form-control" id="name" name="narration" placeholder="Narration">
                                </div>
                                <div class="form-group col-md-2">
                                <label for="inputState">Type :</label>
                                        <select id="inputState" name="loading_No" class="form-control">
                                            <option selected value="Cash">Cash</option>
                                            <option  value="Credit">Credit</option>
                                            <option  value="Online PMT">Online PMT</option>
                                            
                                                                             
                                        </select>
                                </div>
                                </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="row">
                            
                            <div class="col-md-11 mt-3" style="overflow: scroll;">                           
                                <table class="table table-hover table-dark" style="background-color:#10ac84;border:solid 1px black;">                            
                                    <thead>
                                        <tr>                                   
                                            <th scope="col">Taxes</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">IncL Rate</th>                        
                                        <th scope="col">Rate</th>                        
                                        <th scope="col" >Gross</th>                        
                                        <th scope="col" >Discount</th>                        
                                        <th scope="col" >Trade Disc</th>                        
                                        <th scope="col" >Add / Less</th>                        
                                        <th scope="col" >Taxble</th>                        
                                        <th scope="col" >GST</th>                        
                                        <th scope="col" >CGST</th>                        
                                        <th scope="col" >SGST</th>                        
                                        <th scope="col" >IGST</th>                        
                                        <th scope="col" >CESS</th>                        
                                                                
                                                              
                                        </tr>
                                    </thead>
                                    <tbody  style="background-color:#ffff; color:black;border:solid 1px black;">                                                                        
                                    <tr>
                                        <td>
                                            <select id="inputState" name="Taxes[]" class="form-control txtBox">
                                                <option selected value="Regular">Select Taxes</option>                                                                             
                                                @foreach ($tax as $taxes)
                                                    <option  value="{{$taxes->name}}">{{$taxes->name}}</option>   
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                        <input type="text" class="form-control txtBox"  name="Description[]" >
                                        
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox"  name="Description[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="mrp" onchange="resultGross()"  name="MRP[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control  txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control txtBox" id="gross" onchange="resultMrp()"   name="Gross[]" >
                                        </td>
                                      
                                        
                                                                        
                                        <!-- <td>
                                            <a href="javascript:;" id="addi" class="btn btn-danger ">add</a>
                                        </td>                                        -->
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-1">
                           <button type="submit" class="btn mt-3" style="background-color:#10ac84;color:white;"  >Save</button>
                           
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
           </div>
    
        </div>
    </div>

 
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('thead').on('click','.addRow',function(){
        var tr = '<tr>'+
                                       ' <td>'+
                                            
                                            '<select id="inputState" name="Taxes[]" class="form-control">'+
                                                '<option selected value="Regular">Select Taxes</option>     '+                                                                        
                                                '<option  value="Regular">GST 15 %</option>        '+                                                                     
                                           ' </select>'+
                                        '</td>'+
                                        '<td>'+
                                            
                                            '<select id="inputState" name="Item[]" class="form-control">'+                                                                                                                                                                                                   
                                            '</select>'+
                                            
                                        '</td>'+
                                       
                                        '<td>'+
                                            
                                            '<input type="text" class="form-control" name="Description[]" >'+
                                        '</td>'+
                                        '<td>'+
                                            
                                            '<input type="text" class="form-control quantityD" id="quantityD"  name="quantity[]" >'+
                                        '</td>'+
                                        '<td>'+
                                            
                                            '<input type="text" class="form-control mrpD" id="mrpD" onchange="resultGrossD()"  name="mrp[]" >'+
                                        '</td>'+
                                        '<td>'+
                                            
                                            '<input type="text" class="form-control grossD" id="grossD" onchange="resultMrpD()"   name="gross[]" >'+
                                        '</td>'+
                                        '<td>'+
                                            
                                            '<a href="javascript:;" class="btn btn-danger deleteRow">-</a>'+
                                        '</td>'+
                                       
                                    '</tr>';
       
            $('tbody').append(tr);
    });

    $('tbody').on('click','.deleteRow',function(){
        $(this).parent().parent().remove();
    });

    // Calculation

    function resultGross(){

        var num1 =  parseInt($("#quantity").val());
        var num2 = parseInt($("#mrp").val());


        var res= num1 * num2;
        $("#gross").val(res);

    };
    function resultMrp(){

        var num1 =  parseInt($("#quantity").val());
        var num2 = parseInt($("#gross").val());

        var res= num2 / num1;
        $("#mrp").val(res);

    };
    // ----------------
    function resultGrossD(){
        var num1 =  parseInt($("#quantityD").val());
        var num2 = parseInt($("#mrpD").val());

        var res= num1 * num2;
        $("#grossD").val(res);

    };
    function resultMrpD(){

        var num1 =  parseInt($("#quantityD").val());
        var num2 = parseInt($("#grossD").val());

        var res= num2 / num1;
        $("#mrpD").val(res);

    };
   </script>

   
<script>
    
    var today = new Date();
    var dd = today.getDate();
    
    var mm = today.getMonth()+1; 
    var yyyy = today.getFullYear();
    
    today = dd+'/'+mm+'/'+yyyy;
    var d = today;
    $("#todayDate").val(d);
    
    </script>
</html>