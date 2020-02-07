<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
     public $fillable = ['maquina_id','rut','r_social','localidad','region_id','comuna_id','direccion','correo','IDPNlb'];

    public function comuna()
    {
    	return $this->belongsTo('App\Comunas','comuna_id');
    }

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }

    public function maquina()
    {
    	return $this->belongsTo('App\Maquina','maquina_id');
    }
}
