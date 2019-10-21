<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracion = Configuracion::all();
        return view('configuracion.index',['configuracion' => $configuracion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuracion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $configuracion = new Configuracion;
      $configuracion->user_id = Auth::user()->id;
      $configuracion->fill($request->all());

       if ($configuracion->save()) {
          return redirect("configuracion")->with([
              'flash_message' => 'Productores agregada correctamente.',
              'flash_class'   => 'alert-success',
          ]);
      } else {
          return redirect("configuracion")->with([
              'flash_message'   => 'Ha ocurrido un error.',
              'flash_class'     => 'alert-danger',
              'flash_important' => true,
          ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $configuracion  = Configuracion::findOrfail($id);

      return view('configuracion.edit',['configuracion' => $configuracion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $configuracion = Configuracion::findOrfail($id);

      $configuracion->fill($request->all());

      if ($configuracion->save()) {
         return redirect("configuracion")->with([
             'flash_message' => 'Productor modificado correctamente.',
             'flash_class'   => 'alert-success',
         ]);
     } else {
         return redirect("configuracion")->with([
             'flash_message'   => 'Ha ocurrido un error.',
             'flash_class'     => 'alert-danger',
             'flash_important' => true,
         ]);
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
