@extends('layout')

@section('contenido')
    <h1>Login</h1>
    <form action="/Login" method="POST">
        @csrf

        <input type="email" name="email" placeholder="Correo:">
        <input type="password" name="password" placeholder="Contraseña:">
        <input type="submit" value="Iniciar">

    </form>
@endsection
