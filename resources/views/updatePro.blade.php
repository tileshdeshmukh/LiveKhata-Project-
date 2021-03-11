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
    <h2 class="text-center mt-2">Product Tree</h2>
    <div class="container">

            <div class="row" >
            <div class="offset-2"></div>
                <div class="col-lg-8 mt-3" >
                      
    
 
                
                <!-- action="{{route('proTree.created')}}" -->
                <form method="POST" action="{{route('proTreeUpdate.created')}}">
        @csrf
        <input type="hidden" class="form-control" value="{{$product['id']}}" id="id" name="id" >
                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="name">Item Name :</label>
                        <input type="text" class="form-control"  value="{{$product['itemname']}}" id="name" name="itemname" placeholder="Item Name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name">Item Code :</label>
                        <input type="text" class="form-control"  value="{{$product['itemcode']}}" id="name" name="itemcode" placeholder="Item Code">
                        </div>

                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="cmpbankdetails">Description :</label>
                        <input type="text" class="form-control" value="{{$product['description']}}" id="cmpbankdetails" name="description" placeholder="Description">
                        </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Unit :</label>
                        <input type="text" class="form-control" value="{{$product['unit']}}" id="cmpbankdetails" name="unit" placeholder="Unit">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cmpbankdetails">HSN / SAC :</label>
                            <input type="text" class="form-control" value="{{$product['hsn_sac']}}" id="cmpbankdetails" name="hsn_sac" placeholder="HSN / SAC">
                        </div>
                        </div>
                       

                      

               
<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="cmpbankdetails">Selling Rate :</label>
                        <input type="text" class="form-control" value="{{$product['Selling_Rate']}}" id="cmpbankdetails" name="Selling_Rate" placeholder="Selling Rate">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cmpbankdetails">Buying Rate :</label>
                            <input type="text" class="form-control" value="{{$product['Buying_Rate']}}" id="cmpbankdetails" name="Buying_Rate" placeholder="Buying Rate">
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
                                            <option selected value="{{$product['item_type']}}">{{$product['item_type']}}</option>                                                                                                                 
                                            <option  value="Imported">Imported</option>                                                                                                                 
                                            <option  value="Branded">Branded</option>
                                        </select>        
                         </div>

                       
                        </div>

                        <div class="form-row">                    
                        <div class="form-group col-md-6">
                        <label for="inputState">Product Category :</label>
                            <select id="inputState" name="product_category" class="form-control">
                                <option selected value="{{$product['product_category']}}">{{$product['product_category']}}</option>
                                <option  value="Normal">Normalcd</option>
                                <option value="CapitalGoods">CapitalGoods</option>                                    
                                <option value="Exempted">Exempted</option>                                    
                                <option value="Non-GST">Non-GST</option>                                    
                                <option value="ReverseCharge">ReverseCharge</option>                                    
                                <option value="Nil">Nil</option>                                    
                            </select>
                    </div>


                        <div class="form-group col-md-6">
                        <label for="name">GST Unit :</label>
                        <input type="text" class="form-control" value="{{$product['gst_unit']}}" id="name" name="gst_unit" placeholder="GST Unit">
                        </div>
                        </div>

                        <div class="form-row">                    
                            <div class="form-group col-md-6">
                            <label for="inputState">Taxes :</label>
                                <select id="inputState" name="Taxes" class="form-control">                                                                                 
                                    <option selected value="{{$product['Taxes']}}">{{$product['Taxes']}}</option> 
                                    @foreach ($productswithtax as $tax)  
                                        <option value="{{$tax['name']}}">{{$tax['name']}}</option> 
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">INCL Rate:</label>
                                    <select id="inputState" name="INCL" class="form-control">
                                        <option selected value="{{$product['INCL']}}">{{$product['INCL']}}</option>                                            
                                    </select>
                            </div>
                        </div>

                        <div class="form-row">                    
                            <div class="form-group col-md-6">
                            <label for="inputState">Brand Name :</label>
                                <select id="inputState" name="Brand_Name" class="form-control">
                                    <option selected value="{{$product['Brand_Name']}}">{{$product['Brand_Name']}}</option>      
                                    @foreach ($productswithbrand as $brand) 
                                        <option value="{{$brand['brand_name']}}">{{$brand['brand_name']}}</option> 
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">Size :</label>
                                    <select id="inputState" name="Size" class="form-control">
                                        <option selected value="{{$product['Size']}}">{{$product['Size']}}</option>   
                                        @foreach ($productswithsize as $size) 
                                            <option value="{{$size['size_name']}}">{{$size['size_name']}}</option> 
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
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/state.js"></script>
</html>