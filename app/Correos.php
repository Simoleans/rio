<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    protected $table = "correos";

     public $fillable = ['nombre','direccion','correo1','correo2','correo3','correo4','region_id','jefatura','telefono'];

  	public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }

    public function comunas()
    {
    	return $this->hasMany('App\CorreosPersonas','correos_id');
    }
}
