<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Frutas;

class FrutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frutas = Frutas::all();

        return view('frutas.index',['frutas' => $frutas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frutas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frutas = new Frutas;
        $frutas->user_id = Auth::user()->id;
        $frutas->fill($request->all());

         if ($frutas->save()) {
            return redirect("frutas")->with([
                'flash_message' => 'Fruta agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("frutas")->with([
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
        $fruta = Frutas::findOrfail($id);

        return view('frutas.edit',['fruta' => $fruta]);
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
      $fruta = Frutas::findOrfail($id);

      $fruta->fill($request->all());

      if ($fruta->save()) {
         return redirect("frutas")->with([
             'flash_message' => 'Fruta modificada correctamente.',
             'flash_class'   => 'alert-success',
         ]);
     } else {
         return redirect("frutas")->with([
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
