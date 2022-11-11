@extends('layouts.app')
@section('title', 'Trainers create')
@section('content')
@csrf
<!--<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Registro de Usuarios</h2>
            <table class="table table bordered table-striped text-center">



    @csrf 
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="name" class="form-control">
        <label for="">Apellido:</label>
        <input type="text" name="apellido" class="form-control">
        <label for="">Edad:</label>
        <input type="text" name="edad" class="form-control">
        <label for="">Email:</label>
        <input type="text" name="email" class="form-control">
        <label for="">Nacionalidad:</label>
        <input type="text" name="nacionalidad" class="form-control">
        
    </div>
    
    <button type="submit" class="btn btn-success col-md-8 offset-2">Registrar</button>


</table>
</div>
</div>
</div>
</form> -->
{!!   Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true'])   !!}
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection 