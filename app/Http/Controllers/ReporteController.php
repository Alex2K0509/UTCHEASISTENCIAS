<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Genericas;
use App\Asignaturas;
//use App\Http\AreaMaestroAsistenciasActualizarController;
use Auth;
class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =Auth::User()->matricula;
        $user = user::find($id);//solo con user podemos acceder a cualquier relacion siempre que esta contenga el mismo primary key que user

     
        //$maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$materia)->where('Id_grupo','=',$grupo)->where('Tipo_usuario','=','2')->get();
       //$id_asignatura=Asignaturas::select('matricula_alumno')->where('matricula_alumno','=',$id)->get();
       //dd($id_asisgnatura);
       $asignaturas= Asignaturas::select('*')->where('matricula_alumno','=',$id)->get();

        return view('vistas_alejandro.cuarta',compact('user','asignaturas'));
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
