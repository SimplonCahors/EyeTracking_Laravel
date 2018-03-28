<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

         

        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $editeur = $request->input('editeur');
            
        DB::table('comics')->insert(
           array('com_title' => $titre,
               'com_author' => $auteur,
                'com_publisher' => $editeur,
                'com_miniature_url'=> $originalName)
                   
            );

        echo 'Base de données mise à jour.';

        header('refresh: 3; url = ajouter-bd');
    }

    // si on pouvait la renommer en function "read" ce serait mieux
    public function show()
    {
        $comics = DB::table('comics')->where('com_publication', '=', 1)->get();
        return view('catalogue', ['comics' => $comics]);
    }

    // Modifie les miniatures de la DB et du Storage
    public function update($id, Request $request)
    {
        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $editeur = $request->input('editeur');
        $miniature = $request->input('miniature');
        $publication = $request->input('radio');

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
    public function delete(Request $request)
    {
        $id = $request->input('delete');

        DB::table('pages')->where('fk_com_oid','=',$id)->delete();
        DB::table('comics')->where('com_oid', '=', $id)->delete();
        Storage::delete('public/ storage/images/pages');
        // return view('delete-bd');

        echo 'Cela à bien été supprimer';
        header('refresh: 3; url = delete-bd');
    }
}
