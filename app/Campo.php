<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    public $table = 'campo';

    public $fillable = ['user_id','productores_id','nombre_campo','csg','region_id','comuna_id','direccion','contacto_responsable','correo','telefono'];

    public function productor()
    {
    	return $this->belongsTo('App\Productores','productores_id');
    }

    public function comuna()
    {
    	return $this->belongsTo('App\Comunas','comuna_id');
    }

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }
}
