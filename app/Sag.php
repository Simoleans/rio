<?php

namespace App;
use App\CorreosPersonas;
use Illuminate\Database\Eloquent\Model;

class Sag extends Model
{
    public $table = 'sags';

    public $fillable = ['faena_ori_id',
						'faena_dest_id',
						'hora_ori',
						'hora_dest',
						'maquina_id',
						'estacionamiento_id'];

	public function faenaOrigen()
	{
		return $this->belongsTo('App\Faena','faena_ori_id');
	}

	public function faenaDestino()
	{
		return $this->belongsTo('App\Faena','faena_dest_id');
	}

	public static function CorreosSag($id_comuna)
	{
		$correos = CorreosPersonas::where('comunas_id',$id_comuna)->get();

		return $correos;
	}

	public function maquina()
	{
		return $this->belongsTo('App\Maquina','maquina_id');
	}

	public function estacionamiento()
	{
		return $this->belongsTo('App\Estacionamiento','estacionamiento_id');
	}
}
