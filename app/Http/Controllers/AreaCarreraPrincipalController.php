<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Carrera;
use App\insertar_datos;
use App\Http\AreaMaestroAsistenciasActualizarController;
use Auth;
//---
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use App\Horarios;




class AreaCarreraPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('vistas_max.primeraVentanaCarrera');
         

    }
//index para grup
    public function index2()
    {
        $id =Auth::user()->matricula;
        $user = user::find($id);
        
       $asignaturas= Asignaturas::select('*')->where('matricula_alumno','=',$id)->get();
        //dd($asignaturas);
         return view('vistas_max.segundaVentanaCarrera',compact('user','asignaturas','id'));

    }

    //area carrera tabla
    public function index3(Request $request)
    {
        //dd('hola');
        $id =Auth::user()->matricula;
        $user = User::find($id);

        $id_grupo=$request->id_grupo; 
        $id_asignatura=$request->Id_asignatura;

        $fecha1=$request->input('date1');
        
        $fecha2=$request->input('date2');
//dd($id_asig);
// $insertar_datoos = insertar_datos::all();         

$genericas = Genericas::select('*')->where('Id_grupo', '=',$id_grupo)->where('matricula_alumno','=',$id)->get();

$asignaturas= Asignaturas::select('*')->where('Id_grupo','=',$id_grupo)->where('matricula_alumno','=',$id)->get();

$asistencias= Asistencias::select('*')->where('Id_grupo','=',$id_grupo)->where('Id_Asignatura','=',$id_asignatura)->get();
//$asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$id_asignatura)->where('Id_grupo','=',$id_grupo)->whereBetween('fecha', [$fecha1, $fecha2])->get();
return view('vistas_max.terceraVentanaCarrera', compact('genericas','asignaturas','asistencias','user'));

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
