<?php

namespace App\Http\Controllers;
use App\Models\ServiceBill;
use App\Models\Services_bill_data;
use Auth;

use Illuminate\Http\Request;
// use Illuminate\Supoort\Facades\DB;

class showServiceBillsController extends Controller
{
  


    public function serviceBillFetch()
    {
    //   $voucherId= $id;
      $compay_id= Auth::user()->id;
     
      $data['serviceBillFetch1'] = Services_bill_data::where("cmp_id", "=", $compay_id)
            //   ->where('service_bill_id', '=', $voucherId)
      ->get();

       $data['serviceBillFetch'] = ServiceBill::orderBy('Voucher_no', 'DESC')
     ->
      where("cmp_id", "=", $compay_id)
    //   ->where('Voucher_no', '=', $voucherId)
      ->get();

    // return $data;

    return view('/showServiceBillList',$data);
    }
    // public function serviceBillFetch($id)
    // {
    //   $voucherId= $id;
    //   $compay_id= Auth::user()->id;
    //   $data['serviceBillFetch1'] = Services_bill_data::
    //   where("cmp_id", "=", $compay_id)
    //   ->where('service_bill_id', '=', $voucherId)
    //   ->get();

    //  $data['serviceBillFetch'] = ServiceBill::
    //   where("cmp_id", "=", $compay_id)
    //   ->where('Voucher_no', '=', $voucherId)
    //   ->get();

    // // return $data;

    // return view('/showServiceBills',$data);
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
