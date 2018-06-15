<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comics;
use App\Boards;

/*
|--------------------------------------------------------------------------
| Controller pour les COMICS
|--------------------------------------------------------------------------
*/


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all()->where('comic_publication',1);

        return view('catalogue', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // [!!] OLD public function "add"(Request $request)
    public function create(Request $request)
    {
        //store dans le dossier public, le fichier 'miniature'
        $originalName = $request->file('miniature')->getClientOriginalName();
        $pathstart = $request->file('miniature')->storeAs('public', $originalName);
        
        //enlève le public devant
        $path = substr($pathstart, 7);
        
        $comics = new Comics;
        $comics-> comic_title = request('titre');
        $comics-> comic_author = request('auteur');
        $comics-> comic_publisher = request('editeur');
        $comics-> comic_miniature_url = request('miniature');

        $verif_comic = Comics::all()->where('comic_title',$comics-> comic_title)
                                    ->where('comic_author',$comics-> comic_author)
                                    ->where('comic_publisher',$comics-> comic_publisher);
        
        if($verif_comic)
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $comics = 
        // $titre = $request->input('titre');
        // $auteur = $request->input('auteur');
        // $editeur = $request->input('editeur');
        // $miniature = $request->input('miniature');
        // $publication = $request->input('radio');

        DB::table('comics')->where('comic_oid', '=', $id)->update(['comic_title' => $titre, 'comic_author' => $auteur, 'comic_publisher' => $editeur, 'comic_miniature_url' => $miniature, 'comic_publication' => $publication]);


        echo 'la modif à bien été faite';
        header('refresh: 3; url = '.$id);
    }

    // Récupère une Bande-Dessinée unique necéssaire pour le update
    public function fetchUniqueBD($id)
    {
        $comics = DB::table('comics')->where('comic_oid', '=', $id)->get();
        return view('update-bd', ['comic' => $comics [0]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // Supprime les miniatures de la DB et du Storage
    public function destroy(Request $request, $id)
    {
        DB::table('pages')->where('fk_comic_oid','=',$id)->delete();
        DB::table('comics')->where('comic_oid', '=', $id)->delete();

        Storage::delete('public/ storage/images/pages');

        return redirect()->route('catalogue')->with('delete','BD supprimée');
    }
}
