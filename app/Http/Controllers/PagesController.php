<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function home()
    {

        return view('home');

    }

    public function saludos($nombre = "Invitado")
    {
        $apellido = "<script> alert('Hola te estoy hackeando')</script>";
        $mensajes = [
            "Hola como estas",
            "Juan como estas",
            "Pedro y Jose se fueron a jugar"
        ];
        return view('saludos', ['nombre' => $nombre, 'apellido' => $apellido, 'mensajes' => $mensajes]);
    }
}


