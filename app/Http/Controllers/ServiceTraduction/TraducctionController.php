<?php

namespace App\Http\Controllers\ServiceTraduction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\traductions\vistaTraducciones;
use DB;

class TraducctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return "pruebas";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function JsonTraducciones(Request $request)
    {
        //app('redis')->set('prueba','ok');
        // return app('redis')->get('prueba');
        
        if($request->isJson()){

            $varConsulta= vistaTraducciones::select('object_name','translation')
            ->where('lang_id', $request['idioma'])
            ->get();
            $arrayData = array();
            foreach($varConsulta as $row){
                //app('redis')->set($row->object_name,$row->translation);
                $arrayData += array($row->object_name => $row->translation);
                            }
            return response()->json($arrayData);
        }
        return response()->json(['error'=>'fail']);
        
        
    }
}
