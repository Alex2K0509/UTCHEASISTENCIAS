<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\AreaMaestroAsistenciaController;
use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use App\Horarios;
use Auth;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =Auth::user()->matricula;
        $user = user::find($id);
        return view('vistas_pablo.solicitarJustificante',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id =Auth::user()->matricula;
        $user = user::find($id);

        return view('vistas_pablo.vizualizarAsistencia',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id =Auth::user()->matricula;
        $user = user::find($id);
        $materia=$request->materia;
        $grupo=$request->grupo;
        $fecha1=$request->input('date1');
        //dd($fecha1);
        $fecha2=$request->input('date2');

        $genericas = Genericas::select('*')->where('Id_Asignatura','=', $materia)->where('Id_grupo', '=',$grupo)->get();
        $genericas = $genericas->where('matricula_alumno','<>',$id);

        $asignaturas= Asignaturas::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->where('Tipo_usuario','=','1')->get();

        $maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->where('Tipo_usuario','=','2')->get();

        // $asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->whereBetween('fecha', [$fecha1, $fecha2])->get();
        $asistencias= Asistencias::select('*')->where('Id_Asignatura','=','1114')->where('Id_grupo','=','TI5')->whereBetween('fecha', ['2020-03-02', '2020-03-06'])->get();
        $horarios= Horarios::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->get();

        return view('vistas_pablo.TablaAsistencia',compact('user','horarios','genericas','asignaturas','asistencias','maestro','fecha1','fecha2'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $id =Auth::user()->matricula;
        $user = user::find($id);
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
        return view('vistas_pablo.vizualizarAsistencia',compact('user','horarios','genericas','asignaturas','asistencias','maestro','fecha1','fecha2'));
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
