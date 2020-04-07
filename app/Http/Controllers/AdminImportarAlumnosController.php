<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminImportarAlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vistas_Ramiro.ventanaAgregarAlumno');
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
        return $request->file('');
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
                   \Storage::disk('local')->put('/public/csv/'.$nombre.".csv", \File::get($file));

                        $path=storage_path("app\public\csv").'/'.$nombre.'.csv';
                        //dd($ruta);
                        //$csv_file_path = storage_path($ruta).$nombre.'.csv';
                        
                      
                         $handle = fopen($path, 'r');
                         
                         if($handle){
                             while (($file= fgetcsv($handle,1000,',')) !== FALSE) 
                             {
                              
                               
                                 $dato = new User();
                                 $dato->name = $file[0];
                                 $dato->email = $file[1];
                                 $dato->password = $file[2];
                                 $dato->ApePat = $file[3];
                                 $dato->ApeMat = $file[4];
                                 $dato->Rfid = $file[5];
                                 $dato->Tipo_usuario = $file[6];
                                 $dato->matricula = $file[7];

                        
                                 $dato->save();
                             }
                         }
                         fclose($handle);
                         dd('insertado');
                  break;
                  default:
                   dd("Archivo Incorrecto");
                   

                   
            }       
            
    }
}
