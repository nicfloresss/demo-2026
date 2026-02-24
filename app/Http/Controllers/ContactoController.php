<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto(){
        return view('contacto');
    }
    public function recibeFormulario(Request $request){
        //respuesta temporal 

        //validar datos

        //insertar base de datos

        //redireccionar a otra pagina 

        return 'Formulario recibido';
    }
}
