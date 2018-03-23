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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalogue', 'ComicsController@show')->name('catalogue');


//******BD********************//
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


//*******MEDIAS ********//
// /!\ pour upload des fichiers : consulter "try file uploading" dans le read me 

//permet de visualiser tout les médias, d'en ajouter, et supprimer à l'unité
Route::get('/medias', 'MediasController@read')->name('medias');

//un <a> sur /medias permet d'y accéder.
Route::get('/medias-upload', function () {
    return view('medias-upload');
    
});
// est juste appellée quand on créé un nouveau média à partir de upload. n'est même pas une vue
Route::post('/upload/save', 'MediasController@create');

//appellée par un bouton par media sur la page /medias
Route::get('/medias/delete', 'MediasController@delete')->name('medias/delete');
