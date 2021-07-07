<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminpage.css">
    <title>Admin</title>
</head>

<body style="background-color:#d1faf0;">
    @include('adminnav')

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-10">

                <form method="get" action="productsearch">
                    <div class="form-row">
                        <div class="input-group col-sm-6" style="height:30px;">

                            <input type="search" class="form-control" id="name" name="Sbtn" placeholder="Search Product or Product....">

                            <span class="input-group-prepend">
                                <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img
                                        src="img/search.png" alt=""></button>
                            </span>
                        </div>


                </form>
                <div class="form-group col-sm-6">
                    <h4 class="">Product Master</h4>
                </div>

            </div>
            <table class="table table-sm text-white" style="background-color:#10ac84;border:solid 1px white;">


                <thead style="background-color:#10ac84;">
                    <tr>

                        <th scope="col">Item Name</th>
                        <th scope="col">HSN Code</th>
                        <th scope="col">Taxes</th>
                        <th scope="col">Closing Stock</th>
                        <th scope="col" style="" ;>Action</th>
                    </tr>
                </thead>
                <tbody style="background-color:#d1faf0; color:black;border:solid 1px white;">
                @foreach($product as $product1)
                                    
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
                                                    <!-- <a href="#" onclick="add({{$product1->id}});"><button class="btn btn-outline-dark p-1" data-toggle="modal" data-target=".productTreeGroupForm" data-whatever="@mdo"> <img src="img/group.png" class="img-fluid" alt=""></button></a> -->
                                                </div>
                                            </td> 
                                        </div>
                                    </tr>
                                    
                                @endforeach
                                </tbody>
                        </table>
        </div>

    </div>


        
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

          
        function INCLRate() {
           
            var val = $('.incl_rateTax').val()
            var xyz = $('#incl_rateTax option').filter(function () {
                return this.value == val;
            }).data('incl');
           
            var msg = xyz;
            
            $("#INCL").val(msg);            

        };

    </script>  
</html>