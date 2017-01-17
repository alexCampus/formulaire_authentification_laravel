<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'UserController@index');

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');

Route::get('/news/create', 'NewsController@create');
Route::post('/news', 'NewsController@store');
Route::get('/news/{id}/delete', 'NewsController@destroy');
Route::get('/news/{id}', 'NewsController@show');
Route::put('/news/{id}/update', 'NewsController@update');


Route::get('/mapage', function(){
	return view('user.result');
});

Route::get('/mesNews', 'NewsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
