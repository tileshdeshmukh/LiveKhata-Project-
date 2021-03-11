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
    
        @if(Session::has('Record'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Record')}}
            </div>
        @endif
    <div class="container mt-3">
        <div class="row">
        
       
            <div class="col-lg-10">
            <form method="GET" action="{{url('/accountTreeSearch')}}">
                        <div class="form-row">
                        <!-- <div class="input-group col-sm-6" style="height:30px;">
                                
                                <input type="search" class="form-control" id="name" name="Sbtn"  placeholder="Search Item">                        
                                
                                <span class="input-group-prepend">
                                    <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img src="img/search.png" alt=""></button>
                                </span>
                    </div> -->
                                <div class="form-group col-sm-12">
                                    <h4 class="ml-1">Account Master</h4>   
                                </div>
                                
                        </div>
                    </form> 
                    
                    <table class="table table-sm text-white" style="background-color:#10ac84;border:solid 1px white;">
                        
                        <thead>
                            <tr>
                           
                            
                            <th scope="col">Accounts </th>
                            <th scope="col">City</th>                                                                       
                            <th scope="col">Mobile No</th>                        
                            <th scope="col" class="float-right pr-5" >Action</th>                        
                            </tr>
                        </thead>
                        <tbody style="background-color:#d1faf0; color:black;border:solid 1px white;">
    
                                    <!-- // foreach($data['group_list'] as $g)
                        //     {
                        //         echo "group name is ".$data['group_name_list'][$a]."<br>";
                        //         $a++;
                        //         foreach($data['accountsName'] as $ac)
                        //         {                    
                        //             if($g==$ac->group_id)
                        //             {
                        //                 echo "member is ".$ac->name. "<br>";
                        //             }
                        //         }
                        //     } -->

                        @foreach($group_list as $g)
                                    <tr >
                                        <td class="p-1 text-white" style="background-color:#73f2d2; color:black;border:solid 1px white;" colspan="5" ><strong>{{$group_name_list[$a]}}</strong></td>
                                    </tr>
                                    <?php $a++; ?>
                                @foreach($accountsName as $accountsName1)
                                     @if($g==$accountsName1->group_id )
                                    <tr>
                                       
                                        <div class="">
                                                 
                                                <td class="p-1" >{{$accountsName1->name}}</td>             
                                                <td class="p-1" >{{$accountsName1->city}}</td>                                                    
                                                <td class="p-1" >{{$accountsName1->mobile_no}}</td>  
                                                <td class="p-1" >
                                                <div class="div float-right" style="";>
                                                    <a href={{"update/".$accountsName1->id}}> <button class="btn btn-outline-dark p-1" ><img src="img/edit.png" alt=""> </button> </a>
                                                    <a href={{"delete/".$accountsName1->id}}> <button class="btn btn-outline-dark p-1"><img src="img/delete.png" alt=""> </button></a>
                                                    <a href="#" onclick="add({{$accountsName1->id}});"><button class="btn btn-outline-dark p-1" data-toggle="modal" data-target=".accountTreeGroupForm" data-whatever="@mdo"> <img src="img/group.png" class="img-fluid" alt=""></button></a>
                                                </div>
                                            </td> 
                                        </div>
                                    </tr>
                                    @endif
                                @endforeach
                  
                                   
                            @endforeach                          
                         
                        </tbody>
                </table>
            </div>
      

            <div class="col-lg-2" >
                <div class="">
                    <h4 class="ml-3">Controls</h4>                    
                    <button class="btn  text-white controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".accountTreeGroup" data-whatever="@mdo">Add Group</button></br>
                    <button class="btn text-white  mt-2 controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".accountTreeAddAccount" data-whatever="@mdo">Add Account</button>
                    <button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".accountTreeImport" data-whatever="@mdo">Import</button>
                    <a href="{{url('/export-accountTree')}}"> <button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;">Export to Excel</button></a>
                    <button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;">Delete All</button>

                    
                </div>
            </div>
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
        <form method="POST" action="{{route('accTree.created')}}">
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
  
    <div class="modal fade accountTreeGroup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account Tree (Add Account Group)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Account1" role="tab" aria-controls="home" aria-selected="true">Account</a>
        </li>
     
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Account1" role="tabpanel1" aria-labelledby="home-tab">
        
        <div class="mt-3">
        <form method="POST" enctype="multipart/form-data" >
        @csrf

            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Group Name :</label>
            <input type="text" class="form-control" id="name" name="groupname" placeholder="Group Name">
            
            </div>
            </div>
           
            

        </div>
      
        <!--  -->
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                <input type="submit" class="btn btn-primary" form-action="{{route('accountGroup.create')}}" value="Submit" >
            </div>
            </div>
            </form>
            </div>

            <div class="form-row">
           <div class="offset-3"></div>
            <div class="form-group col-md-6">
            <table class="table table-sm" >                        
                        <thead class="thead-dark">
                            <tr>                           
                                <th scope="col">Group List</th>                                                 
                                <th scope="col">Delete</th>                                                 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accountsGroup as $groupName)
                                <tr>
                                    <td>{{$groupName->groupname}}</td>
                                    <td><a href={{"deleteGroup/".$groupName->id}}> <button class="btn btn-outline-dark p-1"><img src="img/delete.png" alt=""> </button></a></td>
                                </tr>
                                
                            @endforeach
                        </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
  
 
</section>
<!-- End Account Tree Add Group modal End -->

<!-- Account Tree Add GroupForm modal -->
<section>
  
    <div class="modal fade accountTreeGroupForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Move Account to Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Account1" role="tab" aria-controls="home" aria-selected="true">Account</a>
        </li>
     
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Account1" role="tabpanel1" aria-labelledby="home-tab">

        <div class="mt-3">

    <form method="POST"  action="{{route('moveGroup.update')}}">
    @csrf
            <div class="form-row">
            <div class="offset-3"></div>
            <div class="form-group col-md-6">
            
            <label for="name">Choose Group Name :</label>
            <input type="hidden" class="fetchId" name="id">
                     <select id="" name="group_id" class="form-control">                                                                                                                       
                         @foreach ($accountsGroup as $groupName)
                             <option  value="{{$groupName->id}}">{{$groupName->groupname}}</option>   
                         @endforeach
                     </select>         
            </div>
            </div>        
        </div>
      
        <!--  -->
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                <input type="submit" class="btn btn-primary" value="Submit" >
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>
  
  
</section>
<!-- End Account Tree Add GroupForm modal End -->

<!-- Account Tree Import Account modal -->
<section>
 
    <div class="modal fade accountTreeImport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account Tree Import (Excel)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Import1" role="tab" aria-controls="home" aria-selected="true">Account</a>
        </li>
     
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Import1" role="tabpanel1" aria-labelledby="home-tab">

        <div class="mt-3">

        <form method="POST" enctype="multipart/form-data" action="{{route('account.import')}}">
        @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="name">Choose Excel:</label>
                <input type="file" class="form-control" name="file">
                </div>
            </div>
           

        </div>
      
        <!--  -->
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                <input type="submit" class="btn btn-primary" value="Submit" >
            </div>
            </div>
  </form>
            </div>
        </div>
    </div>
  
</section>
<!-- Account Tree Import Account modal End -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/state.js"></script>
<script>
        function add(id)
          {            
            $(".fetchId").val(id);     
            // console.log(id);           
          }
    </script>  
</html>