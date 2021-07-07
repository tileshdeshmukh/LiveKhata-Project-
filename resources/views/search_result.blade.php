<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        BASE_URL="<?php echo url(''); ?>";
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="css/taxinvoicetable.css">
    <link rel="stylesheet" href="../css/taxinvoicetable.css">
    <title>Admin</title>  

</head>
<body  style="background-color:#d1faf0;">
    @include('adminnav')
    <p class="text-center text-white"  style="background-color:#10ac84;font-size:22px;">Searching.........</p>

    <div class="">
    <div class="container mt-2" >
    <table class="table  table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Purchase Voucher No</th>
      <th scope="col">Name</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
        @foreach($search_data as $as)
        
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td>{{$as->Voucher_no}}</td>
      <td>{{$as->customer_name}}</td>
      <td>{{$as->totalRoundoffAmount}}</td>
      <td>{{$as->updated_at}}</td>
      <td><a href="{{$url}}/{{$as->Voucher_no}}" class="btn" type="submit" style="background-color:#10ac84;color:white;width:125px;border:2px solid white"> OPEN </a> </td>
    </tr>

    @endforeach
    
    </tbody>
</table>
</div>
    </div>
<
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/taxInvoiceService.js"></script>

<script>

</script>
</html>