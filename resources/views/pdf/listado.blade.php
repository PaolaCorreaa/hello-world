@extends('layouts.pdfinicio')
@section('content')
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Nacionalidad</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->apellido }}</td>
            <td>{{ $trainer->edad }}</td>
            <td>{{ $trainer->email }}</td>
            <td>{{ $trainer->nacionalidad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection