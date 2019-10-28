<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Transportista;

class TransportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportista = Transportista::all();

        return view('transportista.index',['transportista' => $transportista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportista.create');
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
        $transportista = new Transportista;
        $transportista->user_id = Auth::user()->id;
        $transportista->fill($request->all());

         if ($transportista->save()) {
            return redirect("transportista")->with([
                'flash_message' => 'Transportista agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("transportista")->with([
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
        $transportista = Transportista::findOrfail($id);

        return view('transportista.edit',['transportista' => $transportista]);
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
      $transportista = Transportista::findOrfail($id);

      $transportista->fill($request->all());

      if ($transportista->save()) {
         return redirect("transportista")->with([
             'flash_message' => 'Transportista modificado correctamente.',
             'flash_class'   => 'alert-success',
         ]);
     } else {
         return redirect("transportista")->with([
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
