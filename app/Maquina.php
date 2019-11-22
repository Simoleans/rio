<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    public $table = 'maquina';

    public $fillable = ['user_id','marca','modelo','tipo','ano_maquina','serie','nombre'];

     public function faenas() // origen
    {
        return $this->hasMany('App\Faena','maquina_id')->where('status',1);
    }

    public function faenasDestino() // origen
    {
        return $this->hasMany('App\Faena','maquina_id')->where('status',0);
    }

     public function faena()
    {
        return $this->hasOne('App\Faena','maquina_id');
    }

    static public function MaquinaActive()
    {
        return static::where('status_maquina','1')->get();
    }
}
