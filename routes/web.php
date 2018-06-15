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

Route::get('/', function () {
    return view('welcome');
});


/*user info route*/
Route::get('/user', 'UserController@index');

/*user info route*/
Route::get('/user/{id}/{nickname?}', 'UserController@show');

/*create new user */
Route::get('/user/new', 'UserController@create');

/*versus route*/
Route::get('/versus', 'VersusController@index');