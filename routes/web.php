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

Route::get('/1er/{num}/2do/{num2}',
function($num,$num2){
$resultado= $num+$num2;
    return 'la suma es '.$resultado;
});

Route::get('/name/{name}',function($name){
    return 'hola soy '.$name;
});

Route::get('/name/{name}/lastname/{apellido}',
function($name,$apellido){
    return 'hola soy '.$name.''.$apellido;
});

Route::get('/mi_primer_ruta', function(){
    return 'hola Paola';
});

Route::get('/login', function(){
    return view('login');
});

Route::get('rutaprueba', 'PruebaController@prueba2');
Route::get('catalog', 'PruebaController@catalogController');
Route::get('catalog/show/{id}', 'PruebaController@catalogController2', function($id){
});

Route::get('catalog/create', 'PruebaController@catalogCreate');

Route::get('catalog/edit/{id}', 'PruebaController@catalogController3', function($id){
});
#Route::get('catalog/show/{id}',function($id){
#   return 'hola '.$id;
#});

Route::resource('trainers' , 'TrainerController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('trainers','TrainerController');
Route::get('delete/{id}','TrainerController@destroy');
Route::get('descargar-entrenadores', 'TrainerController@pdf')->name('listado.pdf');