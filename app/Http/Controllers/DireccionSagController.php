<?php

namespace App\Http\Controllers;


use App\DireccionSag;
use Illuminate\Http\Request;
use App\Maquina;
use App\Regiones;
use Illuminate\Support\Facades\Auth;

class DireccionSagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccion = DireccionSag::all();

        return view('dirsag.index',['direccion' => $direccion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Regiones::all();

       return view('dirsag.create',['regiones' => $regiones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccion = new DireccionSag;
        $direccion->fill($request->all());
        $direccion->user_id = Auth::user()->id;

         if ($direccion->save()) {
            return redirect("dirsag")->with([
                'flash_message' => 'Direccion agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("dirsag")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DireccionSag  $direccionSag
     * @return \Illuminate\Http\Response
     */
    public function show(DireccionSag $direccionSag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DireccionSag  $direccionSag
     * @return \Illuminate\Http\Response
     */
    public function edit(DireccionSag $direccionSag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DireccionSag  $direccionSag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionSag $direccionSag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DireccionSag  $direccionSag
     * @return \Illuminate\Http\Response
     */
    public function destroy(DireccionSag $direccionSag)
    {
        //
    }
}
