<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (($_SERVER["REQUEST_METHOD"] == "POST")){
            //Here is an example of the what will be received by POST 'al-jazeera-english : Al Jazeera English',
            //we need to split it up using a php function called exlpode(), explode() creates an array 'al-jazeera-english' is the source while 'Al Jazeera English' is the source name
            $source                   = $_POST['source'];
            $split_input              = explode(':', $source);
            $source                   = trim($split_input[0]); //trim() removes white spaces

            $data['source_name']      = $split_input[1];

        }

        if (empty($source)) {
            //Let us make `CNN` our default news source
            $source                 = 'cnn';
            $data['source_name']    = 'CNN';
            $data['source_id']      = $source;
        }

        $api = new Api;

        $data['news']         = $api->getNews($source); // Passed  source id to our api model, to fetch news by the selected source
       // $data['news_sources'] = $this->allSources(); //retrieve all news sources
        //  var_dump($data);
//        echo "<pre>";
//            print_r($data);
//        echo "</pre>";



        return view('book.index',$data);
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
