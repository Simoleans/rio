<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hidraulico extends Model
{
    public $table = 'hidraulico';

    public $fillable = [  'hidraulico_bombas',
						  'hidraulico_ob_bombas',
						  'hidraulico_tanque',
						  'hidraulico_ob_tanque',
						  'hidraulico_nivel',
						  'hidraulico_ob_nivel',
						  'hidraulico_tapon',
						  'hidraulico_ob_tapon',
						  'hidraulico_visor',
						  'hidraulico_ob_visor',
						  'hidraulico_filtro_primario',
						  'hidraulico_ob_filtro_primario',
						  'hidraulico_filtro_secundario',
						  'hidraulico_ob_filtro_secundario',
						  'hidraulico_cilindros_fuga',
						  'hidraulico_ob_cilindros_fuga',
						  'hidraulico_cilindros_sellos',];
}
