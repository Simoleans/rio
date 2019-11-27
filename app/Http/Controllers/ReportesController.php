<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquina;
use App\Sag;
use PDF;

class ReportesController extends Controller
{
    public function pot()
    {
    	 $maquinas = Maquina::MaquinaActive();

    	 //dd($maquinas);

        return view('pdf.pdf',['maquinas' => $maquinas]);
    }

    public function sag($id)
    {
    	 $sag = Sag::findOrfail($id);

    	 //dd($maquinas);

        return view('pdf.sag',['sag' => $sag]);
    }
}
