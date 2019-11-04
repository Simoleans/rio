<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquina;
use PDF;

class ReportesController extends Controller
{
    public function pot()
    {
    	 $maquinas = Maquina::MaquinaActive();

    	 //dd($maquinas);

        return view('pdf.pdf',['maquinas' => $maquinas]);
    }
}
