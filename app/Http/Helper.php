<?php

use Illuminate\Support\Facades\Auth;
use App\Notificacion;

/**
 * Helper para notificacion de asignacion de plagas
 * @return [array] notificaciones
 */
function notifications()
{
	return Notificacion::where('status',1)->get();
}

function storeNotification($module,$ruta)
{
	$notifications = new Notificacion;
	$notifications->modulo = $module;
	$notifications->ruta = $ruta;
	$notifications->save();
}

?>