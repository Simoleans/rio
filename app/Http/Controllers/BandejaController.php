<?php

namespace App\Http\Controllers;

use App\Bandeja;
use Illuminate\Http\Request;

class BandejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bandejas = Bandeja::all();

        return view('bandejas.index',['bandejas' => $bandejas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bandejas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bandeja = new Bandeja;
        $bandeja->fill($request->all());

         if ($bandeja->save()) {
            return redirect("bandejas")->with([
                'flash_message' => 'Fruta agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("bandejas")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bandeja  $bandeja
     * @return \Illuminate\Http\Response
     */
    public function show(Bandeja $bandeja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bandeja  $bandeja
     * @return \Illuminate\Http\Response
     */
    public function edit(Bandeja $bandeja)
    {
        $bandeja = Bandeja::findOrfail($id);

        return view('bandejas.edit',['bandeja' => $bandeja]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bandeja  $bandeja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bandeja $bandeja)
    {
          $bandeja = Bandeja::findOrfail($id);

          $bandeja->fill($request->all());

          if ($bandeja->save()) {
             return redirect("bandejas")->with([
                 'flash_message' => 'Fruta modificada correctamente.',
                 'flash_class'   => 'alert-success',
             ]);
         } else {
             return redirect("bandejas")->with([
                 'flash_message'   => 'Ha ocurrido un error.',
                 'flash_class'     => 'alert-danger',
                 'flash_important' => true,
             ]);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bandeja  $bandeja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bandeja $bandeja)
    {
        //
    }
}
