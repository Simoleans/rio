<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radiador extends Model
{
	public $table = 'radiador';

    public $fillable = ['arriendo_id',
    					'rad_portafiltro',
						'rad_ob_portafiltro',
						'rad_radiador',
						'rad_ob_radiador',
						'rad_ventilador',
						'rad_ob_ventilador',
						'rad_refrigerante_est',
						'rad_ob_refrigerante_est',
						'rad_refiregerante_niv',
						'rad_ob_refrigerante_niv'];

}
