<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    
   {{--   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
--}}
    
    <form action="recibe-formulario" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required>{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Enviar</button>
</body>
</html>