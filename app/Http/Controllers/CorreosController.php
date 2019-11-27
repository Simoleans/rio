<?php

namespace App\Http\Controllers;
use App\Regiones;
use App\Correos;
use App\CorreosPersonas;
use Illuminate\Http\Request;

class CorreosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correos = Correos::all();
        return view('correos.index',['correos' => $correos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Regiones::all();
         //dd($regiones);
        return view('correos.create',['regiones' => $regiones]);
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

        $correos = new Correos;
        $correos->fill($request->all());

        
        if ($correos->save()) {

            foreach ($request->comuna_id as $r) {
                $correos_personas = new CorreosPersonas;
                $correos_personas->comunas_id = $r;
                $correos_personas->correos_id = $correos->id;
                $correos_personas->save();
            }
            return redirect("correos")->with([
                'flash_message' => 'Correo registrado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
             } else {
                return redirect("correos")->with([
                    'flash_message'   => 'Ha ocurrido un error.',
                    'flash_class'     => 'alert-danger',
                    'flash_important' => true,
                ]);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Correos  $correos
     * @return \Illuminate\Http\Response
     */
    public function show(Correos $correos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Correos  $correos
     * @return \Illuminate\Http\Response
     */
    public function edit(Correos $correos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Correos  $correos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Correos $correos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Correos  $correos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Correos $correos)
    {
        //
    }
}
