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

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('frontpage');
    });

    Route::post('hakutulokset',
        //return sprintf('Hakutulokset termille "%s"', Request::input('search'));
        'Api\SearchController@searchByTerm'
    );

    Route::resource('lahteet', 'SpringController', ['only' => ['index', 'show']]);

    Route::get('oldsprings', function () {
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://loydalahde.com/wp-json/']);
        $response = $client->get('posts?filter[posts_per_page]=-1');
        $bod = json_decode($response->getBody());
        //dd($bod);
        foreach ($bod as $spr) {
            echo $spr->title;
        }

        //dd($bod);
    });

});

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::resource('springs', 'SpringController', ['only' => ['index', 'show']]);
    Route::get('cities/{name}', 'SearchController@preFetchSearchTerms');
});
//Route::auth();
//Route::get('/home', 'HomeController@index');

//admin routing
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['web', 'auth']
    ], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('springs', 'SpringController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    //Route::get('/home', 'HomeController@index');
});

Route::group(['prefix' => 'protected-api', 'middleware' => 'auth:api'], function () {
    Route::get('users/{user}', function(App\User $user){
        return $user;
    });

    // return Auth::guard('api')->user();
});

