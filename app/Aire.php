<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aire extends Model
{
    public $table = 'aire';

    public $fillable = ['arriendo_id',
    					'air_filtro_sec',
						'air_ob_filtro_sec',
						'air_filtro_pri',
						'air_ob_filtro_pri',
						'air_portafiltro',
						'air_ob_portafiltro'];

}
