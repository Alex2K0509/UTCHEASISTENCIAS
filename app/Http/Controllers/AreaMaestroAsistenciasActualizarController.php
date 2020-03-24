<?php

namespace App\Http\Controllers;
use App\Http\AreaMaestroAsistenciaController;
use Illuminate\Http\Request;
//use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use Auth;

class AreaMaestroAsistenciasActualizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
     $dato=$request->Id_asignatura;//guardo el request
     $dato2=$request->Id_grupo;
     //$dato3=$request->fecha;
     //dd($dato);

    $genericas = Genericas::select('*')->where('Id_Asignatura','=', $dato)->where('Id_grupo', '=',$dato2)->get();
    //hacer lo de arriba pero para asdignaturas, el chiste es que jale los datos que nos falta pintar en la tabla
    //dd($genericas);
    $asignaturas= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','1')->get();
    $maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','2')->get();
    $asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->get();
    //dd($asistencias);

     
//$datosT=array($genericas,$asignaturas,$asistencias);

     
       return view('vistas_alejandro.tercera',compact('genericas','asignaturas','asistencias','maestro'));
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
}
