<?php

namespace App\Http\Controllers;

// Modules nécessaires pour gestion des erreurs et du storage
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Board;
use App\Comic;

/*
|--------------------------------------------------------------------------
| Controller pour les PAGES des BD
|--------------------------------------------------------------------------
*/

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idBD,$idPage)
    {
        $comic = Comic::all()->where('comic_id', $idBD)->first();  
        $board = Board::all()->where('board_id',$idPage)->first();

        return view('boards.show', ['comic' => $comic,'board' => $board]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idBD, Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idBD,Request $request)
    {
        $validatedData = $request->validate(['board-image' => 'required|image']); // Vérifie que le fichier uploadé est bien une image.
        $numeroPage = request('numero-board');

        // try-catch de la requête
       try {
           // récupère le nom du fichier uploadé
            $originalName = $request->file('board-image')->getClientOriginalName();
            $completePath = $request->file('board-image')->storeAs('public/boards/', $originalName);

            // envoi du path du fichier, du numéro de la page et de l'id de la bd correspondante dans la table 'pages'

            $board = new Board;

            $board-> board_image = '/storage/boards/'.$originalName;
            $board-> board_number = $numeroPage;
            $board-> fk_comic_id = $idBD;
            
            $board->save();
                
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
        return redirect()->back()->with('add', $message);
    }

    

    /**
     * Show the form for editing the specified resource.
          * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idBD,$idPage)
    {
        $comic = Comic::all()->where('comic_id', $idBD)->first();  
        $board = Board::all()->where('board_id',$idPage)->first();

        return view('boards.show', ['comic' => $comic,'board' => $board]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}