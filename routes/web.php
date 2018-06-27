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


/*
COMIC
*/
// page accueil | accès aux 3 dernières bd publiées
Route::get('/', 'HomeController@index')->name('home');
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
Route::get('/comics/create', 'ComicsController@create')->name('comics_create');
Route::post('/comics/store', 'ComicsController@store');
/* ----------------[ READ COMICS ]---------------- */
Route::get('/comics/index', 'ComicsController@index')->name('comics_index');
Route::get('/comics/show/{id}', 'ComicsController@show')->name('comics_show');
/* ----------------[ UPDATE COMICS ]---------------- */
// FROM BACK : there's some html and css not reaching routes with parameters.
Route::get('/comics/update/{id}', 'ComicsController@edit')->name('comics_update');
Route::post('/comics/update/{id}', 'ComicsController@update');
/* ----------------[ DELETE COMICS ]---------------- */
// FROM BACK : right now it's an input that then pass the comics' id  in $GET.
// /!\ Doesn't work if you have pages in your DB that are linked to it
// pas de confirmation/!\
Route::get('/comics/delete/{id}', 'ComicsController@destroy')->name('comic_delete');
/*
|--------------------------------------------------------------------------
| BOARD
|--------------------------------------------------------------------------
*/
/* ----------------[ CREATE BOARD ]---------------- */
// Ajouter page depuis idBD (clé étrangère fk_com_oid de 'pages')
// No link to this page. 
Route::get('/boards/create/{idBD}', function ($idBD) {
	return view('boards.create', ['idBD' => $idBD]);
}) -> name('addPage');
Route::post('/boards/store/{idBD}', 'BoardsController@store');
/* ----------------[ READ PAGES ]---------------- */
Route::get('/boards/show/{idBD}/{idPage}', 'BoardsController@show')->name('board-show');
Route::get('/boards/edit/{idBD}/{idPage}', 'BoardsController@edit')->name('board-edit');
// FROM BACK : Afficher page depuis idBD >> idPage (pag_number de 'pages')
Route::post('/boards/read/{idBD}/{idPage}', function ($idBD, $idPage) {
	return view('boards.read', ['idBD' => $idBD], ['idPage' => $idPage]);
}) -> name('board_read');
/* ----------------[ UPDATE PAGES ]---------------- */
// not done
/* ----------------[ DELETE PAGES ]---------------- */
// not done
/*
|-----------------------------------------------------------------------
| MEDIAS
|-----------------------------------------------------------------------
*/
// /!\ pour upload des fichiers : consulter "try file uploading" dans le read me
/* ----------------[ READ MEDIAS ]---------------- */
Route::get('/medias/read', 'MediasController@index')->name('medias');
/* ----------------[ CREATE MEDIAS ]---------------- */
Route::get('/medias/create', 'MediasController@create')->name('medias_create');
/* ----------------[ UPLOAD MEDIAS ]---------------- */
Route::post('/medias/store', 'MediasController@store')->name('medias_store');
/* ----------------[ DELETE MEDIAS ]---------------- */
//appellée par un bouton par media sur la page /medias
Route::get('/medias/delete/{id}', 'MediasController@delete')->name('medias_delete');
/* ----------------[ DESTROY MEDIAS ]---------------- */
Route::get('/medias/destroy/{name}', 'MediasController@destroy')->name('medias_destroy');
/* ----------------[ UPDATE MEDIAS ]---------------- */
// not done
//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
//  END OF REFACTO  
//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
/*
|--------------------------------------------------------------------------
| MAPPING
|--------------------------------------------------------------------------
*/
/* ----------------[ CREATE AND UPDATE MAPPING ]---------------- */
//pb :  dans modif board.js : if (document.URL.includes('pages/edit')) 
//pb : No link to it. 
Route::get('/mapping/{idPage}', 'AreaController@fetchAssocZones')->name('modifBoard');

Route::get('/mapping/create', function () {
	return view('boards.mapping.create');
})->name('mappingCreate');
// Route::get('/mapping', function () {
// 	return view('mapping');
// })->name('mapping');
/* ----------------[ READ MAPPING ]---------------- */
// FROM FRONT : this route is used to show the sample board with sounds
// Remove this line and board_mapping.blade.php
Route::get('/test', function () {
	return view('page_edit');
})->name('board_mapping');
/* ----------------[ DELETE MAPPING ]---------------- */
// not done
