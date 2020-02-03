<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
     public $fillable = ['rut','r_social','localidad','region_id','comuna_id','direccion','correo'];
}
