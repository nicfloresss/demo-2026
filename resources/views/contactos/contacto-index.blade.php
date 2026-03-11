<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>   
</head>
<body>
   <h1>Lista de Contactos</h1>
    <p>
        <a href="{{ route('contactos.create') }}">Enviar nuevo mensaje de contacto</a>
    </p>
    <ul>
        @foreach ($contactos as $contacto)
            <li>
                {{ $contacto->nombre }} - {{ $contacto->correo }}
                <a href="{{ route('contactos.show', $contacto) }}">{{ $contacto->nombre }}</a> - {{ $contacto->correo }}
            </li>
        @endforeach
    </ul>
    </body>
</html>