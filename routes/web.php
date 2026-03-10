<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hola-mundo', function(){
    return view('hola');
});

Route::resource ('contactos', App\Http\Controllers\ContactoController::class);

