<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

/*
|--------------------------------------------------------------------------
| => INDEX   : affiche la liste des templates | /templates
| => CREATE  : affiche le formulaire templates à remplir | /templates/create
| => STORE   : stocke les données nouvellement créées dans la BDD | via POST /templates
| => SHOW    : affiche l'emballage spécifié | via GET /templates/id
| => EDIT    : affiche le formulaire pour éditer les données de la BDD | via GET /templates/id/edit
| => UPDATE  : actualise les données dans la BDD | (submit) via PATCH /templates/id
| => DESTROY : supprime les données dans la BDD | /templates/id
|--------------------------------------------------------------------------
*/

class TemplateController extends Controller
{
    
/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | INDEX => affiche la "liste" des templates | route : /templates
    |--------------------------------------------------------------------------
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | CREATE => affiche le formulaire templates à remplir | /templates/create
    |--------------------------------------------------------------------------
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | STORE => stocke les données nouvellement créées dans la BDD | POST /templates
    |--------------------------------------------------------------------------
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | SHOW => affiche le template spécifié | GET /templates/id
    |--------------------------------------------------------------------------
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() 
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | EDIT => affiche le formulaire pour éditer les données de la BDD | GET /templates/id/edit
    |--------------------------------------------------------------------------
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | UPDATE => actualise les données dans la BDD | (submit) PATCH /templates/id
    |--------------------------------------------------------------------------
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        // some code here
    }
/*****************************************************************************/




/*****************************************************************************/
    /*
    |--------------------------------------------------------------------------
    | DESTROY => supprime les données dans la BDD | /templates/id
    |--------------------------------------------------------------------------
    */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // some code here
    }
/*****************************************************************************/

}
