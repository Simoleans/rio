<?php

namespace App\Http\Controllers;

use App\Regiones;
use App\Maquina;
use App\Devoluciones;
use App\Arriendo;
use App\Fotos;
use App\Combustible;
use App\Hidraulico;
use App\Motor;
use App\Aire;
use App\Radiador;
use Illuminate\Http\Request;
use PDF;

class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $devolucion = Devoluciones::where('status',1)->get();
         return view('devoluciones.index',['devolucion' => $devolucion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones= Regiones::all();
        $maquinas = Maquina::where('status_maquina',2)->get();
        return view('devoluciones.create',['regiones' => $regiones,'maquinas' => $maquinas]);
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
        //buscar que arriendo tiene esa maquina
        $arriendo = Arriendo::where('maquina_id',$request->maquina_id)->first();

        //dd($arriendo->id);

        $devolucion = new Devoluciones();
        $devolucion->arriendo_id = $arriendo->id;
        $devolucion->maquina_id = $request->maquina_id;
        $devolucion->horas = $request->horas;

        if ($devolucion->save()) {

            $maquina = Maquina::findOrfail($request->maquina_id);
            $maquina->status_maquina = 1; // devuelta
            $maquina->save();

            $combustible = new Combustible;
            $combustible->devolucion_id = $devolucion->id;
            $combustible->fill($request->all());
            $combustible->save();

            $hidraulico = new Hidraulico();
            $hidraulico->devolucion_id = $devolucion->id;
            $hidraulico->fill($request->all());
            $hidraulico->save();

            $motor = new Motor();
            $motor->devolucion_id = $devolucion->id;
            $motor->fill($request->all());
            $motor->save();

            $aire = new Aire();
            $aire->devolucion_id = $devolucion->id;
            $aire->fill($request->all());
            $aire->save();

            $radiador = new Radiador();
            $radiador->devolucion_id = $devolucion->id;
            $radiador->fill($request->all());
            $radiador->save();

            foreach ($request->image as $img) {
                $image = $img;  // your base64 encoded
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = str_random(10).'.'.'png';
                \File::put(public_path(). '/fotos/devolucion/' . $imageName, base64_decode($image));

                $fotos = new Fotos();
                $fotos->devolucion_id = $devolucion->id;
                $fotos->foto = $imageName;
                $fotos->save();

            }//fin foreach
            return redirect("devolucion")->with([
                'flash_message' => 'Arriendo agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("devolucion")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }//fin save arriendo
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arriendo = Devoluciones::findOrfail($id);
        //dd($arriendo->combustible());

        return view('devoluciones.show',['devolucion' => $arriendo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoluciones $devoluciones)
    {
        //
    }

    public function reporte($id)
    {
        // $pdf = PDF::loadView('pdf.devolucion');
        // return $pdf->stream('invoice.pdf');
         $devolucion = Devoluciones::findOrfail($id);

         

        return view('pdf.devolucion',['devolucion'=>$devolucion]);
    }
}
