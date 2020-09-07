<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('Titulo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper purple darken-4">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                @if( auth()->guest() )
                    <li>
                        <a href="/login">Iniciar sesion</a>
                    </li>
                @endif
                @if( auth()->check() )
                    <li><a href="{{ route('saludos', ['Julio']) }}">saludo</a></li>
                    <li><a href="{{ route('messages.create') }}">enviar un mensaje</a></li>
                    <li><a href="/logout">Cerrar sesion de {{ auth()->user()->name }}</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>

@yield('contenido')

<script src="{{asset('materialize/js/materialize.js')}}"></script>
</body>
</html>
