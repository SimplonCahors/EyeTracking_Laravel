<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function add()
        {
            $titre = strip_tags($_POST['titre']);
            $auteur = strip_tags($_POST['auteur']);
            $editeur = strip_tags($_POST['editeur']);
            
            
            DB::table('comics')->insert(
                array('com_title' => $titre,
                      'com_author' => $auteur,
                      'com_publisher' => $editeur)
                   
            );

            echo 'Base de données mise à jour.';

            header('refresh: 3; url = ajouter-bd');


        }

        public function fetchUniqueBD($id){
            $comics = DB::table('comics')->where('com_oid', '=', $id)->get();    
            return view('update-bd',['comic' => $comics [0]]);

        }



    public function show(){
    	$comics = DB::table('comics')->get();
        return view('catalogue',['comics' => $comics]);
    }


    public function update($id, Request $request){
        var_dump($request->all());
        var_dump($id);
        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $editeur = $request->input('editeur');
        DB::table('comics')->where('com_oid', '=', $id)->update(['com_title' => $titre, 'com_author' => $auteur, 'com_publisher' => $editeur]);
        echo 'la modif à bien été faite';
        // header('refresh: 1; url = delete-bd');

    }

    public function delete(Request $request){
        $id = $request->input('delete');
        DB::table('comics')->where('com_oid', '=', $id)->delete(); 
        echo 'cela a bien ete supprimer';
        header('refresh: 3; url = delete-bd');
    }
}


