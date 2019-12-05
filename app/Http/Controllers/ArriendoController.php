<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos;
use App\Arriendo;
use App\Combustible;
use App\Hidraulico;
use App\Motor;
use App\Regiones;
use App\Aire;
use App\Radiador;
use App\Maquina;
class ArriendoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arriendos = Arriendo::where('status',1)->get();
         return view('arriendo.index',['arriendo' => $arriendos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones= Regiones::all();
        $maquinas = Maquina::where('status_maquina',1)->where('tipo','Arriendo')->get();
        return view('arriendo.create',['regiones' => $regiones,'maquinas' => $maquinas]);
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

        $arriendo = new Arriendo();
        $arriendo->fill($request->all());

        if ($arriendo->save()) {

            $combustible = new Combustible;
            $combustible->arriendo_id = $arriendo->id;
            $combustible->fill($request->all());
            $combustible->save();

            $hidraulico = new Hidraulico();
            $hidraulico->arriendo_id = $arriendo->id;
            $hidraulico->fill($request->all());
            $hidraulico->save();

            $motor = new Motor();
            $motor->arriendo_id = $arriendo->id;
            $motor->fill($request->all());
            $motor->save();

            $aire = new Aire();
            $aire->arriendo_id = $arriendo->id;
            $aire->fill($request->all());
            $aire->save();

            $radiador = new Radiador();
            $radiador->arriendo_id = $arriendo->id;
            $radiador->fill($request->all());
            $radiador->save();

            foreach ($request->image as $img) {
                $image = $img;  // your base64 encoded
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = str_random(10).'.'.'png';
                \File::put(public_path(). '/fotos/' . $imageName, base64_decode($image));

                $fotos = new Fotos();
                $fotos->arriendo_id = $arriendo->id;
                $fotos->foto = $imageName;
                $fotos->save();

            }//fin foreach
            return redirect("arriendo")->with([
                'flash_message' => 'Arriendo agregado correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("arriendo")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }//fin save arriendo

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arriendo = Arriendo::findOrfail($id);
        //dd($arriendo->combustible());

        return view('arriendo.show',['arriendo' => $arriendo]);
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
