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

Route::get('/add/page/{idBD}', function ($idBD) {
    return view('page', ['idBD' => $idBD]);
}) -> name('page');

Route::post('/add/page/{idBD}', 'PageController@ajoutPage');


Route::get('/deletepage', function () {
    return view('deletepage');
});
