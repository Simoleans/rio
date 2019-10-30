<?php

namespace App\Http\Controllers;

use App\Frutas;
use App\Variedades;
use Illuminate\Http\Request;

class VariedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variedades= Variedades::all();

        return view('variedades.index',['variedades' => $variedades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $frutas = Frutas::all(); 
        return view('variedades.create',['frutas' => $frutas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $variedad = new Variedades;
        $variedad->fill($request->all());

         if ($variedad->save()) {
            return redirect("variedades")->with([
                'flash_message' => 'Variedad agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("variedades")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variedades  $variedades
     * @return \Illuminate\Http\Response
     */
    public function show(Variedades $variedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variedades  $variedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Variedades $variedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variedades  $variedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variedades $variedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variedades  $variedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variedades $variedades)
    {
        //
    }
}
