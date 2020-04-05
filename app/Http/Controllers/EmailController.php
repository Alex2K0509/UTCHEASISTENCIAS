<?php

namespace App\Http\Controllers;
use App\Asignaturas;
use App\Director;
use App\User;
use App\genericaD;
use Illuminate\Support\Facades\Session;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;//Importante incluir la clase Mail, que será la encargada del envío
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function contact(Request $request){
        Session::has('msj');
        $email = $request->director;
        $alumno = $request->input('alumno');
        $subject = "Aviso de justificacion";
        $for = $email;
        Mail::send('vistas_pablo.justificacionenviada',$request->all(), function($msj) use($alumno, $subject,$for){
            $msj->from("fingerprintassistancesystem@gmail.com",$alumno);
            $msj->subject($subject);
            $msj->to($for);

        });
        Session::flash('message', "Correo enviado existosamente");
        return redirect()->back();

    }
}
