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
    <h2 class="text-center mt-2">Salesman</h2>
    <div class="container">

            <div class="row" >
            <div class="offset-2"></div>
                <div class="col-lg-8 mt-3" >

    <form method="POST" action="{{route('salesmanUpdate.created')}}">
        @csrf
        <input type="hidden" class="form-control" value="{{$salesmanUpdate['id']}}" id="id" name="id" >
        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Salesman Name :</label>
                                <input type="text"  value="{{$salesmanUpdate['salesman_name']}}" class="form-control" id="name" name="salesman_name" placeholder="Salesman Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Code :</label>
                                <input type="text"  value="{{$salesmanUpdate['salesman_code']}}" class="form-control" id="name" name="salesman_code" placeholder="Code">
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
            </div>
    </div>
       


<!-- Account Tree Add Account modal End -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</html>