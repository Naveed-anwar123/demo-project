<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      $user = User::where('referral_by', '=' , Auth::user()->affiliate_id)->get();
      return view('home',compact('user'));
    }
}
