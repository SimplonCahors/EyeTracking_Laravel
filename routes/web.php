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

// page accueil | Controller pour les miniatures
Route::get('/', 'ComicsController@show');

// page accueil | accès aux 3 dernières bd publiées
Route::get('/', 'WelcomeController@last');

/**
 * ^ COMMENT:
 *
 * Ici y'a 2 routes pour la page d'accueil, la permière
 * ne sert donc à rien. A supprimer
 */


// page connexion |
// de Charlotte : si on pouvait renommer le chemin en "login" ce serait mieux ainsi que le controller
Route::get('/home', 'HomeController@index')->name('home');

// page catalogue | Le controller show renvoie à la vue welcome.
// donc cette vue/ le controller est à modifier
Route::get('/catalogue', 'ComicsController@show')->name('catalogue');

// page legalmentions | mentions légales
Route::get('/legalmentions', function () {
    return view('legalmentions');
    array('com_title' => $titre,
               'com_author' => $auteur,
               'com_publisher' => $editeur,
               'com_miniature_url'=> $originalName);
})->name('legalmentions');

/**
 * ^ COMMENT:
 *
 * Les variables $titre / $auteur / $originalName ne sont pas définies
 * Et elles ne sont pas utilisé dans la vues.
 * Elles ne servent donc à rien
 */



/*
|--------------------------------------------------------------------------
| COMICS
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE COMICS ]---------------- */

// FROM BACK : This is the form, and on submit the ::post is called
Route::get('/ajouter-bd', function () {
    return view('ajouter-bd');
})->name('ajouter-bd');

Route::post('ajouter-bd', 'ComicsController@add');


/* ----------------[ READ COMICS ]---------------- */
// not done


/* ----------------[ UPDATE COMICS ]---------------- */

// de Charlotte => erreur sur cette route. Chercher à savoir à quoi elle correspond |
Route::get('/update-bd{id}', function () {
    return view('update-bd');
})->name('update-bd');

// FROM BACK : there's some html and css not reaching routes with parameters.
Route::get('/update-bd/{id}', 'ComicsController@fetchUniqueBD')->name('update-bd/');

Route::post('/update-bd/{id}', 'ComicsController@update');

// de Charlotte => erreur aussi sur cette route. Chercher à savoir à quoi elle correspond |
Route::get('/button-update-bd', function () {
    return view('button-update-bd');
}) -> name('button-update-bd');

/**
 * ^ COMMENT:
 *
 * Pour savoir, regarde la vue button-update-bd et test l'url /button-update-bd
 * Mais je pense que tu peux la virer sans souci
 * D'autant plus que la vue n'existe pas
 */

/* ----------------[ DELETE COMICS ]---------------- */

// FROM BACK : right now it's an input that then pass the comics' id  in $GET.
// /!\ Doesn't work if you have pages in your DB that are linked to it
Route::get('/delete-bd', function () {
    return view('delete-bd');
})->name('delete-bd');

Route::post('/delete-bd', 'ComicsController@delete');


/*
|--------------------------------------------------------------------------
| PAGES
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE PAGES ]---------------- */

// Ajouter page depuis idBD (clé étrangère fk_com_oid de 'pages')
Route::get('/add/page/{idBD}', function ($idBD) {
    return view('addPage', ['idBD' => $idBD]);
}) -> name('addPage');

Route::post('/add/page/{idBD}', 'PageController@create');


/* ----------------[ READ PAGES ]---------------- */

// FROM FRONT : this route is used to show the sample board
// Remove this line and board.blade.php
Route::get('/board', function () {
    return view('board');
})->name('board');

// FROM BACK : Afficher page depuis idBD >> idPage (pag_number de 'pages')
Route::get('/showPage/{idBD}/{idPage}', function ($idBD, $idPage) {
    return view('showPage', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('showPage');

Route::get('/showPage/{idBD}/{idPage}', 'PageController@show');


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
Route::get('/medias-upload', function () {
    return view('medias-upload');
});

// est juste appellée quand on créé un nouveau média à partir de upload. N'est même pas une vue
Route::post('/upload/save', 'MediasController@create');


/* ----------------[ READ AND DELETE MEDIAS ]---------------- */

// FROM BACK
//permet de visualiser tout les médias, d'en ajouter, et supprimer à l'unité
Route::get('/medias', 'MediasController@read')->name('medias');

// FROM FRONT
Route::get('/listMedias', function () {
    return view('listMedias');
})->name('listMedias');

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

 Route::get('/modifBoard', function () {
     return view('modifBoard');
 })->name('modifBoard');

 Route::get('/mapping', function () {
     return view('mapping');
 })->name('mapping');


/* ----------------[ READ MAPPING ]---------------- */

// FROM FRONT : this route is used to show the sample board with sounds
// Remove this line and board_mapping.blade.php
Route::get('/board_mapping', function () {
    return view('board_mapping');
})->name('board_mapping');

/* ----------------[ DELETE MAPPING ]---------------- */
// not done
