<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DireccionSag;
use App\Regiones;
use App\Frutas;
use App\Maquina;
use App\Faena;

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

    public function searchFaena(Request $request)
    {
        $faenasOrigen = Maquina::findOrfail($request->maquina_id)->faenas;

        $faenasDestino = Maquina::findOrfail($request->maquina_id)->faenasDestino;


        $maquina = Faena::maquinaExists($request->maquina_id);

        if ($maquina) {

            $maquinaData = Faena::maquinaData($request->maquina_id);
            // dd($maquinaData->productor->comuna->id);
            $comuna = $maquinaData->productor->comuna->id;
            $region=  $maquinaData->productor->region->id;

            $direccionSag = DireccionSag::where('region_id',$region)->where('comuna_id',$comuna)->get();

            return response()->json(['data' => $maquinaData,'status' => true,'direccion' => $direccionSag,'origen' => $faenasOrigen,'destino' => $faenasDestino]);   
        }else{
            return response()->json(['data' => false,'status' => false,'direccion' => false,'faenas' => $faenasOrigen,'destino' => $faenasDestino]);
        } 
        
    }

    public function storeFaena(Request $request)
    {
        dd($request->all());
    }

    public function fecha_sugerida(Request $request)
    {
         $faena = Faena::findOrfail($request->id);

        

         $faena->desde = $request->fecha;

         if ($faena->save()) {
             $faenasDestino = Maquina::findOrfail($request->maquina_id)->faenasDestino;
            return response()->json(['destino' => $faenasDestino,'status' => true,'msg' => 'Se ha modificado la fecha correctamente']);
        } else {
            return response()->json(['destino' => $faenasDestino,'status' => false,'msg' => '¡Error!']);
        }
    }
}
