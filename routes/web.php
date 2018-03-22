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

// Ajouter page depuis l'id d'une BD (fk_com_oid)
Route::get('/add/page/{idBD}', function ($idBD) {
    return view('addPage', ['idBD' => $idBD]);
}) -> name('addPage');

Route::post('/add/page/{idBD}', 'PageController@create');


// Afficher page depuis idBD >> idPage (pag_number)
Route::get('/showPage/{idBD}/{idPage}', function ($idBD, $idPage) {
    return view('showPage', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('showPage');

Route::get('/showPage/{idBD}/{idPage}', 'PageController@show');


Route::get('/catalogue', 'ComicsController@show')->name('catalogue');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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
