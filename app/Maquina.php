<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    public $table = 'maquina';

    public $fillable = ['user_id','marca','modelo','tipo','ano_maquina','serie','nombre'];

     public function faena()
    {
        return $this->hasMany('App\Faena','maquina_id');
    }
}
