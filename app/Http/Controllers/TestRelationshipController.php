<?php

namespace App\Http\Controllers;

use App\Bear;
use App\Fish;
use App\Picnic;
use Illuminate\Http\Request;

class TestRelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // find a bear named Adobot

   //    Updation one to one
        /*
           $adobot = Bear::where('name', '=', 'Adobot')->first();
    //      $fish = $adobot->fish;
        //  echo   $fish->weight;
          // $fish = new Fish();
        // alternatively you could go straight to the weight attribute
           $adobot->fish->update(['weight'=>'790']);
    */


    //  one to many
     /*
        $lawly = Bear::where('name', '=', 'Lawly')->first();

        foreach ($lawly->trees as $tree)
            echo $tree->type . ' ' . $tree->age;
*/

        // get the picnics that Cerms goes to ------------------------
        $cerms = Bear::where('name', '=', 'Cerms')->first();

        // get the picnics and their names and taste levels
        foreach ($cerms->picnics as $picnic)
            echo $picnic->name . ' ' . $picnic->taste_level;

        // get the bears that go to the Grand Canyon picnic -------------
        $grandCanyon = Picnic::where('name', '=', 'Grand Canyon')->first();

        // show the bears
        foreach ($grandCanyon->bears as $bear)
            echo $bear->name . ' ' . $bear->type . ' ' . $bear->danger_level;




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
