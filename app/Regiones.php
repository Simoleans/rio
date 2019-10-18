<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    protected $table = "regiones";


    public function comunas()
    {
      return $this->hasMany('App\Comunas','region_id');
    }
}
