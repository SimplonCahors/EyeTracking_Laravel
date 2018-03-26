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

Route::get('/', 'WelcomeController@last');

/*
PAGE
*/

// Ajouter page depuis idBD (clé étrangère fk_com_oid de 'pages')
Route::get('/add/page/{idBD}', function ($idBD) {
    return view('addPage', ['idBD' => $idBD]);
}) -> name('addPage');


Route::post('/add/page/{idBD}', 'PageController@create');

// Afficher page depuis idBD >> idPage (pag_number de 'pages')
Route::get('/showPage/{idBD}/{idPage}', function ($idBD, $idPage) {
    return view('showPage', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('showPage');

Route::get('/showPage/{idBD}/{idPage}', 'PageController@show');
// FIN PAGE

/*
COMIC
*/

Route::get('/home', 'HomeController@index')->name('home');

// Le controller show renvoie à la vue welcome. Donc cette vue/ le controller est à modifier

Route::get('/catalogue', 'ComicsController@show')->name('catalogue');


Route::get('/legalmentions', function () {
    return view('legalmentions');
})->name('legalmentions');

// FROM FRONT : this route is used to show the sample board
// Remove this line and board.blade.php
Route::get('/board', function () {
    return view('board');
})->name('board');


Route::get('/mapping', function () {
    return view('mapping');
})->name('mapping');



// FROM FRONT : this route is used to show the sample board with sounds
// Remove this line and board_mapping.blade.php
Route::get('/board_mapping', function () {
    return view('board_mapping');
})->name('board_mapping');


//******BD********************//
// FROM BACK : This is the form, and on submit the ::post is called
Route::get('/ajouter-bd', function () {
    return view('ajouter-bd');
})->name('ajouter-bd');

Route::post('ajouter-bd', 'ComicsController@add');

//Modification d'une bd//
// From back: there's some html and css not reaching routes with parameters. 
Route::get('/update-bd/{id}', 'ComicsController@fetchUniqueBD')->name('update-bd/');

Route::get('/update-bd', function () {
    return view('update-bd');
})->name('update-bd');
Route::post('/update-bd/{id}', 'ComicsController@update');

// FROM BACK : right now it's an input that then pass the comics' id  in $GET. 
// /!\ Doesn't work if you have pages in your DB that are linked to it 
Route::get('/delete-bd', function () {
    return view('delete-bd');
})->name('delete-bd');
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

Route::get('/modifBoard', function () {
    return view('modifBoard');
})->name('modifBoard');


