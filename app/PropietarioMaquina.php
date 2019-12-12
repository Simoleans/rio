<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropietarioMaquina extends Model
{
    public $table = 'propietario_maquinas';

  	public $fillable = ['maquina_id'];

  	public function maquina()
  	{
  		return $this->belongsTo('App\Maquina');
  	}

  	 public function comuna()
    {
    	return $this->belongsTo('App\Comunas','comuna_id');
    }

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }
}
