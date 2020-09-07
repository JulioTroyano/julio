@extends('layout')

@section('contenido')
    <h3 class="center-align">Todos los mensajes</h3>

    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2 xl8 offset-xl2">
            <table class="striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->nombre }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->mensaje }}</td>
                        <td>
                            <a class="waves-effect waves-light btn teal darken-4" href="{{ route('messages.show', [$message->id]) }}">Ver</a>
                            <a class="waves-effect waves-light btn yellow accent-4" href="{{ route('messages.edit', [$message->id]) }}">Editar</a>
                            <form action="{{ route('messages.destroy', [$message->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn waves-effect waves-light red darken-4" type="submit" name="action">Eliminar
                                    <i class="material-icons right">send</i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
