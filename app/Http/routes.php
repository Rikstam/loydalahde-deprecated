<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('frontpage');
});

Route::post('hakutulokset', function(){
    return sprintf('Hakutulokset termille "%s"', Request::input('search'));
});
/*
Route::get('lahteet', function(){
    return view('springs.index')->with('springs', App\Spring::all());
});*/

Route::resource('lahteet', 'SpringController', ['only' => ['index', 'show']]);

Route::get('oldsprings', function(){

    $client = new \GuzzleHttp\Client(['base_uri' => 'http://loydalahde.com/wp-json/']);

    $response = $client->get('posts?filter[posts_per_page]=-1');

    //echo $response->getStatusCode();

    $bod = json_decode($response->getBody());
    //dd($bod);

    foreach($bod as $spr){
        echo $spr->title;
    }

    dd($bod);
});


//admin routing
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('springs', 'SpringController');
});