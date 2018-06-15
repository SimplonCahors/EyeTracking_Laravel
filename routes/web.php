<?php

// en cours de refacto. Tout ce qui est au dessus de : 

//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
//  REFACTO SEST ARRETE ICI   
//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§

// a été refondu. 
// Mapping est voué à être remplacé donc pas refacto pour le moment. 
// Ce qui concerne le mapping concerne en réalité les boards -> à renommer pour board, ou p-ê faire un sous dossier mapping. 

Auth::routes();

/*
|--------------------------------------------------------------------------
| [ACCUEIL] / [CONNEXION] / [LEGALMENTIONS]
|--------------------------------------------------------------------------
*/
// page accueil | accès aux 3 dernières bd publiées
Route::get('/', 'HomeController@last')->name('home');

//From Elisa : seems useless, but if laravel wants a /home : 
//  Route::redirect('/home', '/');


// page legalmentions | mentions légales
Route::get('/legalmentions', function () {
    return view('others.legal_mentions');
  })->name('legalmentions');


/*
|--------------------------------------------------------------------------
| COMICS
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE COMICS ]---------------- */

// FROM BACK : This is the form, and on submit the ::post is called
Route::get('/comics/create', function () {
    return view('comics.create');
})->name('comics_create');

Route::post('/comics/create', 'ComicsController@add')->name('comics_create_post');


/* ----------------[ READ COMICS ]---------------- */

Route::get('/comics/read', 'ComicsController@show')->name('catalog');


/* ----------------[ UPDATE COMICS ]---------------- */

// FROM BACK : there's some html and css not reaching routes with parameters.
Route::get('/comics/update/{id}', 'ComicsController@fetchUniqueBD')->name('comics_update');

Route::post('/comics/update/{id}', 'ComicsController@update');


/* ----------------[ DELETE COMICS ]---------------- */

// FROM BACK : right now it's an input that then pass the comics' id  in $GET.
// /!\ Doesn't work if you have pages in your DB that are linked to it

// pas de confirmation/!\
Route::get('/comics/delete/{id}', 'ComicsController@delete')->name('comic_delete');



/*
|--------------------------------------------------------------------------
| BOARD
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE BOARD ]---------------- */

// Ajouter page depuis idBD (clé étrangère fk_com_oid de 'pages')

// No link to this page. 
Route::get('/board/create/{idBD}', function ($idBD) {
    return view('boards.create', ['idBD' => $idBD]);
}) -> name('addPage');

Route::post('/board/create/{idBD}', 'PageController@create');


/* ----------------[ READ PAGES ]---------------- */


Route::get('/board/read/{idBD}/{idPage}', 'PageController@show')->name('board');

// FROM BACK : Afficher page depuis idBD >> idPage (pag_number de 'pages')
Route::post('/board/read/{idBD}/{idPage}', function ($idBD, $idPage) {
    return view('boards.read', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('board_read');



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

/* ----------------[ READ AND DELETE MEDIAS ]---------------- */

// FROM BACK
//permet de visualiser tout les médias, d'en ajouter, et supprimer à l'unité


Route::get('/medias/read', 'MediasController@read')->name('medias');



/* ----------------[ CREATE / UPLOAD MEDIAS ]---------------- */

//un <a> sur /medias permet d'y accéder.
Route::get('/medias/create', function () {
    return view('medias.upload');
})->name('medias_create');

// est juste appellée quand on créé un nouveau média à partir de upload. N'est même pas une vue
 Route::post('/medias/upload', 'MediasController@create')->name('medias_upload');


/* ----------------[ DELETE MEDIAS ]---------------- */

//appellée par un bouton par media sur la page /medias
Route::get('/medias/delete/{id}/{path}', 'MediasController@delete')->name('medias_delete');


/* ----------------[ UPDATE MEDIAS ]---------------- */
// not done



//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
//  REFACTO SEST ARRETE ICI   
//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§



/*
|--------------------------------------------------------------------------
| MAPPING
|--------------------------------------------------------------------------
*/

/* ----------------[ CREATE AND UPDATE MAPPING ]---------------- */


//pb :  dans modif board.js : if (document.URL.includes('pages/edit')) 
//pb : No link to it. 

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
