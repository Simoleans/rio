<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandeja extends Model
{
    public $table = 'bandejas';

    public $fillable = ['nombre'];
}
