<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminpage.css">
    <title>Admin</title>
</head>
<body style="background-color:#76e9cc;">
    @include('adminnav')
    <h2 class="text-center mt-2">Account Tree</h2>
    <div class="container">

            <div class="row" >
            <div class="offset-2"></div>
                <div class="col-lg-8 mt-3" >
                      
    
 


                <form method="POST" action="{{route('accTreeUpdate.created')}}">
        @csrf
        <input type="hidden" class="form-control" value="{{$accountsUpdate['id']}}" id="id" name="id" >
            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name :</label>
            <input type="text" class="form-control" value="{{$accountsUpdate['name']}}" id="name" name="name" placeholder="Name">
            </div>
            
           

            <div class="form-group col-md-6">
            <label for="inputState">Type</label>
                <select id="inputState"  name="type_account" class="form-control">
                    <option selected value="{{$accountsUpdate['type_account']}}">{{$accountsUpdate['type_account']}}</option>
                    <option value="Customer/Vendor account">Customer/Vendor account</option>
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
                <input type="text" class="form-control" value="{{$accountsUpdate['address1']}}" id="inputEmail4" name="address1" placeholder="Address 1">
                </div>

                <div class="form-group col-md-6">
                <label for="inputEmail4">City :</label>
                <input type="text" class="form-control" id="inputEmail4" value="{{$accountsUpdate['city']}}" name="city" placeholder="City">
                </div>
                
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Adhar No :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['Adhar_No']}}" id="inputEmail4" name="Adhar_No" placeholder="Adhar No">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Pin :</label>
                <input type="text" class="form-control" id="inputPassword4" value="{{$accountsUpdate['pin']}}" name="pin" placeholder="Pin">
                </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Cont. Person Name :</label>
                <input type="text" class="form-control" id="inputEmail4" value="{{$accountsUpdate['cont_person']}}" name="cont_person" placeholder="Cont. Person Name">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Tel No :</label>
                <input type="text" class="form-control" id="inputPassword4" value="{{$accountsUpdate['tel_no']}}" name="tel_no" placeholder="Phone No">
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile No :</label>
                <input type="text" class="form-control" id="inputPassword4"  value="{{$accountsUpdate['mobile_no']}}" name="mobile_no" placeholder="Mobile No">
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Email ID :</label>
                <input type="text" class="form-control" id="inputPassword4"  value="{{$accountsUpdate['email']}}" name="email" placeholder="Email ID">
                    </div>
               
                </div>
           
      
       
            <div class="form-row mt-3">
                    <div class="form-group col-md-6">      
                    <label for="inputEmail4">State Name :</label>
                                     
                    <select name="stateName" class="form-control"  id="country">
                    <option selected value="{{$accountsUpdate['stateName']}}">{{$accountsUpdate['stateName']}}</option>
                    </select> 
                    </div>
                    <div class="form-group col-md-6">                                           
                    <label for="inputEmail4">State Code :</label>

                    <select name="stateCode" class="form-control" id="state">  
                    <option selected value="{{$accountsUpdate['stateCode']}}">{{$accountsUpdate['stateCode']}}</option>
                    </select>  
                    </div>

                   
            </div>
            <div class="form-row mt-3">

            <div class="form-group col-md-6">
                    <label for="inputEmail4">GSTIN :</label>
                    <input type="text" class="form-control" id="inputEmail4" value="{{$accountsUpdate['GSTIN']}}" name="GSTIN" placeholder="GSTIN">
                    </div>

                    <div class="form-group col-md-6">
            <label for="inputState">Business Type :</label>
                <select id="inputState" name="business_type"  class="form-control">
                    <option selected value="{{$accountsUpdate['business_type']}}">{{$accountsUpdate['business_type']}}</option>
                    <option  value="B2C">B2C</option>
                    <option  value="B2B">B2B</option>
                    <option value="EXP">EXP</option>
                    <option value="IMP">IMP</option>
                   
                </select>
            </div>

           </div>
            <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">PAN :</label>
                    <input type="text" class="form-control" value="{{$accountsUpdate['pan']}}" id="inputEmail4" name="pan" placeholder="PAN">
                    </div>
                
                    <div class="form-group col-md-6">
                        <label for="inputState">GST Party Type :</label>
                            <select id="inputState"  name="gst_party_type" class="form-control">
                                <option selected value="{{$accountsUpdate['gst_party_type']}}">{{$accountsUpdate['gst_party_type']}}</option>
                                <option  value="InState">InState</option>
                                <option value="OutState">OutState</option>                                    
                            </select>
                    </div>
            </div>
            <div class="form-row mt-3">     
                    <div class="form-group col-md-6">
                        <label for="inputState">Acc Head Type :</label>
                            <select id="inputState"  name="acc_head_type" class="form-control">
                                <option selected value="{{$accountsUpdate['acc_head_type']}}">{{$accountsUpdate['acc_head_type']}}</option>
                                <option value="Goods">Goods</option>
                                <option value="Service">Service</option>                                    
                            </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState">GST Reg Type :</label>
                            <select id="inputState"  name="gst_reg_type" class="form-control">
                            
                                <option selected value="{{$accountsUpdate['gst_reg_type']}}">{{$accountsUpdate['gst_reg_type']}}</option>
                                <option  value="Regular">Regular</option>
                                <option value="Un-Regular">Un-Regular</option>                                    
                                <option value="Composit">Composit</option>                                    
                                <option value="Consumer">Consumer</option>                                    
                            </select>
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Eligible ITC :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['Eligible_ITC']}}" id="inputEmail4" name="Eligible_ITC" placeholder="Eligible ITC">
                </div>

                <div class="form-group col-md-6">
                        <label for="inputState">Invoice Type :</label>
                            <select id="inputState"  name="invoice_type" class="form-control">
                                <option selected value="{{$accountsUpdate['invoice_type']}}">{{$accountsUpdate['invoice_type']}}</option>
                                <option value="Regular">Regular</option>
                                <option value="SEZ_supplies_with_payment">SEZ Supplies with Payment</option>                                    
                                <option value="SEZ_supplies_without_payment">SEZ Supplies Without Payment</option>                                    
                                <option value="DeemedExp">DeemedExp</option>                                    
                            </select>
                    </div>
                </div>
      
      
   
            <div class="form-row mt-3">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Bank Name :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['bank_name']}}" id="inputEmail4" name="bank_name" placeholder="Bank Name">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Branch Name :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['bank_branch']}}" id="inputPassword4" name="bank_branch" placeholder="Branch Name">
                </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Bank A/C No :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['bank_account_no']}}" id="inputEmail4" name="bank_account_no" placeholder="Bank A/C No">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">ISFC Code :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['ISFC_code']}}" id="inputEmail4" name="ISFC_code" placeholder="ISFC Code">
                </div>
                </div>

                <div class="form-row">
            
                <div class="form-group col-md-6">
                <label for="inputPassword4">Swift Code :</label>
                <input type="text" class="form-control" value="{{$accountsUpdate['swift_code']}}" id="inputPassword4" name="swift_code" placeholder="Swift Code">
                </div>

                <div class="form-group col-md-6">
                        <label for="inputState">TCS :</label>
                            <select id="inputState"  name="TCS" class="form-control">
                                <option selected value="{{$accountsUpdate['TCS']}}">{{$accountsUpdate['TCS']}}</option>
                                <option value="GST">GST</option>
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
            </div>
    </div>
       


<!-- Account Tree Add Account modal End -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/state.js"></script>
</html>