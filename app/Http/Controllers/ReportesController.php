<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportesController extends Controller
{
    public function pot()
    {
    	 $pdf = PDF::loadView('pdf.pdf');

        return $pdf->stream('reporte.pdf');
    }
}
