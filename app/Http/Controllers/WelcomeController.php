<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Controller pour le CATALOGUE
|--------------------------------------------------------------------------
*/

// de Charlotte : si on pouvait la renommer en class "catalogueController" ce serait mieux | et renommer pareil le fichier controller.php
class WelcomeController extends ComicsController
{
    //permet d'avoir accès aux 3 dernières bd publiées
    public function last()
    {
        $comics = DB::table('comics')->get();
        return view('catalogue', ['comics' => $comics]);
    }
}
