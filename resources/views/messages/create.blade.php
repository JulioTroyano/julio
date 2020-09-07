@extends('layout')

@section('contenido')
    <h1>Formulario de Creacion</h1>

    @if( session()->has('info'))

        <h1>{{ session('info') }}</h1>
    @else
    <form action="{{route('messages.store')}}" method="POST">
        @csrf

        <p>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                <span class="error" > {{ $message }} </span>
                @enderror
            </label>
        </p>

        <p>
            <label for="email">Email:
                <input type="text" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="error"> {{ $message }} </span>
                @enderror

            </label>
        </p>

        <p>
            <label for="mensaje">Mensaje:
                <textarea name="mensaje">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                <span class="error"> {{ $message }} </span>
                @enderror
            </label>
        </p>

        <input type="submit" value="Enviar">
    </form>
@endif
@endsection
