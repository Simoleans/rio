<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    public $table = 'notificacions';
    
    protected $casts = [
      'status' => 'boolean',
    ];
}
