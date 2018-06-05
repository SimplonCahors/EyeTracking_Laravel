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

/*
|--------------------------------------------------------------------------
| [ACCUEIL] / [CONNEXION] / [CATALOGUE] / [LEGALMENTIONS]
|--------------------------------------------------------------------------
*/
// page accueil | accès aux 3 dernières bd publiées
Route::get('/', 'HomeController@last')->name('home');

Route::get('/showPage/{idBD}/{idPage}', 'PageController@show');

// De Elisa: Semble inutile mais si laravel veut un /home : 
//  Route::redirect('/home', '/');

Route::get('/catalog', 'ComicsController@show')->name('catalog');

// page legalmentions | mentions légales
Route::get('/legalmentions', function () {
    return view('legalmentions');
  })->name('legalmentions');


/*
|--------------------------------------------------------------------------
| COMICS
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE COMICS ]---------------- */

// FROM BACK : This is the form, and on submit the ::post is called
Route::get('/comics/create', function () {
    return view('ajouter-bd');
})->name('ajouter-bd');

Route::post('/comics/create', 'ComicsController@add');


/* ----------------[ READ COMICS ]---------------- */
// not done


/* ----------------[ UPDATE COMICS ]---------------- */

// FROM BACK : there's some html and css not reaching routes with parameters.
Route::get('/comics/update/{id}', 'ComicsController@fetchUniqueBD')->name('update-bd/');

Route::post('/comics/update/{id}', 'ComicsController@update');


/* ----------------[ DELETE COMICS ]---------------- */

// FROM BACK : right now it's an input that then pass the comics' id  in $GET.
// /!\ Doesn't work if you have pages in your DB that are linked to it

// pas de confirmation/!\
Route::get('/comics/delete/{id}', 'ComicsController@delete')->name('comic_delete');


/*
|--------------------------------------------------------------------------
| PAGES
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE PAGES ]---------------- */

// Ajouter page depuis idBD (clé étrangère fk_com_oid de 'pages')
Route::get('/pages/create/{idBD}', function ($idBD) {
    return view('addPage', ['idBD' => $idBD]);
}) -> name('addPage');

Route::post('/pages/create/{idBD}', 'PageController@create');


/* ----------------[ READ PAGES ]---------------- */

// FROM FRONT : this route is used to show the sample board
// Remove this line and board.blade.php
Route::get('/pages/read/{idBD}/{idPage}', function () {
    return view('board');
})->name('board');

// FROM BACK : Afficher page depuis idBD >> idPage (pag_number de 'pages')
Route::post('/pages/read/{idBD}/{idPage}', function ($idBD, $idPage) {
    return view('showPage', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('showPage');

Route::get('/pages/read/{idBD}/{idPage}', 'PageController@show');

/* ----------------[ UPDATE PAGES ]---------------- */
// not done

/* ----------------[ DELETE PAGES ]---------------- */
// not done



/*
|--------------------------------------------------------------------------
| MEDIAS
|--------------------------------------------------------------------------
*/

// /!\ pour upload des fichiers : consulter "try file uploading" dans le read me


/* ----------------[ CREATE MEDIAS ]---------------- */

//un <a> sur /medias permet d'y accéder.
Route::get('/medias/create', function () {
    return view('medias-upload');
});

// est juste appellée quand on créé un nouveau média à partir de upload. N'est même pas une vue
// Route::post('/upload/save', 'MediasController@create');
Route::post('/modifBoard', 'MediasController@create');


/* ----------------[ READ AND DELETE MEDIAS ]---------------- */

// FROM BACK
//permet de visualiser tout les médias, d'en ajouter, et supprimer à l'unité

Route::get('/medias/read', 'MediasController@read')->name('medias');


/* ----------------[ UPDATE MEDIAS ]---------------- */
// not done


/* ----------------[ DELETE MEDIAS ]---------------- */

//appellée par un bouton par media sur la page /medias
Route::get('/medias/delete', 'MediasController@delete')->name('medias/delete');


/*
|--------------------------------------------------------------------------
| MAPPING
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE AND UPDATE MAPPING ]---------------- */

 Route::get('/pages/edit', function () {
     return view('modifBoard');
 })->name('modifBoard');

 Route::get('/pages/mapping', function () {
     return view('mapping');
 })->name('mapping');


/* ----------------[ READ MAPPING ]---------------- */

// FROM FRONT : this route is used to show the sample board with sounds
// Remove this line and board_mapping.blade.php
Route::get('/pages/mapping/test', function () {
    return view('board_mapping');
})->name('board_mapping');

/* ----------------[ DELETE MAPPING ]---------------- */
// not done
