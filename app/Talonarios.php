<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talonarios extends Model
{
     protected $table = 'talonarios';

    public $fillable = ['user_id','nombre','inicio','fin'];
}
