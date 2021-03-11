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
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-10">
                    <form  method="GET" action="{{url('/productTreeSearch')}}">
                        <div class="form-row">
                        <!-- <div class="input-group col-sm-6" style="height:30px;">
                                
                                <input type="search" class="form-control" id="name" name="Sbtn"  placeholder="Search Item">                        
                                <span class="input-group-prepend">
                                    <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img src="img/search.png" alt=""></button>
                                </span>
                            </div> -->
                                    <div class="form-group col-sm-6">
                                        <h4 class="">Product Master</h4>
                                    </div>
                                
                        </div>
                    </form> 
                    <!-- <table class="table table-hover" style="border:solid 1px white;"> -->
                    <table class="table table-sm text-white" style="background-color:#10ac84;border:solid 1px white;">

                                
                                <thead style="background-color:#10ac84;">
                                    <tr>
                                    
                                    <th scope="col">Item Name</th>
                                    <th scope="col">HSN Code</th>                        
                                    <th scope="col">Taxes</th>                        
                                    <th scope="col">Closing Stock</th>                        
                                    <th scope="col" style="";>Action</th>                      
                                    </tr>
                                </thead>
                                <tbody style="background-color:#d1faf0; color:black;border:solid 1px white;">

                                @foreach($group_list as $g)
                                    <tr >
                                        <td class="p-1 text-white" style="background-color:#73f2d2; color:black;border:solid 1px white;" colspan="5" ><strong>{{$group_name_list[$a]}}</strong></td>
                                    </tr>
                                    <?php $a++; ?>
                                @foreach($products as $product1)
                                     @if($g==$product1->group_id)
                                    <tr>
                                       
                                        <div class="">
                                                 
                                                <td class="p-1" >{{$product1->itemname}}</td>             
                                                <td class="p-1" >{{$product1->hsn_sac}}</td>   
                                                <td class="p-1" >{{$product1->Taxes}}</td>             
                                                <td class="p-1" >{{$product1->unit}}</td>  
                                                <td class="p-1" >
                                                <div class="div float-right" style="";>
                                                    <a href={{"updatePro/".$product1->id}}> <button class="btn btn-outline-dark p-1" ><img src="img/edit.png" alt=""> </button> </a>
                                                    <a href={{"deletePro/".$product1->id}}> <button class="btn btn-outline-dark p-1"><img src="img/delete.png" alt=""> </button></a>
                                                    <a href="#" onclick="add({{$product1->id}});"><button class="btn btn-outline-dark p-1" data-toggle="modal" data-target=".productTreeGroupForm" data-whatever="@mdo"> <img src="img/group.png" class="img-fluid" alt=""></button></a>
                                                </div>
                                            </td> 
                                        </div>
                                    </tr>
                                    @endif
                                @endforeach
                  
                                   
                            @endforeach    
                                <!-- -------------- -->
                               
                                </tbody>
                        </table>
            </div>
            <div class="col-lg-2 col-lg-2">
                <div>
                    <h4 class="">Controls</h4>
                    <button class="btn  text-white controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".productTreeAddGroup" data-whatever="@mdo">Add Group</button></br>
                    <button class="btn text-white  mt-2 controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".productTreeAdd" data-whatever="@mdo">Add Product</button>
                    <button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;"  data-toggle="modal" data-target=".productTreeImport" data-whatever="@mdo">Import</button>
                    <a href="{{url('/export-productTree')}}"><button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;">Export to Excel</button></a>
                    <button class="btn  text-white mt-2 controlBtn" style="background-color:#10ac84;">Delete All</button>
                </div>
            </div>
        </div>
    </div>

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

            <form method="POST" action="{{route('proTree.created')}}">
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
                            <input type="text" class="form-control" id="cmpbankdetails" name="description" placeholder="Description">
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
  

</section>
<!-- Account Tree Add Group modal End -->
<!-- Warehouse Import Account modal -->
<section>
 
    <div class="modal fade productTreeImport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Tree Import (Excel)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Import1" role="tab" aria-controls="home" aria-selected="true">Excel</a>
        </li>
     
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Import1" role="tabpanel1" aria-labelledby="home-tab">

        <div class="mt-3">

        <form method="POST" enctype="multipart/form-data" action="{{route('productTree.import')}}">
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



<!-- Account Tree Add Account modal -->
<section>
 
    <div class="modal fade productTreeAddGroup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Tree (Add Product Group)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Account1" role="tab" aria-controls="home" aria-selected="true">Product Details</a>
        
        </li>
       
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Account1" role="tabpanel1" aria-labelledby="home-tab">

        <div class="mt-3">     
        <form method="POST" enctype="multipart/form-data" action="{{route('productGroup.created')}}">
            @csrf
           
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Group Name :</label>
                    <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Group Name">                            
                    <!-- <input type="hidden" class="form-control" id="cmp_id" value="{{ Auth::user()->id }}" name="cmp_id" > -->
                        </div>
                       
                    </div>
                            
                </div>
            
                <!--  -->
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                        <input type="submit" class="btn btn-primary"  value="Submit" >
                    </div>
                    </div>
        </form>

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
                            @foreach ($productGroup as $groupName)
                                <tr>
                                    <td>{{$groupName->groupname}}</td>
                                    <td><a href={{"deleteproductGroup/".$groupName->id}}> <button class="btn btn-outline-dark p-1"><img src="img/delete.png" alt=""> </button></a></td>
                                </tr>
                                
                            @endforeach
                        </tbody>
            </table>
            </div>
            </div>
           
        </div>

     </div>
</section>
<!-- Account Tree Add Account modal End -->



<!-- Product Tree Change Group modal -->
<section>
  
    <div class="modal fade productTreeGroupForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

    <form method="POST"  action="{{route('moveproductGroup.update')}}">
    @csrf
            <div class="form-row">
            <div class="offset-3"></div>
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


<!-- Warehouse Import Account modal End -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
        function add(id)
          {            
            $(".fetchId").val(id);     
            // console.log(id);           
          }
    </script>  
</html>