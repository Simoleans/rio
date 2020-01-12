<?php

namespace App\Http\Controllers;

use App\Faena;
use App\Frutas;
use App\Reporte;
use App\Bandeja;
use App\Talonarios;
use Illuminate\Http\Request;
use App\Exports\ReporteExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

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

         $lastId = Reporte::latest()->first();
         $t = Talonarios::findOrfail($lastId->talonario_id);// me traigo el talonario del ultimo registro
         $inicio = isset(Auth::user()->talonario->inicio) ? Auth::user()->talonario->inicio : true; // Si no existe, ponlo true
         $fin = isset(Auth::user()->talonario->fin) ? Auth::user()->talonario->fin : true; // Si no existe, ponlo true

        if (!$lastId->nro_talonario) { // si el ultimo es nulo, trae el numero antes del null

         //si el primero del talonario es null   
         $q = Reporte::where('talonario_id',$lastId->talonario_id)->first(); // busco el talonario
         if (!$q->nro_talonario) { // si es null el primero
             $resultado = $inicio; // pongo que sea el inicio
             return view('reporte.create',['frutas' => $frutas, 'faenas' => $faena,'bandejas' => $bandejas,'nro_talonario' => $resultado]);
         }
         //dd($resultado);
         $lastId = Reporte::latest()->skip(1)->first();
        
        }
         if($t->status == 0) {
            $nro_talonario2 = $inicio - 1;
         }else{
            $nro_talonario2 = $lastId->nro_talonario;
         }

         

        
         if (!$lastId) {
            
            $codigo = $inicio;
            $resultado = $codigo;
        } else {
            $codigo = (str_pad((int) $nro_talonario2, STR_PAD_LEFT));
            $resultado = $codigo + 1;
        }

        if ($resultado > $fin ) { // si ya llegue al maximo de nro de talonario
                /**
                 * Edito el talonario que se acabo y lo pongo status cerrado
                 * 
                 */
                $talonario = Talonarios::findOrfail(Auth::user()->talonario->id);
                $talonario->status = 0;
                $talonario->save();
                //fin editar status
                
            return redirect("reporte")->with([
                'flash_message' => 'Ya el talonario llego a su fin.',
                'flash_class'   => 'alert-danger',
            ]);
        }else{
            return view('reporte.create',['frutas' => $frutas, 'faenas' => $faena,'bandejas' => $bandejas,'nro_talonario' => $resultado]);
        }

        
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
