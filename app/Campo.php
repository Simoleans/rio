<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    public $table = 'campo';

    public $fillable = ['user_id','productores_id','nombre_campo','csg','region','comuna','direccion','contacto_responsable','correo','telefono'];

    public function productor()
    {
    	return $this->belongsTo('App\Productores','productores_id');
    }
}