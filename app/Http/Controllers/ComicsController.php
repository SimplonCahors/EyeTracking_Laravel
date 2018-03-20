<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function show(){
    	$comics = DB::table('comics')->get();
    return view('catalogue',['comics' => $comics]);
    }
}


