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

            </div>
            </div>
        </div>
</div>