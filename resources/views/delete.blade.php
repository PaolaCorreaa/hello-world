@extends('layouts.app')
@section('title', 'Trainers index')
@section('content')
@csrf

    <div class="row">
        @foreach($trainers as $trainer)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <div class="card-body">
                <h5 class="card-title">{{trainer->name}}</h5>
                <p class="card-text">some quick example text.</p>
                <a href="/delete/{{$trainer->id}}" class="btn btn-primary">
                    Delete...</a>

            </div>
        </div>
    </div>
</div>