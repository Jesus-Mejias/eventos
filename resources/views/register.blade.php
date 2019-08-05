<!-- Vista para el usuario que no se encuentra registrado 
y desea registrarse-->
@extends('layouts.layout')
@section('title','Login')
@section('content')



<div class="body">
    <form method="POST" action="todo">
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name">
        </div>

        <div>
            <label for="lastName">Last Name</label>
            <input id="lastName" type="text" name="lastName">
        </div>

        <div>
            <label for="username">Username</label>
            <input id="username" type="text" name="username">
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="text" name="email">
        </div>

        <div>
            <label for="photo">Photo</label>
            <input id="photo" type="fail" name="photo">
        </div>

        <div>
            <label for="linkedin">Linkedin URL</label>
            <input id="linkedin" type="text" name="linkedin">
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password">
        </div>

        <div>
            <button type="submit" id="login">
                Login
            </button>
           
        </div>
       
    </form>
</div>
@endsection

