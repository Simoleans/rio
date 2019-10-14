<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productores extends Model
{
     public $table = 'productores';

    public $fillable = ['user_id','rut','r_social','localidad','region','comuna','direccion','contacto_responsable','correo','telefono'];
}
