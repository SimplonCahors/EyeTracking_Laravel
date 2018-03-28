<?php

namespace App\Http\Controllers;

// Modules nécessaires pour gestion des erreurs et du storage
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use DB;

/*
|--------------------------------------------------------------------------
| Controller pour les PAGES des BD
|--------------------------------------------------------------------------
*/

class PageController extends Controller
{
    public function create($idBD, Request $request) // Ajout d'une page
    {
        $validatedData = $request->validate(['filename' => 'required|image']); // Vérifie que le fichier uploadé est bien une image.
        $numeroPage = $_POST['numeroPage'];

        // try-catch de la requête
       try {
           // récupère le nom du fichier uploadé
            $originalName = $request->file('filename')->getClientOriginalName();
            $completePath = $request->file('filename')->storeAs('public/images/pages', $originalName);
            $path = substr($completePath, 7); // retire la chaîne 'public/' du path

            // envoi du path du fichier, du numéro de la page et de l'id de la bd correspondante dans la table 'pages'
            DB::table('pages')->insert(
                array('pag_image' => $originalName,
                'pag_number' => $numeroPage,
                'fk_com_oid' => $idBD)
            );
                
            $message = "Page {$numeroPage} ajoutée";
        } catch (QueryException $e) { // affiche une erreur si le fichier est en doublon
            $error_code = $e->errorInfo[1];
             if($error_code == 1062){ // 1062 est le code d'erreur pour un duplicate sur col definie en unique
                $message = "La page {$numeroPage} existe déjà";
            }
            if($error_code == 1452){ // 1452 est le code d'erreur généré lorque l'id de la BDn'existe pas
            
                $message = "La BD numéro {$idBD} n'existe pas";
            }
        }
        
        // redirection sur la même page
        return redirect()->back()->with('message', $message);
    }
    
  
    
    public function fetchAssocZones($idPage) {
        $pageQuery = DB::table('pages')->where('pag_oid','=', $idPage)->get();
        $areasQuery = DB::table('areas')->where('fk_pag_oid','=', $idPage)->get();
       
        return view('page_edit',['pages' => $pageQuery[0], 'areas' => $areasQuery]);
    }
   
    
    // de Charlotte : si on pouvait la renommer en function "read" ce serait mieux
    // Affichage d'une page
    public function show($idBD, $idPage)
    {
        // Requête BDD pour récupérer le path de l'image stocké dans la table 'pages' (renvoie un tableau)
        $pageQuery = DB::table('pages')->where('pag_number', $idPage)->pluck('pag_image');

        // envoie le path pour la src de l'image à la view 'showPage'
        return view('showPage', ['page' => $pageQuery[0]]);
    }
}
