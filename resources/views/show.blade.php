@extends('layouts.app')
@section('title', 'Trainers')
@section('content') 
@csrf

           <h5 class="text-center">{{$trainer->name}} {{$trainer->apellido}}</h5>
           <h5 class="text-center">{{$trainer->email}}</h5>
           <div class="text-center">
           <!--<a href="/delete/{{$trainer->id}}" class="btn btn-primary">Delete</a>-->
           <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-success col-md-2 offset">Editar...</a>
           <a href="{{ route('listado.pdf') }}" class="btn btn-sm btn-primary"> Descargar Entrenadores en PDF</a>
        </div>
	
@endsection
    