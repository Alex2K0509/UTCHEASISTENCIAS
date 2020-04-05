<?php

namespace App\Http\Controllers;
use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Asistencias;
use App\Horarios;
use Auth;

//pdf
use Illuminate\Http\Request;
use PDF;
use App\insertar_datos;
use DB;









class PDFmaker extends Controller
{
    

    public function PDFasistencias(Request $request)

    {   
        $now = new \DateTime();//hora
        $id =Auth::user()->matricula;
       
        $user = User::find($id);

        $id_grupo=$request->id_grupo;
      
        
//dd($id_asig);
// $insertar_datoos = insertar_datos::all();         

$genericas = Genericas::select('*')->where('Id_grupo', '=',$id_grupo)->where('matricula_alumno','=',$id)->get();

$asignaturas= Asignaturas::select('*')->where('Id_grupo','=',$id_grupo)->where('matricula_alumno','=',$id)->get();

$asistencias= Asistencias::select('*')->where('Id_grupo','=',$id_grupo)->where('Id_Asignatura','=','1114')->get();

        $pdf = PDF::loadView('vistas_max.TablaAsistencia', compact('genericas','asignaturas','asistencias','user','now'));

        $pdf->setPaper('a4','landscape');
        return $pdf->stream('TablaDeAsistencias.pdf');
    }
}
