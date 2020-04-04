<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;//Importante incluir la clase Mail, que será la encargada del envío
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Aviso de justificacion";
        $for = "8118110125@utchetumal.edu.mx";
        Mail::send('vistas_pablo.justificacionenviada',$request->all(), function($msj) use($subject,$for){
            $msj->from("pruebalaravel2020@gmail.com","Nombre de alumno");
            $msj->subject($subject);
            $msj->attachFromStorage('/path/to/file');
            $msj->to($for);
        });
        return redirect()->back();

    }
}
