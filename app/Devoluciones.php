<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devoluciones extends Model
{
     public $table = 'devoluciones';

    public function combustible()
	{
		return $this->hasOne('App\Combustible','devolucion_id');
	}

	public function maquina()
	{
		return $this->belongsTo('App\Maquina','maquina_id');
	}

	public function fotos()
	{
		return $this->hasMany('App\Fotos','devolucion_id');
	}

	public function arriendo()
	{
		return $this->belongsTo('App\Arriendo');
	}
}
