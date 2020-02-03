<?php

namespace App\Http\Controllers;

use App\Estacionamiento;
use App\Regiones;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $regiones = Regiones::all();

         return view('estacionamiento.create',['regiones' => $regiones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Estacionamiento $estacionamiento)
    {
        //
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
