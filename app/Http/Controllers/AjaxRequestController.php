<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Regiones;
use App\Frutas;

class AjaxRequestController extends Controller
{
    public function comunas($region)
    {
    	return Regiones::comunas_ajax($region);
    }

    public function storeFrutas(Request $request)
    {

    	//dd($request->nombre_fruta);
    	$frutas = new Frutas;
        $frutas->user_id = Auth::user()->id;
        $frutas->nombre_fruta= $request->nombre_fruta;


         if ($frutas->save()) {
         	$frutas_response = Frutas::all();
            return response()->json(['status' => true,'frutas' => $frutas_response]);
        } else {
            return response()->json(['status' => false]);
        }
    }
}
