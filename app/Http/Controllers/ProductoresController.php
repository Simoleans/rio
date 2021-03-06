<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Productores;
use App\Regiones;

class ProductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productores = Productores::all();

        return view('productores.index',['productores' => $productores]);
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
        return view('productores.create',['regiones' => $regiones]);
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
        $productores = new Productores;
        $productores->user_id = Auth::user()->id;
        $productores->fill($request->all());

         if ($productores->save()) {
            storeNotification('productor',route('productores.show',['id' => $productores->id]));
            return redirect("productores")->with([
                'flash_message' => 'Productores agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("productores")->with([
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
        $productor = Productores::findOrfail($id);

        return view('productores.show',['productor' => $productor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productor  = Productores::findOrfail($id);
        $regiones = Regiones::orderBy('region')->get();

        return view('productores.edit',['productor' => $productor,'regiones' => $regiones]);
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
         $productores = Productores::findOrfail($id);

         $productores->fill($request->all());

         if ($productores->save()) {
            return redirect("productores")->with([
                'flash_message' => 'Productor modificado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("productores")->with([
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
        Productores::destroy($id);
    }
}
