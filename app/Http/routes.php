<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', 'PageController@index');
    Route::get('/forget', 'PageController@forget');
    Route::get('/dashboard', 'PageController@dashboard');
    Route::get('/profile', 'PageController@profile');
    Route::get('/logout', 'PageController@logout');
    Route::get('/getactivity', 'UserController@getActivity');
    Route::get('/getprofile/{abhyasiid}', 'UserController@getProfile');
    Route::post('/loginvalidate','UserController@validateuser');
    Route::get('/alluser','UserController@getAllUser');









    Route::get('/demo', 'PageController@demo');
});
