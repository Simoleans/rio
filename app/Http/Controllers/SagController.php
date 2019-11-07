<?php

namespace App\Http\Controllers;

use App\Sag;
use App\Campo;
use App\Maquina;
use App\Productores;
use Illuminate\Http\Request;

class SagController extends Controller
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
         $maquinas = Maquina::all();
         $productores= Productores::all();
         $campo = Campo::all();

        return view('sag.create',['maquinas' => $maquinas,'productores' => $productores,'campo' => $campo]);
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
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function show(Sag $sag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function edit(Sag $sag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sag $sag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sag $sag)
    {
        //
    }
}
