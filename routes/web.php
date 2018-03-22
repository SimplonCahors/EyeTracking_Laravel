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


//permet de visualiser tout les médias
Route::get('/medias', 'MediasController@read')->name('medias');

//un <a> sur medias permet d'y accéder.
Route::get('/medias-upload', function () {
    return view('medias-upload');
    
});

// est juste appellée quand on créé un nouveau média à partir de upload. n'est même pas une vue
Route::post('/upload/save', 'MediasController@create');

//appellée par un bouton par media sur la page /medias
Route::get('/medias/delete', 'MediasController@delete')->name('medias/delete');