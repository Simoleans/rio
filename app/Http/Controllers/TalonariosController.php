<?php

namespace App\Http\Controllers;

use App\Talonarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TalonariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talonarios = Talonarios::all();

        return view('talonarios.index',['talonarios' => $talonarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('talonarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talonario = new Talonarios;
        $talonario->user_id = Auth::user()->id;
        $talonario->fill($request->all());

         if ($talonario->save()) {
            return redirect("talonarios")->with([
                'flash_message' => 'Talonario agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("talonarios")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Talonarios  $talonarios
     * @return \Illuminate\Http\Response
     */
    public function show(Talonarios $talonarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talonarios  $talonarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Talonarios $talonarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talonarios  $talonarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talonarios $talonarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talonarios  $talonarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talonarios $talonarios)
    {
        //
    }
}