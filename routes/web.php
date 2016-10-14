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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('hello','HelloController@index');

//Route::get('/article', function () {
//    return view('welcome');
//});

Route::get('/article','ArticleController@index');

Route::get('/article/create','ArticleController@create');

Route::post('/article/store','ArticleController@store');
Route::get('/article/complete','ArticleController@complete');

Route::get('/article/edit/{id}','ArticleController@edit');
