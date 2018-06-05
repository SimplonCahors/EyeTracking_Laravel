<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| "Acceuil" page controller
  Show 3 last comics
|--------------------------------------------------------------------------
*/


class HomeController extends ComicsController
{
    //permet d'avoir accès aux 3 dernières bd publiées
    public function last()
    {
        $comics = DB::table('comics')->where('com_publication', '=', 1)->get();
        return view('home', ['comics' => $comics]);
    }
}
