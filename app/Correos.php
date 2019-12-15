<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    protected $table = "correos";

     public $fillable = ['nombre','direccion','correo','region_id','jefatura','telefono'];

  	public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }
}
