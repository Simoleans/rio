<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notificacion;

class NotificacionController extends Controller
{
    public function status(Request $request)
    {
    	$notificacion = Notificacion::findOrfail($request->id);
    	$notificacion->status = 0;

    	if ($notificacion->save()) {
    		return response()->json(['status' => true]);
    	}else{
    		return response()->json(['status' => false]);
    	}
    }
}
