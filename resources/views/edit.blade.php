@extends('layouts.app')
@section('title', 'Trainers edit')
@section('content')
<!-- <form class="form-group" method= "POST" action="{{action('TrainerController@update', $trainer->id)}}" 
    enctype="multipart/form-data">
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Editar Datos</h2>
            <table class="table table bordered table-striped text-center">
   @method('PUT')
   @csrf
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{$trainer->name}}" class="form-control">

        <label for="">Apellido:</label>
        <input type="text" name="apellido" value="{{$trainer->apellido}}" class="form-control">

        <label for="">Edad:</label>
        <input type="text" name="edad" value="{{$trainer->edad}}" class="form-control">

        <label for="">Email:</label>
        <input type="text" name="email" value="{{$trainer->email}}" class="form-control">

        <label for="">Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="{{$trainer->nacionalidad}}" class="form-control">
    </div>
    
    //<button type="submit" class="btn btn-primary">Editar</button>
    <button type="submit" class="btn btn-success col-md-8 offset-2">Editar</button>
    </table>
</div>
</div>
</div>
</form> --->
{!!Form::model($trainer,['route'=>['trainers.update', $trainer],'method'=>'PUT','files'=>true]) !!}
@include('form')
{{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection 