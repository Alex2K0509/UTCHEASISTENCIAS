<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\AreaMaestroAsistenciaController;

//use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use App\Horarios;
use Auth;

class ReporteListoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id =Auth::user()->matricula;
        
        $materia=$request->materia;
        $grupo=$request->grupo;
        $fecha1=$request->input('date1');
        //dd($fecha1);
        $fecha2=$request->input('date2');
   
       
        $genericas = Genericas::select('*')->where('Id_Asignatura','=', $materia)->where('Id_grupo', '=',$grupo)->get();
        $genericas = $genericas->where('matricula_alumno','<>',$id);


    $asignaturas= Asignaturas::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->where('Tipo_usuario','=','1')->get();

    
    
    $maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->where('Tipo_usuario','=','2')->get();
    
    
    
    $asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->whereBetween('fecha', [$fecha1, $fecha2])->get();
    
    $horarios= Horarios::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->get();
    //dd($horarios);

//dd($asistencias); //funciona

//dd($asistencias);


        return view('vistas_alejandro.quinta',compact('horarios','genericas','asignaturas','asistencias','maestro','fecha1','fecha2'));
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
