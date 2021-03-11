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
        <div class="row">
        <div class="col-lg-10">
            <form method="GET" action="{{url('/sizeSearch')}}">
                        <div class="form-row">
                        <div class="input-group col-sm-6" style="height:30px;">
                                
                                <input type="search" class="form-control" id="name" name="Sbtn"  placeholder="Search Item">                        
                                
                                <span class="input-group-prepend">
                                    <button class="btn text-white" style="background-color:#10ac84;" type="submit"><img src="img/search.png" alt=""></button>
                                </span>
                    </div>
                                <div class="form-group col-sm-6">
                                    <h4 class="ml-1">Size</h4>
                                </div>
                                
                        </div>
                    </form>
                <table class="table table-hover text-white" style="background-color:#10ac84;border:solid 1px black;">
                        
                        <thead>
                            <tr>
                            <th scope="col">Sr No</th>
                            <th scope="col">Size List</th>
                            
                            <th scope="col">Action</th>                        
                            </tr>
                        </thead>
                        <tbody style="background-color:#d1faf0; color:black;border:solid 1px white;">
                            @foreach ($size as $sizeRecord)
                            <tr id="sid{{$sizeRecord->id}}">
                            <th class="p-1" >{{$sizeRecord->id}}</th>
                            <td class="p-1">{{$sizeRecord->size_name}}</td>                                                    
                            <td class="p-1">
                            <div class="div" >
                                 <a href={{"updateSize/".$sizeRecord->id}}><button class="btn btn-success p-1"><img src="img/edit.png" alt=""> </button> </a>
                                 <a href={{"deleteSize/".$sizeRecord->id}}><button class="btn btn-danger p-1"><img src="img/delete.png" alt=""> </button></a>
                                </div>
                            </td>   
                        </tr>
                        @endforeach                          
                          

                        </tbody>
                        <!-- <tfoot>
                        <tr>
                            <th scope="col"><input type="checkbox" class="selectall2"></th>
                            <th scope="col">Size List</th>
                            <th scope="col" style="float:right";>Action</th>                        
                            </tr>
                        </tfoot> -->
                </table>
                          
            </div>
            <div class="col-lg-2">
                <div>
                    <h4 class="">Controls</h4>                    
                    <button class="btn text-white  mt-2 controlBtn" style="background-color:#10ac84;" data-toggle="modal" data-target=".addBrand" data-whatever="@mdo">Add Account</button>                    
                    <button class="btn  text-white mt-2 controlBtn" id="deleteAllSelectedRecord" style="background-color:#10ac84;"  data-toggle="modal" data-target=".sizeImport" data-whatever="@mdo">Import</button>
                    <a href="{{ url('/export-size')}}"><button class="btn  text-white mt-2 controlBtn" id="deleteAllSelectedRecord" style="background-color:#10ac84;">Export to Excel</button></a>
                    <button class="btn  text-white mt-2 controlBtn" id="deleteAllSelectedRecord" style="background-color:#10ac84;">Delete All</button>
                </div>
           
            </div>
        </div>
    </div>

<!-- Account Tree Add Group modal -->
<section>
 
    <div class="modal fade addBrand" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Size (Add Size Group)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
        <!--  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Product" role="tab" aria-controls="home" aria-selected="true">Brand Details</a>
        </li>
      
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Product" role="tabpanel" aria-labelledby="home-tab">

        <div class="mt-3">

        <form method="POST" action="{{route('size.created')}}">
        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="name">Size Name :</label>
                        <input type="text" class="form-control" id="name" name="size_name" placeholder="Size Name">
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
  
 
</section>
<!-- Account Tree Add Group modal End -->

<!-- Account Tree Import Account modal -->
<section>
 
    <div class="modal fade sizeImport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">                
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Size Import (Excel)</h5>
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

        <form method="POST" enctype="multipart/form-data" action="{{route('size.import')}}">
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

<script type="text/javascript"> 
    $(function(e){
        $("#chkCheckAll").click(function(){
            $(".checkBoxClass").prop('checked',$(this).prop('checked'));
        })
        $("#deleteAllSelectedRecord").click(function(e){
            e.preventDefault();
            var allids = [];        

            $("input:checkbox[name=ids]:checked").each(function(){
                allids.push($(this).val());
            });   
     

        $.ajax({
            url:"{{route('size.deleteAll')}}",
            type:"DELETE",
            date:{
                _token:$("input[name=_token]").val(),
                ids:allids
            },
            success:function(response){
                $.each(allids,function(key,val){
                    $("#sid"+val)..remove();
                })
            }
        });
    })
});
</script>
</html>