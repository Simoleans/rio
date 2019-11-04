<?php
//Inicializar
use App\Configuracion;
use Illuminate\Support\Facades\Auth;

//GET data de configuracion
function configuracion($attr) { 
	return Configuracion::value($attr);
	
}

?>