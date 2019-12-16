<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productores extends Model
{
     public $table = 'productores';

    public $fillable = ['user_id','rut','r_social','localidad','region_id','comuna_id','direccion','contacto_responsable','correo','telefono'];

    public function comuna()
    {
    	return $this->belongsTo('App\Comunas','comuna_id');
    }

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }

    public function campos()
    {
        return $this->hasMany('App\Campo');
    }

    public function faenas()
    {
        return $this->hasMany('App\Faena');
    }
}
