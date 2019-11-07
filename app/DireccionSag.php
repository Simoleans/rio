<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionSag extends Model
{
    public $fillable = ['user_id','region_id','comuna_id','oficina','direccion','telefono','email','jefatura'];

    public function comuna()
    {
    	return $this->belongsTo('App\Comunas','comuna_id');
    }

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }
}
