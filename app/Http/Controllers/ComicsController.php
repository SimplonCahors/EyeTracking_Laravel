<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comics;
use App\Boards;

/*
|--------------------------------------------------------------------------
| Controller pour les MINIATURES des BD
|--------------------------------------------------------------------------
*/

// de Charlotte : si on pouvait la renommer en class "thumbnailController" ce serait mieux | et renommer pareil le fichier controller.php
class ComicsController extends Controller
{

    
    // si on pouvait la renommer en function "create" ce serait mieux
    public function add(Request $request)
    {
        
        //store dans le dossier public, le fichier 'miniature'
        $originalName = $request->file('miniature')->getClientOriginalName();
        $pathstart = $request->file('miniature')->storeAs('public', $originalName);
        
        //enlève le public devant
        $path = substr($pathstart, 7);
        
        $comics = new Comics;
        $comics-> com_title = request('titre');
        $comics-> com_author = request('auteur');
        $comics-> com_publisher = request('editeur');

        $verif_comic = Comics::all()->where('com_title',$comics-> com_title)
                                    ->where('com_author',$comics-> com_author)
                                    ->where('com_publisher',$comics-> com_publisher);
        
        if(!$verif_comic)
        {
            $comics->save();
            return redirect()->route('catalogue')->with('add','BD ajoutée');
        }
        else
        {
            echo 'Bande déssinée déjà existante';
            header('refresh: 3; url = /comics/create');
            die;

        }

        
    }

    // si on pouvait la renommer en function "index" ce serait mieux
    public function show()
    {
        $comics = Comics::all()->where('com_publication',1);

        // $comics = DB::table('comics')->where('com_publication', '=', 1)->get();
        // $pages = DB::table('pages')->where('pag_number', '=', 1)->get();

        return view('catalogue', ['comics' => $comics]);
    }

    // Modifie les miniatures de la DB et du Storage
    public function update($id, Request $request)
    {
        $comics = 
        // $titre = $request->input('titre');
        // $auteur = $request->input('auteur');
        // $editeur = $request->input('editeur');
        // $miniature = $request->input('miniature');
        // $publication = $request->input('radio');

        DB::table('comics')->where('com_oid', '=', $id)->update(['com_title' => $titre, 'com_author' => $auteur, 'com_publisher' => $editeur, 'com_miniature_url' => $miniature, 'com_publication' => $publication]);


        echo 'la modif à bien été faite';
        header('refresh: 3; url = '.$id);
    }

    // Récupère une Bande-Dessinée unique
    // necéssaire pour le update
    public function fetchUniqueBD($id)
    {
        $comics = DB::table('comics')->where('com_oid', '=', $id)->get();
        return view('update-bd', ['comic' => $comics [0]]);
    }

    // Supprime les miniatures de la DB et du Storage
    public function delete(Request $request,$id)
    {

        DB::table('pages')->where('fk_com_oid','=',$id)->delete();
        DB::table('comics')->where('com_oid', '=', $id)->delete();

        Storage::delete('public/ storage/images/pages');



        return redirect()->route('catalogue')->with('delete','BD supprimée');
        
    }
}
