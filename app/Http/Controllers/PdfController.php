<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function index()
    {
        $users  = User::all();
        return view('all-users',compact('users'));
    }

    public function generate(){

    }
}
