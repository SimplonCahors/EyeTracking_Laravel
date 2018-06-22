<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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


	public function store(Request $request)
	{
		//stores the file in the media folder
		$originalName = $request->file('file')->getClientOriginalName();
		$pathstart = $request->file('file')->storeAs('public/medias/', $originalName);

		//removes the "public"
		$path = substr($pathstart, 7);

		$medias = new Media;
		$medias-> media_type = request('dataType');
		$medias-> media_filename = $originalName;
		$medias-> media_path = '/storage/medias/'.$originalName;

		//verifies if the media is already present
		$verif_media = Media::all()->where('media_type',$medias-> media_type)
		->where('media_filename',$medias-> media_filename)
		->where('media_path',$medias-> media_path);

		if(count($verif_media)>0){
			//media already present, abort.
			return redirect()->route('medias')->with('duplicate','Erreur à la création.');
		}else{
			//success
			$medias->save();
			return redirect()->route('medias')->with('add','Media correctement ajouté.');
		}
	}


	public function delete(Request $request, $id)
	{
		
		$media = Media::where('media_id', $id)->first();


		$media_name = $media-> media_filename;

		return redirect()->route('medias')->with('alert_delete',$media_name);
	}

	public function destroy($name, Request $request)
	{		
		$media = Media::where('media_filename', $name)->first();

        $path_delete = substr($media->media_path, 9);

        Storage::delete('public/'.$path_delete);

		Media::where('media_filename', $name)->delete();
		
		return redirect()->route('medias')->with('add','Media correctement supprimé :'.$name);
	}
}