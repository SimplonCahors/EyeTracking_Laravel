<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;

class AjouterBdController extends Controller
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
}
 