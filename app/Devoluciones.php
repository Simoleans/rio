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

	public function hidraulico()
	{
		return $this->hasOne('App\Hidraulico','devolucion_id');
	}

	public function aire()
	{
		return $this->hasOne('App\Aire','devolucion_id');
	}

	public function motor()
	{
		return $this->hasOne('App\Motor','devolucion_id');
	}

	public function radiador()
	{
		return $this->hasOne('App\Radiador','devolucion_id');
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
