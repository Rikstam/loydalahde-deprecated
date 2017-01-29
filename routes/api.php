<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//from 5.2

Route::group(['namespace' => 'Api'], function () {
    Route::resource('springs', 'SpringController', ['only' => ['index', 'show']]);
    Route::get('cities/{name}', 'SearchController@preFetchSearchTerms');
});

Route::group([
    'prefix' => 'admin-api',
    'namespace' => 'AdminApi',
    'middleware' => ['web', 'auth']
], function () {
    Route::resource('springs', 'SpringController');
});

Route::group([
    'prefix' => 'protected-api',
    'middleware' => 'auth:api'
],
    function () {
        Route::get('users/{user}', function (App\User $user) {
            return $user;
        });

        // return Auth::guard('api')->user();
    });