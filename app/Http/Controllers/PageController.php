<?php

namespace App\Http\Controllers;

// Modules nécessaires pour gestion des erreurs et du storage
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use DB;

class PageController extends Controller
{
    public function create($idBD, Request $request) // Ajout d'une page
    {   
        $validatedData = $request->validate(['filename' => 'required|image']); // Vérifie que le fichier uploadé est bien une image.
        $numeroPage = $_POST['numeroPage'];

        // try-catch de la requête
        // IMPORTANT : la colonne pag_number de la BDD doit être en paramètre UNIQUE pour empêcher les doublons de numéros
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
        }
        catch (QueryException $e){ // affiche une erreur si le fichier est en doublon
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){ // 1062 est le code d'erreur pour un duplicate sur col definie en unique
                $message = "La page {$numeroPage} existe déjà";
            }
        }
        
        // redirection sur la même page
        return redirect()->back()->with('message', $message);
    }


    public function show($idBD, $idPage) // Affichage d'une page
    {
        // Requête BDD pour récupérer le path de l'image stocké dans la table 'pages' (renvoie un tableau)
        $pageQuery = DB::table('pages')->where('pag_number', $idPage)->pluck('pag_image');

        // envoie le path pour la src de l'image à la view 'showPage'
        return view('showPage', ['page' => $pageQuery[0]]);
    }
}
