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
    Auth::routes();

    Route::get('/', 'PageController@getFrontPage');

    Route::get('usein-kysytyt-kysymykset', function () {

        $page = App\Page::findBySlug('usein-kysytyt-kysymykset');

        return view('pages.show', compact('page'));
    });

    Route::get('vastuuvapauslauseke', function () {
        $page = App\Page::findBySlug('vastuuvapauslauseke');

        return view('pages.show', compact('page'));
    });

    Route::get('missio', function () {
        $page = App\Page::findBySlug('missio');

        return view('pages.show', compact('page'));
    });

    Route::post('hakutulokset',
        //return sprintf('Hakutulokset termille "%s"', Request::input('search'));
        'Api\SearchController@searchByTerm'
    );

    Route::resource('lahteet', 'SpringController', ['only' => ['index', 'show']]);

//admin routing
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index');
    //Route::resource('springs', 'SpringController');
    Route::resource('pages', 'PageController');

});