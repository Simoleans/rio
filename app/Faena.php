<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faena extends Model
{
	public $table = 'faena';
    public  $fillable= ['productores_id','maquina_id','campo_id','desde','hasta','minimo_kg','tipo_moneda','tarifa_1','tarifa_2','flete','petroleo','status'];
}
