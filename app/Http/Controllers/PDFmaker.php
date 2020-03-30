<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\insertar_datos;

class PDFmaker extends Controller
{
    //
    

    public function PDFasistencias()

    {
        $insertar_datoos = insertar_datos::all();
        $pdf = PDF::loadView('vistas_max.TablaAsistencia', compact('insertar_datoos'));
        $pdf->setPaper('a4','landscape');
        return $pdf ->stream('asistencias.pdf');
    }
}
