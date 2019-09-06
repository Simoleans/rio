<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    public $table = 'combustible';

    public $fillable = [  "combustible_tanque",
						  "combustible_ob_tanque",
						  "combustible_medidor_nivel",
						  "combustible_ob_medidor_nivel",
						  "combustible_tapon",
						  "combustible_ob_tapon",
						  "combustible_fugas",
						  "combustible_ob_fugas",
						  "combustible_cebador",
						  "combustible_ob_cebador",
						  "combustible_filtro_primario",
						  "combustible_ob_filtro_primario",
						  "combustible_filtro_secundario",
						  "combustible_ob_filtro_secundario",
						];
}
