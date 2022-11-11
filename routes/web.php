<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mi_primer_ruta', function () {
    return 'hola Martha';
});

Route::get('/name/{name}',function($name){
    return 'hola soy '.$name;
});

Route::get('/name/{name}/lastname/{apellido}',
function($name,$apellido){
    return 'hola soy '.$name.' '.$apellido;
});

Route::get('/name/{name}/lastname/{apellido?}',
function($name,$apellido='apellido'){
    return 'hola soy '.$name.' '.$apellido;
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/1er/{num}/2do/{num2}',
function($num,$num2){
$resultado= $num+$num2;
    return 'la suma es '.$resultado;
});

Route::get('/Loginusuario ', function () {
    return 'Login usuario';
});

Route::get('/lagout', function () {
    return 'Lagout usuario';
});

Route::get('/catalog', function () {
    return 'Listado peliculas';
});

Route::get('/catalog/show/{id}', function () {
    return 'vista detalle pelicula{id}';
});

Route::get('/catalog/create', function () {
    return 'Anadir pelicula';
});

Route::get('/catalog/edit/{id}', function () {
    return 'Modificar pelicula{id}';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('trainers','TrainerController');

Route::get('delete/{id}','TrainerController@destroy');

Route::get('descargar-entrenadores','TrainerController@pdf')->name('listado.pdf');
