<?php

namespace App\Http\Controllers;

use App\Estacionamiento;
use App\Regiones;
use App\Maquina;
use Illuminate\Http\Request;

class EstacionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estacionamiento.index',['estacionamientos' => Estacionamiento::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $regiones = Regiones::all();
         $maquina = Maquina::where('status_maquina',1)->get();

         return view('estacionamiento.create',['regiones' => $regiones,'maquinas' => $maquina]);
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
        $estacionamiento = new Estacionamiento;
        $estacionamiento->fill($request->all());

        if ($estacionamiento->save()) {
            
            return redirect("estacionamiento")->with([
                'flash_message' => 'Estacionamiento agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("estacionamiento")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Estacionamiento $estacionamiento)
    {
        return view('estacionamiento.show',['estacionamiento' => $estacionamiento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Estacionamiento $estacionamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estacionamiento $estacionamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estacionamiento $estacionamiento)
    {
        //
    }
}
