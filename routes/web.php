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



Route::get('/ajouter-bd', function () {
    return view('ajouter-bd');
}) -> name('ajouter-bd');
Route::post('ajouter-bd', 'ComicsController@add');


Route::get('/catalogue', 'ComicsController@show')->name('catalogue');


Route::get('/update-bd/{id}', 'ComicsController@fetchUniqueBD')->name('update-bd');
Route::post('/update-bd/{id}', 'ComicsController@update');


Route::get('/delete-bd', function () {
    return view('delete-bd');
}) -> name('delete-bd');
Route::post('/delete-bd', 'ComicsController@delete');