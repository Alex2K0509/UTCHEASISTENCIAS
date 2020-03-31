<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\insertar_datos;
use DB;

class PDFmaker extends Controller
{
    

    public function PDFasistencias()

    {
        $insertar_datoos = insertar_datos::all();
        return \PDF::loadView('vistas_max.TablaAsistencia', ['insertar_datoos' => $insertar_datoos] )
->setPaper('a4', 'landscape')
->download('archivo.pdf');
        //$pdf = PDF::loadView('vistas_max.TablaAsistencia', compact('insertar_datoos'));

        //$pdf->setPaper('a4','landscape');
        //return $pdf->stream('asistencias.pdf');
    }
}
