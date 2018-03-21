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
        $path = $request->file('filenam')->store('public');

        $originalName = $request->file('filenam')->getClientOriginalName();
        $datatype = $request->input('dataType');
        echo"<pre>";
        var_dump($request->all());
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

