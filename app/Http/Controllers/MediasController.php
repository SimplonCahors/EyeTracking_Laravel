<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Media;

/*
|--------------------------------------------------------------------------
| Controller pour les MÉDIAS des BD
|--------------------------------------------------------------------------
*/

class MediasController extends Controller
{

    public function index(){

        $medias = Media::all();
        return view('medias.read', ['medias' => $medias]);
    }


    public function create(Request $request)
    {
       return view('medias.create');
       
        // $dataType = $request->input('dataType');
        // $time = $request->input('declanchement');
        // $originalName = $request->file('file')->getClientOriginalName();

        // //VALIDATION : validate method stops the code execution if conditions not fullfilled, and send error automatically.
        // if ($dataType == 'img') {
        //     $validatedData = $request->validate([
        //         'file' => 'required|image'
        //     ]);
        // } elseif ($dataType == 'video') {
        //     // x-msvideo = avi
        //     $validatedData = $request->validate([
        //         'file' => 'required|mimetypes:video/mpeg,video/ogg,video/mp4,video/quicktime|max:500000'
        //     ]);
        // } elseif ($dataType == 'son') {
        //     // mpeg == mp3
        //     $validatedData = $request->validate([
        //      'file' => 'required|mimetypes:audio/mpeg,wav,audio/ogg,mp4|max:100000'
        //  ]);
        // }

        // $result='';
        // // try if query is successfull (it can fail if name is not unique)
        // try {
        //     $pathstart = $request->file('file')->store('public/medias');
        //     $path = substr($pathstart, 7);  // fonction pour enlever le "public/" au path et pouvoir ensuite créer une image avec le bon path

        //     $id = DB::table('areas')->insertGetId(
        //         array( 'area_trigger' => $time)
        //     );
        //     DB::table('medias')->insert(
        //         array( 'med_type' => $dataType, 'med_filename' => $originalName,'med_path' => $path, 'fk_are_oid' => $id )
        //     );

        //     $result = "Bien ajouté";
        // } catch (QueryException $e) {
        //     $error_code = $e->errorInfo[1];
        //     if ($error_code == 1062) {
        //         $result = 'Le fichier existe déjà (ou son nom est déjà pris)';
        //     }
        // }

        // return view('modifBoard', ['result'=> $result]);
   }

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
    $comics-> comic_miniature_url = request('miniature');

    $verif_comic = Comic::all()->where('comic_title',$comics-> comic_title)
    ->where('comic_author',$comics-> comic_author)
    ->where('comic_publisher',$comics-> comic_publisher);
    
    if($verif_comic)
    {
        $comics->save();

        

        Storage::download(request('miniature'));

        return redirect()->route('catalog')->with('add','BD ajoutée');
    }
    else
    {
        echo 'Bande dessinée déjà existante';
        header('refresh: 3; url = /comics/create');
        die;

    }
    // public function read()
    // {
    //     $medias = DB::table('medias')->get();
    //     return view('medias.read', ['medias' => $medias]);
    // }

    // public function update()
    // {
    // }

    //  // Viens de media/delete
    // public function delete($id, $path)
    // {

    //     DB::table('medias')->where('med_oid', '=', $id)->delete();

    //     Storage::delete('public/'.$path);

    //     return view('medias.delete');
    // }
}
}