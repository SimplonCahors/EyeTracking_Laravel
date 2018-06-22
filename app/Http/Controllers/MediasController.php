
     * @param  int  $id
     * @return \<?php

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
	}


   //new store method
	public function store(Request $request)
	{
        //store dans le dossier public, le fichier 'miniature'
		$originalName = $request->file('file')->getClientOriginalName();
		$pathstart = $request->file('file')->storeAs('public/medias/', $originalName);

        //enlève le public devant
		$path = substr($pathstart, 7);

		$medias = new Media;
		$medias-> media_type = request('dataType');
		$medias-> media_filename = $originalName;
		$medias-> media_path = '/storage/medias/'.$originalName;

        // verification pour éviter la duplication de comic
		$verif_media = Comic::all()->where('media_type',$medias-> media_type)
		->where('media_filename',$medias-> media_filename)
		->where('media_path',$medias-> media_path);

		if(count($verif_media)>0){
			return redirect()->route('comics_index')->with('duplicate','Erreur à la création !');
		}else{
			$medias->save();
			return redirect()->route('comics_index')->with('add','Media ajouté !');
		}

	}
}