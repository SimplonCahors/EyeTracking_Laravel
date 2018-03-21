<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UploadController extends Controller
{
    /**
     * Upload stuff
     *
     * @param  Request  $request
     * @return Responsecatalogue
     */
    public function update(Request $request)
    {
        $pathstart = $request->file('filename')->store('public');
        $path = substr($pathstart, 7);  

        $originalName = $request->file('filename')->getClientOriginalName();
        $datatype = $request->input('dataType');
        echo"<pre>";
        var_dump($request->all());

        print_r($path);
        echo"</pre>";

        DB::table('medias')->insert(
            array( 'med_type' => $datatype, 'med_filename' => $originalName,'med_path' => $path, 'fk_are_oid' => NULL )
        );

         
        

        return $path;
    }


     public function read(){
        $medias = DB::table('medias')->get();
    return view('medias',['medias' => $medias]);
    }
}

