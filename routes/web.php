<?php
use Symfony\Component\Routing\Route;
use App\Http\Controllers\DependenciasController;

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
    return view('welcome');
});
//Grupo de Registros
Route::get('/comisiones', ['as' => 'comisiones', 'uses' => 'RegistrosController@comisiones']);
Route::get('/permisos', ['as' => 'permisos', 'uses' => 'RegistrosController@permisos']);
Route::get('/salidas', ['as' => 'salidas', 'uses' => 'RegistrosController@salidas']);

//Grupo de Dependencias
Route::get('/dependencias', ['as' => 'dependencias', 'uses' => 'DependenciasController@dependencias']);
Route::get('/dependencias/menores/{id}', ['as' => 'menores', 'uses' => 'DependenciasController@menores']);
Route::get('/dependencias/create_direcciones', 'DependenciasController@create_direcciones');

//Grupo de Usuarios

