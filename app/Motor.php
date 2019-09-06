<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    public $table = 'motor';

    public $fillable = [  'motor_fugas',
						  'motor_ob_fugas',
						  'motor_n_aceite',
						  'motor_ob_naceite',
						  'motor_e_aceite',
						  'motor_ob_eaceite',
						  'varilla_medir',
						  'motor_ob_varilla',
						  'motor_jcamaras',
						  'motor_ob_jcamaras',
						  'motor_jculata',
						  'motor_ob_jculata',
						  'motor_rciguenal',
						  'motor_ob_rciguenal',
						  'motor_tvalvulas',
						  'motor_ob_tvalvulas',
						  'motor_filtro',
						  'motor_ob_filtro',
						  'motor_filtro_primario',
						  'motor_ob_filtro_primario',]
}
