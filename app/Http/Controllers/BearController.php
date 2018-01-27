<?php

namespace App\Http\Controllers;

use App\Bear;
use Illuminate\Http\Request;

class BearController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
/*
         $bear = new Bear;
        $bear->name  = 'Super Cool';
        $bear->type   = 'Black';
        $bear->danger_level = 1;

        // save the bear to the database
        $bear->save();
*/

//if name not found it will throw an exception
        /*
         $d = Bear::firstOrCreate(array('name' => 'Lawly'));
        var_dump($d);
         */
//First return class object while get return collection object
        /*
         $dangerousBears = Bear::where('danger_level', '>', 5)->first();
        var_dump($dangerousBears);
         */

//Updating an existing record
/*
        // find the bear
           $lawly = Bear::where('name', '=', 'Lawly')->first();
        // echo $lawly->name;   //  true but false in case of get due to collection
        $lawly->danger_level = 10;
        // save to our database
        //var_dump($lawly->save());

*/

//returns a collection
      /*
        $lawly = Bear::all();
        var_dump($lawly);
      */

//Deleting a record
        /*
         Bear::where('danger_level', '>', 5)->delete();
         */

















        //   echo "get it";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
