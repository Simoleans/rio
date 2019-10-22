<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arriendo extends Model
{
    public $table = 'arriendo';

    public $fillable = [  'marca',
						  'modelo',
						  'ano',
						  'series',
						  'horas',
						  'hombre',
						  'rut',
						  'r_social',
						  'direccion',
						  'comuna_id',
						  'region_id',];

	public function combustible()
	{
		return $this->hasOne('App\Combustible');
	}

	public function fotos()
	{
		return $this->hasMany('App\Fotos','arriendo_id');
	}
}
