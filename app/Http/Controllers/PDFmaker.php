<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;

class PDFmaker extends Controller
{
    //
    function gen()
    {
    	$pdf = App::make('dompdf.wrapper');
    	$pdf->loadView('vistas_max.imprimir');
    	$pdf->setPaper('a4','landscape');
    	return $pdf->stream();
    	debugLayout: false;
    	debugCss: false;
    }
}
