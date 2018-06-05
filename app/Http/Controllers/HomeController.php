<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Controller pour la CONNEXION | Qestion de Charlotte : est-il aussi pour l'inscription ?
|--------------------------------------------------------------------------
*/
// de Charlotte : si on pouvait la renommer en class "loginController" ce serait mieux | et renommer pareil le fichier controller.php
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // de Charlotte : à quoi correspond le nom 'index' ? ne vaut-il pas mieux login ou register ?
    public function index()
    {
        return view('welcome');
    }
}
