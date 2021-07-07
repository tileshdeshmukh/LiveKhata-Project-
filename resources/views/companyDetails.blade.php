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
    <h2 class="text-center mt-2">Company Details</h2>
    <div class="container">

            <div class="row" >
            <div class="offset-2"></div>
                <div class="col-lg-8 mt-3">
                          
   
            <form method="POST" action="{{route('companyUpdate.created')}}" >
            @csrf
                        
                        <div class="form-group">
                            <label for="companyname">Company Name :</label>
                            <input type="text" value="{{$cmp->cmpname}}" class="form-control" id="cmpname" name="cmpname" placeholder="Company Name">
                        </div>
                        <div class="form-group ">
                            <label for="companylogo">Company Logo :</label>
                            <input type="file" value="{{$cmp->cmplogo}}" class="form-control p-1" id="cmplogo" name="cmplogo">
                            
                        </div>
                        <div class="form-group">
                            <label for="companyname">Compnay Owner :</label>
                            <input type="text" value="{{$cmp->cmpowner}}" class="form-control" id="cmpowner" name="cmpowner" placeholder="Company Owner">
                        </div>
                    <div class="form-group">
                        <label for="inputAddress">Company Address :</label>
                        <input type="text" value="{{$cmp->cmpaddress}}" class="form-control" id="cmpaddress" name="cmpaddress" placeholder="Company Address">
                    </div>

                    <div class="form-row">                       
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Register Mobile No :</label>
                        <input type="text" value="{{$cmp->cmpregistermobile}}" class="form-control" id="inputPassword4" name="cmpregistermobile" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Registration Details :</label>
                        <input type="text" value="{{$cmp->cmpregistrationdetails}}" class="form-control" id="inputEmail4" name="cmpregistrationdetails" placeholder="Registration Details">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Authorized license No :</label>
                        <input type="text" value="{{$cmp->cmpauthlic}}" class="form-control" id="inputPassword4" name="cmpauthlic" placeholder="Authorized license No">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">PAN No. :</label>
                        <input type="text" value="{{$cmp->ownerpan}}" class="form-control" id="inputEmail4" name="ownerpan" placeholder="PAN No.">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">GSTIN :</label>
                        <input type="text" value="{{$cmp->cmpgstn}}" class="form-control" id="inputPassword4" name="cmpgstn" placeholder="GSTN No.">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Bank Name :</label>
                        <input type="text" value="{{$cmp->bankname}}" class="form-control" id="bankname" name="bankname">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Branch Name :</label>
                        <input type="text" value="{{$cmp->branchname}}" class="form-control" id="branchname" name="branchname">
                        </div>
                                          
                    </div>
                    <div class="form-row">
                  
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Account No :</label>
                        <input type="text" value="{{$cmp->bank_account_no}}" class="form-control" id="bank_account_no" name="bank_account_no">
                        </div>                             

                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">IFSC Code:</label>
                        <input type="text" value="{{$cmp->IFSC}}" class="form-control" id="IFSC" name="IFSC">
                        </div>
                    </div>
                    <div class="form-group">                    
                      
                        <label for="cmpbankdetails">Subject :</label>

                        <input type="text"  value="{{$cmp->subject}}" class="form-control" id="" name="subject">                                            
                        
                    </div>

                    <!-- <div class="form-group">                    
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Agree to terms and conditions
                        </label>
                        
                        </div>
                    </div> -->
                    <!-- <div class="form-group">                    
                        <div class="form-check">                        
                        <input type="text" value="" class="form-control" id="" name="">                                            
                        </div>
                    </div> -->
                   

                    <!-- <div class="form-group ">
                            <label for="companylogo">QR Code :</label>
                            <input type="file" value="" class="form-control p-1" id="cmplogo" name="cmplogo">
                            
                        </div>
                    <div class="form-group ">
                            <label for="companylogo">QR Code Name :</label>
                            <input type="text" value="" placeholder="Enter QR Code Name" class="form-control" id="" name="">                                            
                            
                        </div>
                 -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                            <input type="submit"  class="btn btn-primary" value="Submit" >
                        </div>
                        </div>
                        </div>


                        <!-- I/We hereby certify that my/our registration certificate under the Goods and Service Tax Act, 2017 is in force on the date on which the sale of  the goods specified in this " Tax Invoice"  is made by me/us and that the transaction of supply covered.
We hereby certify that food/foods mentioned in this invoice is warrented to be of the nature and quality which is purport to be -->

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
</html>