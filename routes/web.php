<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('changePassword', 'HomeController@changePassword');
Route::post('changePasswordRequest', 'HomeController@changePasswordRequest');



Route::resource('test', 'BearController');
Route::resource('relationship', 'TestRelationshipController');
Route::resource('query', 'QueryController');

Route::get('/api', 'ApiController@newsapi');
Route::post('/source_id', 'ApiController@newsapi');



Route::get('/template', function () {
    return view('newsdata');
});

Route::get('/search', 'ApiController@SearchNews')->middleware('auth');;

Route::resource('contact', 'ContactController');
Route::resource('book', 'BookController');

Route::get('/drop', 'DropzoneController@index');
Route::post('/dropzone', 'DropzoneController@dropzone');

Route::get('middleware', function () {
    //

})->middleware('location');


Route::get('/uuid', 'ApiController@getUuid');



Route::get('email-test', function(){
    $details['email'] = 'naveedanwar152@gmail.com';

    dispatch(new App\Jobs\SendEmailTest($details));


  //  dd('done');
});


Route::get('users','PdfController@index');
Route::get('generate','PdfController@generate');





Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('stripe',function(){
    return view('stripe');
});


Route::post( '/paywith', function (Request $request) {
    \Stripe\Stripe::setApiKey ( 'sk_test_k9ErqA5FdsAEg86ucsxpCdNC' );
    try {
      $response =   \Stripe\Charge::create ( array (
            "amount" => 300 * 100,
            "currency" => "usd",
            "source" => $request->post ( 'stripeToken' ), // obtained with Stripe.js
          //"customer" => 'tese@gmail.com'
            "description" => "Test payment.",
          //"customer" => 'naveedanwar152@gmail.com'
        ) );
        Session::flash ( 'success-message', 'Payment done successfully !' );
        //dd($request->post ( 'stripeToken' ));

        dd($response);
        //return Redirect::back ();
    } catch ( \Exception $e ) {
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return Redirect::back ();
    }
} );