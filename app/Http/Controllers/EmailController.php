<?php

namespace App\Http\Controllers;
use App\Asignaturas;
use App\Director;
use App\User;
use App\genericaD;
use Illuminate\Support\Facades\Mail;//Importante incluir la clase Mail, que será la encargada del envío
use Illuminate\Http\Request;
class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Aviso de justificacion";
        $for = "8118110125@utchetumal.edu.mx";
        Mail::send('vistas_pablo.justificacionenviada',$request->all(), function($msj) use($subject,$for){
            $msj->from("fingerprintassistancesystem@gmail.com","Nombre del alumno");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();

    }
}
