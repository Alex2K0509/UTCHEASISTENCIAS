<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Aviso de justificacion";
        $for = "8118110125@utchetumal.edu.mx";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("pruebalaravel2020@gmail.com","Nombre de alumno");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
