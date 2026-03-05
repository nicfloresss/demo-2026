<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
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

    $contacto = new \App\Models\Contacto();
   $contacto->nombre = $request->nombre;
    $contacto->email = $request->email;
    $contacto->mensaje = $request->mensaje;
    $contacto->save();

        //redireccionar a otra pagina 

        return redirect()->back();

    }

    public function listaContactos(){
        $contactos = \App\Models\Contacto::all();
        return view('lista-contactos')->with(['contactos' => $contactos]);
    }
}
