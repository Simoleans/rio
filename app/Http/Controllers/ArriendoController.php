<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos;

class ArriendoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arriendo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->image);

        foreach ($request->image as $img) {
            $image = $img;  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = str_random(10).'.'.'png';
            \File::put(public_path(). '/fotos/' . $imageName, base64_decode($image));
        }

        

        

        // $array = [
        //     "image_frente" => $request->image_frente,
        //     "image_izquierdo" => $request->image_izquierdo,
        //     "image_trasero" => $request->image_trasero,

        // ];
        // $fotos = new Fotos;
        // $fotos->generateImage($array);

        // $nombre = 'foto'.uniqid().'.png';
        // $carpeta = public_path().'/fotos/'.$nombre;

        // file_put_contents($carpeta, base64_decode($request->image_frente));
        // file_put_contents($carpeta, base64_decode($request->image_izquierdo));
        // file_put_contents($carpeta, base64_decode($request->image_trasero));
        // file_put_contents($carpeta, base64_decode($request->image_derecho));
        // file_put_contents($carpeta, base64_decode($request->image_tunel));
        // file_put_contents($carpeta, base64_decode($request->image_comandos));
        // file_put_contents($carpeta, base64_decode($request->image_horometro));


        // $fotos->generateImage($request->image_frente);
        // $fotos->generateImage($request->image_izquierdo);
        // $fotos->generateImage($request->image_trasero);
        // $fotos->generateImage($request->image_derecho);
        // $fotos->generateImage($request->image_tunel);
        // $fotos->generateImage($request->image_comandos);
        // $fotos->generateImage($request->image_horometro);

        //dd($fotos->generateImage($request->image_frente));

        return "si";
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
