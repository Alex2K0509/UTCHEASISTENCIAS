<?php

namespace App\Http\Controllers;
use App\Http\AreaMaestroAsistenciaController;
use Illuminate\Http\Request;
//use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use App\Horarios;
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
        
     $dato=$request->Id_asignatura;//guardo el request
     $dato2=$request->Id_grupo;
     
     $dato3=$request->input('fecha');
//dd($dato3);
$genericas = Genericas::select('*')->where('Id_Asignatura','=', $dato)->where('Id_grupo', '=',$dato2)->where('matricula_alumno','<>',$id)->get();
//$genericas = $genericas->where('matricula_alumno','<>',$id);

    $asignaturas= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','1')->get();
 
    $maestro= Asignaturas::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('Tipo_usuario','=','2')->get();
 
    $horarios= Horarios::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->get();

    $asistencias= Asistencias::select('*')->where('Id_Asignatura','=',$dato)->where('Id_grupo','=',$dato2)->where('fecha','=',$dato3)->get();
    return view('vistas_alejandro.tercera',compact('horarios','genericas','asignaturas','maestro','dato3','asistencias'));
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


    public function update(Request $request,$matricula)
    {

        $matricula=(int) $matricula;
   
        $estado=$request->input('estado');
        
        $Asistencia = Asistencias::find($matricula);  
        //dd($Asistencia);
        $Asistencia->estado=$estado;
        $Asistencia->save();
        

     return   redirect()->back()->with('Message','editado exitosamente');
    }

    public function test(){
        $test=Asistencias::where('matricula_alumno','=',8118110127)->get();
        dd($test);
//ejemplo
        $A= new Asistencias();
        $A->matricula_alumno='8118110128';
        $A->Id_grupo='TI5';
        $A->Id_asignatura='1111';
        $A->fecha='2020-03-02';
        $A->hora='17:00';
        $A->Rfid='asdada';
        $A->estado='asistencia';

        //$A->save();

    }
}
