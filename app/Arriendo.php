<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arriendo extends Model
{
    public $table = 'arriendo';

    public $fillable = ['maquina_id','horas'];

	public function combustible()
	{
		return $this->hasOne('App\Combustible');
	}

	public function hidraulico()
	{
		return $this->hasOne('App\Hidraulico');
	}

	public function aire()
	{
		return $this->hasOne('App\Aire');
	}

	public function motor()
	{
		return $this->hasOne('App\Motor');
	}

	public function radiador()
	{
		return $this->hasOne('App\Radiador');
	}

	public function otros()
	{
		return $this->hasOne('App\Otros');
	}


	public function fotos()
	{
		return $this->hasMany('App\Fotos','arriendo_id');
	}

	public function maquina()
	{
		return $this->belongsTo('App\Maquina','maquina_id');
	}
}
