<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PageController extends Controller
{
    public function ajoutPage($idBD)
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
}
