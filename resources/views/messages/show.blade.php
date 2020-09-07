@extends('layout')
@section('contenido')
    <h1>Mostrando datos</h1>
    <p>ID: {{ $message->id }}</p>
    <p>nombre: {{ $message->nombre }}</p>
    <p>email: {{ $message->email }}</p>
    <p>mensaje: {{ $message->mensaje }}</p>
@endsection
