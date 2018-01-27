<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function newsapi(Request $request)
    {
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
        $data['news_sources'] = $this->allSources(); //retrieve all news sources
      //  var_dump($data);
//        echo "<pre>";
//            print_r($data);
//        echo "</pre>";

        return view('newsdata', $data);
    }

    public function allSources()
    {
        $api        = new Api;
        $allSources = $api->getAllSources(); //retrieve all news sources

        return $allSources;
    }


    public function SearchNews(Request $request){

        $this->validate($request ,
            ['keyword' => 'required']
            );
        $api = new Api;
        $data['news']  = $api->getNewsBySearch($request->input('keyword'));
        return view('newsdata', $data);

    }

    function getUuid(){
        $api = new Api;
        $uuid =  $api->getImages("https://www.welcome-2-mallorca.com/images/Summer-Place-Grendon-Underwood.jpg");
        $collection = $api->getFilteredImages($uuid);

        return view('Filtered-images',compact('collection'));

    }

}
