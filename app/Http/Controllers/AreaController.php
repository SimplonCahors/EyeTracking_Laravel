<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use DB;

use App\Board;
use App\Area; 
use App\Media; 

class AreaController extends Controller
{
    public function fetchAssocZones($idPage) {
        $pageQuery = Board::all()->where('pag_oid','=', $idPage)->first();
        $areasQuery = Area::all()->where('fk_pag_oid','=', $idPage);
        var_dump($areasQuery);

        //to verify if media
      foreach ($areasQuery as $key => $value) {
        $mediaQuery = Medias::all()->where('fk_are_oid','=', $value->are_oid);

        $areasQuery[$key]->has_media = count($mediaQuery);
        
      }
     
        return view('boards.mapping.show',['pages' => $pageQuery[0], 'areas' => $areasQuery]);
    }
}
