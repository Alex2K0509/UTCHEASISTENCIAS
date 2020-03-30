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
        $id =Auth::user()->matricula;
        //dd($id);
     $dato=$request->Id_asignatura;//guardo el request
     $dato2=$request->Id_grupo;
     //dd($dato2);
     $dato3=$request->fecha;
     //dd($dato3);
     //dd(Asignaturas::find($dato));

     /*$maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','2')->get();*/

    $genericas = Genericas::select('*')->where('Id_Asignatura','=', $dato)->where('Id_grupo', '=',$dato2)->get();
    $genericas = $genericas->where('matricula_alumno','<>',$id);
//dd($genericas);
    //dd($genericas->asiste);

    foreach($genericas as $gen){
       // dd($gen);
        //echo $gen->matricula_alumno;
        //$gen->asiste->where('fecha','=',$dato3);
        echo $gen->asiste->fecha;
        //dd($gen->alumno);
            //foreach($gen->asiste as $as){
               // dd('hola'.$as->matricula_alumno);
            //}
    }


//dd($gen->asiste);
 
    //hacer lo de arriba pero para asdignaturas, el chiste es que jale los datos que nos falta pintar en la tabla
    //dd($genericas);
    $asignaturas= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','1')->get();
    //dd($asignaturas);
    $maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','2')->get();
    //$asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->get();
    //dd($asistencias);
//$datosT=array($genericas,$asignaturas,$asistencias);   
       return view('vistas_alejandro.tercera',compact('genericas','asignaturas','maestro','dato3'));
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
