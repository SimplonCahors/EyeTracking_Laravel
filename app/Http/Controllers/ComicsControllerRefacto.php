<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // [!!] OLD public function "add"(Request $request)
    public function create(Request $request)
    {
        {
            //store dans le dossier public, le fichier 'miniature'
            $originalName = $request->file('miniature')->getClientOriginalName();
            $pathstart = $request->file('miniature')->storeAs('public', $originalName);
            
            //enlève le public devant
            $path = substr($pathstart, 7);
    
            $titre = $request->input('titre');
            $auteur = $request->input('auteur');
            $editeur = $request->input('editeur');
            $comics = DB::table('comics')->get();
    
            foreach($comics as $comic)
            {
                if( $comic->com_title === $titre && $comic->com_author === $auteur &&$comic->com_publisher === $editeur )
                {
                    echo 'Bande déssinée déjà existante';
                    header('refresh: 3; url = /comics/create');
                    die;
                }
            }
            
            DB::table('comics')->insert(

               array(
                   'com_title' => $titre,
                   'com_author' => $auteur,
                   'com_publisher' => $editeur,
                   'com_miniature_url'=> $originalName)
                );

            return redirect()
            ->route('catalogue')
            ->with('add','BD ajoutée');
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
        $comics = DB::table('comics')
        ->where('com_publication', '=', 1)
        ->get();

        $pages = DB::table('pages')
        ->where('pag_number', '=', 1)
        ->get();

        return view('catalogue', ['comics' => $comics], ['pages' => $pages]);
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
    public function update(Request $request)
    {
        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $editeur = $request->input('editeur');
        $miniature = $request->input('miniature');
        $publication = $request->input('radio');

        DB::table('comics')
        ->where('com_oid', '=', $id)
        ->update([
            'com_title' => $titre, 
            'com_author' => $auteur, 
            'com_publisher' => $editeur, 
            'com_miniature_url' => $miniature, 
            'com_publication' => $publication
            ]);

        echo 'la modification a bien été faite';
        header('refresh: 3; url = '.$id);
    }

    // Récupère une Bande-Dessinée unique necéssaire pour le update
    public function fetchUniqueBD($id)
    {
        $comics = DB::table('comics')->where('com_oid', '=', $id)->get();
        return view('update-bd', ['comic' => $comics [0]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Supprime les miniatures de la DB et du Storage
        DB::table('pages')->where('fk_com_oid','=',$id)->delete();
        DB::table('comics')->where('com_oid', '=', $id)->delete();

        Storage::delete('public/ storage/images/pages');

        return redirect()->route('catalogue')->with('delete','BD supprimée');
    }
}
