@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is a laravel test app</p>
        <p><a class="btn btn-primary bt lg" href="/login" role="button">Login</a></p>        
        <p><a class="btn btn-success bt lg" href="/register" role="button">Register</a></p>        
    </div>
@endsection

