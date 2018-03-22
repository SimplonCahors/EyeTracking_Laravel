<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PageController extends Controller
{
    public function create($idBD)
    {
        $numeroPage = $_POST['numeroPage'];
        $image = $_POST['image'];
        
        
        DB::table('pages')->insert(
            array('pag_image' => $image,
            'pag_number' => $numeroPage,
            'fk_com_oid' => $idBD)
        );
        
        return redirect()->back()->with('message', 'Page ajoutée dans la base de données.');
    }

    public function show($idPage)
    {
        $board = DB::table('pages')->where('pag_number', $idPage)->pluck('pag_image');
        return view('showPage', ['page' => $board[0]]);
    }
}
