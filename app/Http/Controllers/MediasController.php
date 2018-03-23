<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use DB;

class MediasController extends Controller
{
    public function create(Request $request)
    {
        $dataType = $request->input('dataType');
        $originalName = $request->file('file')->getClientOriginalName();

        //VALIDATION : validate method stops the code execution if conditions not fullfilled, and send error automatically.
        if ($dataType == 'img') {
            $validatedData = $request->validate([
                'file' => 'required|image'
            ]);   
        }
        elseif ($dataType == 'video') {
            // x-msvideo = avi
           $validatedData = $request->validate([
            'file' => 'required|mimetypes:video/mpeg,video/ogg,video/mp4,video/quicktime|max:500000'
        ]);   
       }
       elseif ($dataType == 'son') {
            // mpga == mp3 
           $validatedData = $request->validate([
               'file' => 'required|mimetypes:audio/mpeg,wav,audio/ogg,mp4|max:100000'
           ]);   
       }   

       $result='';
        // try if query is successfull (it can fail if name is not unique)
       try{
        $pathstart = $request->file('file')->store('public/medias');
            $path = substr($pathstart, 7);  // fonction pour enlever le "public/" au path et pouvoir ensuite créer une image avec le bon path

            DB::table('medias')->insert(
                array( 'med_type' => $dataType, 'med_filename' => $originalName,'med_path' => $path ));
                
            $result = "Bien ajouté";

        }
        catch (QueryException $e){

            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                $result = 'Le fichier existe déjà (ou son nom est déjà pris)';
            }
        }
        
        return view('medias-upload',['result'=> $result]);
    }


    public function read(){
        $medias = DB::table('medias')->get();
        return view('medias',['medias' => $medias]);
    }

    public function update(){
    }

    public function delete(){

        $id = $_GET['id'];
        $path= $_GET['path'];
      

        DB::table('medias')->where('med_oid', '=', $id)->delete(); 

        Storage::delete('public/'.$path);

        return view('medias-delete');

    }
}