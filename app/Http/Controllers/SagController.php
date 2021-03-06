<?php

namespace App\Http\Controllers;

use App\Sag;
use App\Campo;
use App\Maquina;
use App\Productores;
use App\Estacionamiento;
use App\Faena;
use App\Mail\SagMail;
use Illuminate\Http\Request;

class SagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sag = Sag::all();

        return view('sag.sag',['sags' => $sag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $maquinas = Maquina::all();
         $productores= Productores::all();
         $campo = Campo::all();

        return view('sag.create',['maquinas' => $maquinas,'productores' => $productores,'campo' => $campo]);
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
        $sag = new Sag;
        $sag->fill($request->all());

        if ($request->estacionamiento_id) {

            $estacionamiento = Estacionamiento::findOrfail($request->estacionamiento_id);
            $maquina = Maquina::findOrfail($estacionamiento->maquina->id);

            $maquina->status_estacionamiento = 1;
             //dd($maquina->status_estacionamiento);
            $maquina->save();
           
            
        
        }
        //cambiar status faenas
        if ($request->faena_ori_id) {
             $faenaOrigen= Faena::findOrfail($request->faena_ori_id);
             $faenaOrigen->status = 2;
             $faenaOrigen->save();

        }

        if ($request->faena_dest_id) {
            //cambiar status faena destino
            $faenaDestino = Faena::findOrfail($request->faena_dest_id);
            $faenaDestino->status = 1;
            $faenaDestino->save();
        }
           
       

            //dd($faenaOrigen,$faenaDestino);

        if ($sag->save()) {
            
            storeNotification('sag',route('sags.show',['id' => $sag->id]));

            return redirect("sags")->with([
                'flash_message' => 'Sag registrado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("sags")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function show(Sag $sag)
    {
        

        $correos = Sag::CorreosSag($sag->faenaOrigen->productor->comuna_id);
        //dd($sag->faenaOrigen->productor->comuna_id);

        return view('sag.show',['sag' => $sag,'correoSag' => $correos]);
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function edit(Sag $sag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sag $sag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sag  $sag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sag $sag)
    {
        //
    }

    public function sendMail($id)
    {
        $sag = Sag::findOrfail($id);

        $correos = Sag::CorreosSag($sag->faenaOrigen->productor->comuna_id);
        $c = 0;

        foreach ($correos as $key) {
            $c++;
            \Mail::to($key->persona->correo)
                ->send(new SagMail($sag));
         }
         if (count($correos) == $c) {
              return redirect("sag")->with([
                'flash_message' => 'Correo enviado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
         }
    }
}
