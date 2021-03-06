<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Maquina;
use App\Faena;
use App\Regiones;
use App\PropietarioMaquina;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maquina = Maquina::all();
        $faenas = Faena::all();

        //dd($faenas);
        return view('maquina.index',['maquina' => $maquina,'faenas' => $faenas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones= Regiones::all();
        return view('maquina.create',['regiones' => $regiones]);
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
        $maquina = new Maquina;
        $maquina->user_id = Auth::user()->id;
        $maquina->fill($request->all());



         if ($maquina->save()) {
            if ($request->tipo == 'Arriendo') {
                storeNotification('Inspeccionar Maquina',route('maquina.show',['id' => $maquina->id]));
                $propietario = new PropietarioMaquina;
                $propietario->maquina_id    = $maquina->id;
                $propietario->rut           = $request->rut;
                $propietario->r_social      = $request->r_social;
                $propietario->direccion     = $request->direccion;
                $propietario->comuna_id     = $request->comuna_id;
                $propietario->region_id     = $request->region_id;
                $propietario->save();
            }
            return redirect("maquina")->with([
                'flash_message' => 'Maquina agregada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("maquina")->with([
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
        $maquina = Maquina::findOrfail($id);

        
        return view('maquina.show',['maquina' => $maquina]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maquina = Maquina::findOrfail($id);

        return view('maquina.edit',['maquina' => $maquina]);
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
         $maquina = Maquina::findOrfail($id);

         $maquina->fill($request->all());

         if ($maquina->save()) {
            return redirect("maquina")->with([
                'flash_message' => 'Maquina modificada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("maquina")->with([
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
