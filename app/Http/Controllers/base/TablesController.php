<?php

namespace App\Http\Controllers\base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\base\utils;


use DB;

class TablesController extends Controller
{

    public static function tableTry($rol=null,$del=false){
 
       $head_doc= utils::buildHead('translation','datos',true,'desc');
        // set array
       $fields = [
            $head_doc,
        ];
         // select
         // document, name, email, phone, mobile, profile, active
         $varConsulta= DB::table("dblink.vis_lang_object")
         ->select('object_name','translation')
         ->where('lang_id',1)
         ->limit(10)
         ->get();
        //$users["active"] = $users["active"]?'Activo':'Inactivo';
        //$varConsulta= utils::transformArrayActive($varConsulta);
        $actionsMethods = ['adminUsersDelete'];
             // set table
        $table =  utils::buildTable($fields,$varConsulta,$actionsMethods);

        $response = utils::buildResponse(1,"Tablas de data",$table);
        return Response()->json($response, 200);
    }

}