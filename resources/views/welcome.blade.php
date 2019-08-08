<!-- Primera vista de la pagina, tanto como administrador como 
usuario pueden visualizarla -->
@extends('layouts.layout')
@section('title','welcome')
@section('content')
    <header>
        <h1>Event Bokking Platform</h1>

         <a href="{{ route('login') }}">Login</a>
    </header>
@endsection

