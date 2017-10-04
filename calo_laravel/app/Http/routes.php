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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/subject', 'HomeController@subject');

Route::get('/sm', 'HomeController@sm');

Route::get('/educ', 'HomeController@educ');

Route::get('/aboutphp2', 'HomeController@aboutphp2');

