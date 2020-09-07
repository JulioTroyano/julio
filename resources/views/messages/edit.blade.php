@extends('layout')
@section('contenido')
    <h1>Formulario de edición</h1>

    <form action="{{route('messages.update', [$message->id])}}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" value="{{ $message->nombre }}">
                @error('nombre')
                <span class="error"> {{ $message }} </span>
                @enderror
            </label>
        </p>

        <p>
            <label for="email">Email:
                <input type="text" name="email" value="{{ $message->email }}">
                @error('email')
                <span class="error"> {{ $message }} </span>
                @enderror
            </label>
        </p>
        <p>
            <label for="mensaje">Mensaje:
                <textarea name="mensaje"> {{ $message->mensaje }} </textarea>
                @error('mensaje')
                <span class="error"> {{ $message }} </span>
                @enderror
            </label>
        </p>

        <input type="submit" value="Editar">
    </form>
@endsection
