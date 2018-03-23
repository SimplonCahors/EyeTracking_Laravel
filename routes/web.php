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

Route::get('/', 'ComicsController@show');


// ->update(['com_title' => $request->input('auteur'), 'com_author' => ]);



Route::get('/catalogue', 'ComicsController@show')->name('catalogue');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/legalmentions', function () {
    return view('legalmentions');
})->name('legalmentions');


// FROM FRONT : this route is used to show the sample board
// Remove this line and board.blade.php
Route::get('/board', function () {
    return view('board');
})->name('board');

//Modification d'une bd//
Route::get('/update', function () {
    return view('update');
})->name('update');

// FROM FRONT : this route is used to show the sample board with sounds
// Remove this line and board_mapping.blade.php
Route::get('/board_mapping', function () {
    return view('board_mapping');
})->name('board_mapping');

Route::get('/ajouter-bd', function () {
    return view('ajouter-bd');
}) -> name('ajouter-bd');

Route::post('ajouter-bd', 'ComicsController@add');

Route::get('/button-update-bd', function(){
    return view('button-update-bd');
}) -> name('button-update-bd');


Route::get('/update-bd/{id}', 'ComicsController@fetchUniqueBD')->name('update-bd');


Route::get('/update-bd', function(){
    return view('update-bd');
}) ->name('update-bd');
Route::post('/update-bd', 'ComicsController@update');


Route::get('/delete-bd', function () {
    return view('delete-bd');
}) -> name('delete-bd');
Route::post('/delete-bd', 'ComicsController@delete');

