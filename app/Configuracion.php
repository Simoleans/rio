<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
  public $table = 'configuracion';

  public $fillable = [
  'user_id',
  'email_sistema',
  'rut',
  'razonsocial',
  'sag',
  'direccion',
  'telefono',
  'email_empresa',
  'rlegal',
  'rutrlegal',
  'tlfrlegal',
  ];
}
