<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba2(){
        return 'Estoy dentro de prueba controller :D'; 
    }

    public function catalogController(){
        return 'Estoy dentro de catalog controller XD'; 
    }

    public function catalogController2(){
        return 'Estoy dentro de catalog controller 2 :c'; 
    }

    public function catalogCreate(){
        return 'Hola, Estás en catalog create'; 
    }

    public function catalogController3(){
        return 'Hola, Estás en catalog create 3 :3'; 
    }

    
}