<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Pot;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $configuracion = Configuracion::all();

       return view('pot.generar',['configuracion' => $configuracion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pot = Pot::all();

        return view('pot.index',['pot' => $pot]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request, [
            'documento'   => 'required|mimes:pdf|max:11000',
        ]);

        $name =  'POT-'.date('Yhis').'.pdf';

        $pot = new Pot;
        $pot->user_id = Auth::user()->id;
        $pot->documento= $name;

         if ($pot->save()) {
            storeNotification('pot',route('pot.show',['id' => $pot->id]));
            $request->documento->storeAs('documentos',$name);
            return redirect("pot/create")->with([
                'flash_message' => 'Documento guardado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("pot/create")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }

        //$request->documento->storeAs('documentos', $request->documento->getClientOriginalName());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pot = Pot::findOrfail($id);

        $path = storage_path('app/documentos/'.$pot->documento);

        return response()->download($path);

        //return Storage::download($pot->documento);
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
