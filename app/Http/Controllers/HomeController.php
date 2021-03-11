<?php

namespace App\Http\Controllers;
use App\Models\Shortcut;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $compay_id= Auth::user()->id;

        $data['shortcut'] = Shortcut::where("cmp_id", "=", $compay_id)->get();
        return view('adminDashbord',$data);
        
    }
   
}
