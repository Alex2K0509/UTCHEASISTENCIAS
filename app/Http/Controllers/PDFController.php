<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF(){
        $pdf=\PDF ::loadview('vistas_alejandro.quinta');
       return $pdf->download('reporte.pdf');

    }
}
