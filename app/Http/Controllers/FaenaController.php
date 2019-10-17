<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Productores;
use App\Maquina;
use App\Campo;
use App\Faena;
use Calendar;

class FaenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faena = Faena::all();

        return view('faena.index',['faena' => $faena]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campo = Campo::all();
        $productores = Productores::all();
        $maquina = Maquina::all();
        return view('faena.create',['productores' => $productores , 'campo' => $campo,'maquina' => $maquina]);
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
        $faena = new Faena;
        $faena->user_id = Auth::user()->id;
        $faena->fill($request->all());

         if ($faena->save()) {
            return redirect("faena")->with([
                'flash_message' => 'Faena agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("faena")->with([
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
        $faena = Faena::findOrfail($id);

        $faena_fecha[] = Calendar::event(
            'maltratados',
            true,
            new \DateTime($faena->desde),
            new \DateTime($faena->hasta.' +1 day'),
        [
        'locale' => 'es'
        //any other full-calendar supported parameters
    ]);

        $calendario = Calendar::addEvents($faena_fecha);

        return view('faena.show',['faena' => $faena,'calendario' => $calendario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
