<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Supoort\Facades\Mail;
// use Illuminate\Supoort\Facades\DB;

class MailController extends Controller
{
  public function sendEmail(){
    $details = [
        'title' => 'abc',
        'body' => 'xyz'
    ];

    Mail::to("gadkarrushikesh906@gmail.com")->send(new TestMail($details));
    return "sent";
  }
  
}
