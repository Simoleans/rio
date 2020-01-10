<?php

namespace App\Http\Controllers;

use App\Faena;
use App\Frutas;
use App\Reporte;
use App\Bandeja;
use Illuminate\Http\Request;
use App\Exports\ReporteExport;
use Maatwebsite\Excel\Facades\Excel;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporte = Reporte::all();
        return view('reporte.index',['reportes' => $reporte]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faena = Faena::all();
        $frutas = Frutas::all();
        $bandejas = Bandeja::all();
        return view('reporte.create',['frutas' => $frutas, 'faenas' => $faena,'bandejas' => $bandejas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $reporte = new Reporte;
        $reporte->fill($request->all());

         if ($reporte->save()) {
            return redirect("reporte")->with([
                'flash_message' => 'Reporte agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("reporte")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        return view('reporte.show',['reporte' => $reporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
    }

    public function excel(Request $request)
    {
        //dd($request->all());
        
        $reporteExcel= Reporte::excelSearch($request->desde,$request->hasta);

        if(count($reporteExcel) < 1)
        {
            return redirect("reporte")->with([
                'flash_message' => 'No Existen datos en ese rango de fecha',
                'flash_class'   => 'alert-warning',
            ]);
        }

        
        return Excel::download(new ReporteExport($request->desde,$request->hasta), 'reporte.xlsx');
    }
}
