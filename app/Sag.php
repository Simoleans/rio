<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sag extends Model
{
    public $table = 'sags';

    public $fillable = ['faena_ori_id',
						'faena_dest_id',
						'hora_ori',
						'hora_dest',
						'maquina_id'];

	public function faenaOrigen()
	{
		return $this->belongsTo('App\Faena','faena_ori_id');
	}

	public function faenaDestino()
	{
		return $this->belongsTo('App\Faena','faena_dest_id');
	}
}
