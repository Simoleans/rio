<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorreosPersonas extends Model
{
    protected $table = 'correos_personas';

    public $fillable = ['correos_id','comuna_id','region_id'];

    public function region()
    {
    	return $this->belongsTo('App\Regiones','region_id');
    }

    public function persona()
    {
    	return $this->belongsTo('App\Correos','correos_id');
    }
}
