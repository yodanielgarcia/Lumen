<?php

namespace App\Http\Controllers\base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class utils extends Controller
{

   private static $okStatus = 200;

    public static function buildHead($key,$label,$sortable = null ,$sortDirection = null){
        $field = array();
        $field['key']=$key;
        $field['label']=$label;
        isset($sortable) ? $field['sortable']=$sortable : null;
        isset($sortDirection) ? $field['sortDirection']=$sortDirection : null;
        return $field;
    }

    public static function buildTable($headers,$items,$methodTable){
        return array('fields'=>$headers,'items' => $items,'methodsTable'=>$methodTable);
    }

    public static function buildResponse($code,$message,$data = null){
        $response['code'] = $code;
        $response['message'] = $message;
        $response['data']=$data;
        return $response;
    } 
    public static function transformArrayActive($request){
        foreach ($request as $key => $value) {
            $value->active = $value->active=="1"?"Activo":"Inactivo";  
        }
        return $request;
    }
}
