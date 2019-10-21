<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Campo;
use App\Regiones;
use App\Productores;
use Illuminate\Http\Request;

class CampoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campos = Campo::all();

        return view('campo.index',['campos' => $campos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productores = Productores::all();
        $regiones = Regiones::all();

        return view('campo.create',['productores' => $productores,'regiones' => $regiones]);
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
        $campo = new Campo;
        $campo->user_id = Auth::user()->id;
        $campo->fill($request->all());

         if ($campo->save()) {
            return redirect("campo")->with([
                'flash_message' => 'Productores agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("campo")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function show(Campo $campo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function edit(Campo $campo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campo $campo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campo  $campo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campo $campo)
    {
        //
    }

    
}
