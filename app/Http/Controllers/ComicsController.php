<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comic;


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
        $comics = Comic::all()->where('comic_publication',1);

        return view('comics.catalog', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // [!!] OLD public function "add"(Request $request)
    public function create(Request $request)
    {
        return view('comics.create') ;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store dans le dossier public, le fichier 'miniature'
        $originalName = $request->file('miniature')->getClientOriginalName();
        $pathstart = $request->file('miniature')->storeAs('public', $originalName);
        
        //enlève le public devant
        $path = substr($pathstart, 7);
        
        $comics = new Comic;
        $comics-> comic_title = request('titre');
        $comics-> comic_author = request('auteur');
        $comics-> comic_publisher = request('editeur');


        $originalName = $request->file('miniature')->getClientOriginalName();
        $pathstart = $request->file('file')->store('public/medias');
        $path = substr($pathstart, 7);
        $comics-> comic_miniature_url = $path.$originalName;

        $verif_comic = Comic::all()->where('comic_title',$comics-> comic_title)
        ->where('comic_author',$comics-> comic_author)
        ->where('comic_publisher',$comics-> comic_publisher);
        
        if($verif_comic)
        {
            $comics->save();

            

            // Storage::download(request('miniature'));

            return redirect()->route('catalog')->with('add','BD ajoutée');
        }
        else
        {
            echo 'Bande déssinée déjà existante';
            header('refresh: 3; url = /comics/create');
            die;

        }
    }

    
    // Récupère une Bande-Dessinée unique necéssaire pour le update
    public function edit($id)
    {
        $comic = Comic::all()->where('comic_id', $id)->first();
        return view('comics.update', ['comic' => $comic]);

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
       

        $comic = Comic::where('comic_id', $id)->first();
        $comic-> comic_title = request('titre');
        $comic-> comic_author = request('auteur');
        $comic-> comic_publisher = request('editeur');

        if(request('miniature')){ // met à jour que si on change la miniature
           $comic-> comic_miniature_url = request('miniature'); 
        }

        $comic->save();

        return redirect()->route('catalog')->with('update','BD mise à jour');
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
        //DB::table('pages')->where('fk_comic_oid','=',$id)->delete();
        //DB::table('comics')->where('comic_id', '=', $id)->delete();
        //Storage::delete('public/ storage/images/pages');

        Comic::where('comic_id', $id)->delete();

        return redirect()->route('catalog')->with('delete','BD supprimée');
        

    }
}
