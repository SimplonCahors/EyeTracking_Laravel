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

    public function show()
    {
        $pages = DB::table('pages')->get();
        // $pages = DB::table('pages')->get();
        // return view('readPage', ['pages' => $pages]);
    }
}


//   public function read(){
//         $medias = DB::table('medias')->get();
//     return view('medias',['medias' => $medias]);
//     }
