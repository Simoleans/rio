<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table = 'transportista';

    public $fillable = ['user_id','nombre','r_social','telefono'];
}
