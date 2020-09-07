@extends('layout')
@section('Titulo')
    Saludos
@endsection
@section('contenido')
    h1>Saludos <?php echo $nombre ?> </h1>
    <h1>Saludos {{ $nombre  }} </h1>
    <h1>Saludos {{ $apellido }} </h1>
    <h1>Saludos {!! $apellido  !!} </h1>


    <ul>
        @forelse($mensajes as $mensaje)
            <li>{{ $mensaje   }}</li>
        @empty
            <p>No tiene ningun mensaje</p>
        @endforelse
    </ul>

    @if(count($mensajes) === 0)
        <h1>No tienes mensajes</h1>
    @else
        <h1>Si tienes mensajes</h1>
    @endif

@endsection
