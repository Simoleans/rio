<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{

public $fillable = ['nro_talonario','talonario_id','user_id',
					'faena_id',
		            'fruta_id',
		            'variedades_id',
		            'fecha',
		            'bandeja_id',
		            'cantidad_bandeja',
		            'kg',
		            'cantidad_combustible',
		            'hectareas',
		            'observacion'];

 


public function faena()
{
	return $this->belongsTo('App\Faena','faena_id');
}

public function frutas()
{
	return $this->belongsTo('App\Frutas','fruta_id');
}

public function talonario()
{
	return $this->belongsTo('App\Talonarios','talonario_id')->where('status',1);
}

public function variedad()
{
	return $this->belongsTo('App\Variedades','variedades_id');
}

public function bandeja()
{
	return $this->belongsTo('App\Bandeja','bandeja_id');
}

public function user()
{
	return $this->belongsTo('App\User','user_id');
}

public static function excelSearch($desde,$hasta)
{
	return Reporte::whereBetween('fecha', [$desde, $hasta])->get();
}

}
