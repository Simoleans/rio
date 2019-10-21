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
});
