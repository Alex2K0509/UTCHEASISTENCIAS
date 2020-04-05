<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminImportarMateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vistas_Ramiro.ventanaImportarMateria');
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

     public function enviarchivo(Request $request){
            $fecha = date("Y-m-d h:m:s");
            $nombre = md5(time());
            $file = $request->file('file');
            $tipo = $file->getMimeType();
            switch($tipo){
                  case 'text/plain':            
                         \Storage::disk('local')->put('/public/'.$nombre.".csv", \File::get($file));
                  break;
                  default:
                   dd("Archivo Incorrecto");
                    //    dd($file);
            }       

            dd($tipo);
    }
}
