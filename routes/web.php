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

Route::get('/catalogue', 'ComicsController@show')->name('catalogue');

Route::post('/upload/save', 'MediasController@create');

Route::get('/upload', function () {
    return view('upload');
});


Route::get('/medias', 'MediasController@read')->name('medias');