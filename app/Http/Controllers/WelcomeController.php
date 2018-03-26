<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WelcomeController extends ComicsController
{
	//permet d'avoir accès aux derniers 3 dernières bd publiées
    public function last(){
    	$comics = DB::table('comics')->get();
    return view('catalogue',['comics' => $comics]);
    }
}
