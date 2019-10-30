<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variedades extends Model
{
    protected $table = 'variedades';

    public $fillable = ['fruta_id','nombre_variedad'];

    public function fruta()
    {
        return $this->hasOne('App\Frutas','id');
    }
}
