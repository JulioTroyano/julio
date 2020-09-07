<?php

namespace App\Http\Controllers;

use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $messages = DB::table('messages')
            ->select('messages.*')
            ->get();*/
        $messages = Message::all(); // devo devolver todos los mensajes aqui primero se hace
        return view('messages.index', ['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar en la base de datos
        /*
        DB::table('messages')->insert([
            'nombre'=>$request->input('nombre'),
            'email'=>$request->input('email'),
            'mensaje'=>$request->input('mensaje'),
            'created_at'=>Carbon::now('America/La_Paz'),
            'updated_at'=>Carbon::now('America/La_Paz')
        ]);*/
        $message = new Message(); // se fue metiendo uno por uno en si para el siguiente caso
        $message->nombre = $request->input('nombre');
        $message->email= $request->input('email');
        $message->mensaje= $request->input('mensaje');
        $message->save();
        //redireccionar
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $message = DB::table('messages')
            ->where('id','=', $id)
            ->select('messages.*')
            ->first();*/
        $message = Message::find($id);

        return view('messages.show', ['message'=>$message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        $message = DB::table('messages')
            ->where('id', '=', $id)
            ->select('messages.*')
            ->first();*/
        $message = Message::find($id);
        return view('messages.edit', ['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        DB::table('messages')
            ->where('id', '=', $id)
            ->update([
                'nombre'=>$request->input('nombre'),
                'email'=>$request->input('email'),
                'mensaje'=>$request->input('mensaje'),
                'updated_at'=>Carbon::now('America/La_Paz')
            ]);*/
        $message = Message::find($id);
        $message->nombre = $request->input('nombre');
        $message->email = $request->input('email');
        $message->mensaje = $request->input('mensaje');
        $message->save();
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        DB::table('messages')
            ->where('id', '=', $id)
            ->delete();*/
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('messages.index');
    }
}
