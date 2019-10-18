<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faena extends Model
{
	public $table = 'faena';
    public  $fillable= ['productores_id','maquina_id','campo_id','desde','hasta','minimo_kg','tipo_moneda','tarifa_1','tarifa_2','flete','petroleo','status'];

    public function productor()
    {
    	return $this->belongsTo('App\Productores','productores_id');
    }

    public function campo()
    {
    	return $this->belongsTo('App\Campo','campo_id');
    }

    public function maquina()
    {
    	return $this->belongsTo('App\Maquina','maquina_id');
    }

     public function maquinas()
    {
        return $this->hasMany('App\Maquina','maquina_id');
    }
}
