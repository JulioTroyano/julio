<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/test', function () {
    $user = new \App\User();
    $user->name = 'Julio';
    $user->email = 'julioag3@gmail.com';
    $user->password =bcrypt('123456');
    $user->save();

    return $user;
});
*/
/*
Route::get('/test', function () {
    return \App\Persona::with('alquileres')->get();
});
Route::get('/test/alquiler', function () {
    return \App\Alquiler::with('usuario')->get();
});

Route::get('/', function () {
    return view('welcome');
});
*/




Route::get('/', 'PagesController@home')->name('home');

Route::get('saludos/{nombre?}','PagesController@saludos')->name('saludos')->where('nombre', "[A-Za-z]+");

Route::resource('messages', 'MessagesController');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout'); // cerrar cesion solo para que este el que esta logeado
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
