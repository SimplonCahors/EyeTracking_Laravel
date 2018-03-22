<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PageController extends Controller
{
    public function create($idBD, Request $request)
    {
        // Récupère le nom du fichier
        $originalName = $request->file('filename')->getClientOriginalName();
        // Upload le fichier dans le dossier 'public/...' avec son nom d'origine
        $completePath = $request->file('filename')->storeAs('public/images/pages', $originalName);
        // enleve le "public/" au path car en production c'est le fichier racine
        $path = substr($completePath, 7);  

        $numeroPage = $_POST['numeroPage'];
        
        // envoi du path, du numéro et du nom dans la table 'pages'
        DB::table('pages')->insert(
            array('pag_image' => $originalName,
            'pag_number' => $numeroPage,
            'fk_com_oid' => $idBD)
        );
        
        // redirection sur la même page
        return redirect()->back()->with('message', 'Page ajoutée dans la base de données.');
    }


    public function show($idBD, $idPage)
    {
        // Requête BDD pour récupérer le path de l'image stocké dans la table 'pages' (renvoie un tableau)
        $pageQuery = DB::table('pages')->where('pag_number', $idPage)->pluck('pag_image');

        // envoie le path pour la src de l'image à la view 'showPage'
        return view('showPage', ['page' => $pageQuery[0]]);
    }
}
