<?php

namespace App;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    public function getNews($source){
        try {

            $client        = new GuzzleHttpClient();
            //with the code below, we can get news from multiple sources
            $apiRequest    = $client->request('GET', 'https://newsapi.org/v1/articles?source='.$source.'&sortBy=top&apiKey=7acd5b7b868e44808d157bf356c9bbdb' );

            $content       = json_decode($apiRequest->getBody()->getContents(), true);

            return $content['articles'];

        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }


    }



    public function getAllSources()
    {

        try {

            $client           = new GuzzleHttpClient();

            $apiRequest       = $client->request('GET', 'https://newsapi.org/v1/sources?language=en' );

            $content          = json_decode($apiRequest->getBody()->getContents(), true);

            return $content['sources'];

        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }


    public function getNewsBySearch($keyword)
    {
        try {

            $client = new GuzzleHttpClient();
            //with the code below, we can get news from multiple sources

            $apiRequest = $client->request('GET', 'https://newsapi.org/v2/everything?q=' . $keyword . '&apiKey=7acd5b7b868e44808d157bf356c9bbdb');

            $content = json_decode($apiRequest->getBody()->getContents(), true);

            //var_dump();
            return $content['articles'];
            //return $content['articles'];

        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }


        public function getImages($url){
            try {

                $client        = new GuzzleHttpClient();
                //with the code below, we can get news from multiple sources

                $apiRequest    = $client->request('POST', 'http://api.paintapic.com/api/v1/projects?image='.$url );

                $content       = json_decode($apiRequest->getBody()->getContents(), true);

                return $content['uuid'];
                //var_dump($content);
               // return $content['articles'];
                //return $content['articles'];

            } catch (RequestException $e) {
                //For handling exception
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            }


    }

    function getFilteredImages($uuid){
            $collection = [];
        try {

            $client        = new GuzzleHttpClient();
            //with the code below, we can get news from multiple sources

        for($i = 0; $i < 9 ; $i++){
            $apiRequest    = $client->post(
                                        'http://api.paintapic.com/api/v1/projects/'.$uuid.'/renderings',
                                        array(
                                                'form_params' => array(
                                                      "level_of_detail" => "1000",
                                                      'segmentation_shape'=> '0.5',
                                                      'number_of_paint_colors'=> '20',
                                                      "bilateral_filter_window"=> "3",
                                                      "gaussia_filter_window"=> "1",
                                                      "color_space"=> "LAB",
                                                      "canvas_size" => "m",
                                                      "outline_color"=> "0.75",
                                                      "contrast_enhancement"=> "false",
                                                      "noise_reduction"=> "0"

                                                )
                                            )
                            );
            $content       = json_decode($apiRequest->getBody()->getContents(), true);
            $collection[]  = $content;
        }
            return $collection;
            // return $content['articles'];
            //return $content['articles'];

        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }

    }








}
