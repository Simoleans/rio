<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regiones;

class AjaxRequestController extends Controller
{
    public function comunas($region)
    {
    	return Regiones::comunas_ajax($region);
    }
}
