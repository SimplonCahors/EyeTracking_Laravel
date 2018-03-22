<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
class MediasController extends Controller
{
    public function create(Request $request)
    {
        $dataType = $request->input('dataType');

        //VALIDATION : validate method stops the code execution if conditions not fullfilled, max is in kB
        if ($dataType == 'img') {
            $validatedData = $request->validate([
                'file' => 'required|image|max:50000'
            ]);   
        }
        elseif ($dataType == 'video') {
            // x-msvideo = avi
             $validatedData = $request->validate([
                'file' => 'required|mimetypes:video/x-msvideo,video/mpeg,video/quicktime|max:500000'
            ]);   
        }
        elseif ($dataType == 'son') {
            // mpga == mp3 
             $validatedData = $request->validate([
             'file' => 'required|mimes:mpga,wav,ogg,mp4|max:50000'
            ]);   
         }   


        $pathstart = $request->file('file')->store('public');
        $path = substr($pathstart, 7);  // fonction pour enlever le "public/" au path et pouvoir ensuite créer une image avec le bon path

        $originalName = $request->file('file')->getClientOriginalName();

        DB::table('medias')->insert(
            array( 'med_type' => $dataType, 'med_filename' => $originalName,'med_path' => $path )
        );
        header('refresh: 3; url = /medias-upload');

        return $path;
    }


    public function read(){
        $medias = DB::table('medias')->get();
        return view('medias',['medias' => $medias]);
    }

    public function update(){
    }

    public function delete(){

        $id = $_GET['id'];
        $path = $_GET['path'];

        DB::table('medias')->where('med_oid', '=', $id)->delete(); 


        Storage::delete('public/'.$path);

       return view('medias-delete');

        


    }
}

