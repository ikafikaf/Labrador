@extends('layouts.app')

@section('content') 
    <div class="jumbotron text-center">
        <h1>Welcome to Labrador</h1>
        <p> Welcome to Labrador Website </p>
        <p> <img src="{{asset('img/labrador.jpg')}}" alt="anjing labrador" width="500" height="300" /> </p>

        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    <div>
    
    </div>
@endsection
