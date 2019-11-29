<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
})->name('autoload');
Route::get('/registrar', function () {
    return view('register');
})->name('registrar.public');

Route::post('auth', 'LoginController@login')->name('auth');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::resource('/user', 'UserController');

Route::group(['middleware' => 'auth'], function () {
    //middleware auth
    Route::get('/dashboard', 'LoginController@index')->name('dashboard');

    Route::resource('/arriendo','ArriendoController');
    Route::resource('/maquina','MaquinaController');
    Route::resource('/productores','ProductoresController');
    Route::resource('/campo','CampoController');
    Route::resource('/faena','FaenaController');
    Route::resource('/configuracion','ConfiguracionController');
    Route::resource('/transportista','TransportistaController');
    Route::resource('/talonarios','TalonariosController');
    Route::resource('/frutas','FrutasController');
    Route::resource('/variedades','VariedadesController');
    Route::resource('/bandejas','BandejaController');
    Route::resource('/pot','PotController');
    Route::resource('/dirsag','DireccionSagController');
    Route::resource('/sags','SagController');
    Route::resource('/correos','CorreosController');

    //ajax request
    Route::get('comunas/{id}','AjaxRequestController@comunas')->name('comunas');
    Route::post('frutasApi','AjaxRequestController@storeFrutas')->name('storeFrutas.ajax');
    Route::post('/sagMaquina','AjaxRequestController@searchFaena')->name('searchFaena.search');
    Route::post('/storeFaena','AjaxRequestController@storeFaena')->name('storeFaena.store');
    Route::post('/fechaSug','AjaxRequestController@fecha_sugerida')->name('fechaS.store');
    Route::put('/statusFaena/{id}','AjaxRequestController@status_faena')->name('faena.status');

    //reportes PDF
    Route::get('/reportPOT','ReportesController@pot')->name('reporte.pot');
    Route::get('/reportSAG/{id}','ReportesController@sag')->name('reporte.sag');

    //Sag email
    Route::get('sag/mail/{id}','SagController@sendMail')->name('sag.mail');
});
