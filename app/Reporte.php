<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
		public $fillable = ['faena_id',
			            'fruta_id',
			            'variedades_id',
			            'fecha',
			            'bandeja_id',
			            'cantidad_bandeja',
			            'kg',
			            'cantidad_combustible',
			            'hectareas',
			            'observacion'];

}
