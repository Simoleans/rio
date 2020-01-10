<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frutas extends Model
{
    protected $table = 'frutas';

    public $fillable = ['user_id','nombre_fruta'];

    public function variedades()
    {
    	return $this->hasMany('App\Variedades','fruta_id');
    }
}
