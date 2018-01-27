<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    //

    function index(){
        return view('upload-files');
    }
    function dropzone(Request $request){
        response()->json($request);
    }
}
