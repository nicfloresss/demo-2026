<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto(){
        return view('contacto');
    }
    public function recibeFormulario(Request $request){
            
    //validar datos

    $request->validate([
        'nombre' => 'required|min:5',
        'email' => 'required|email',
        'mensaje' => 'required|min:10'
    ]);



        //insertar base de datos
        

        //redireccionar a otra pagina 

        return 'Formulario recibido';
    }
}
