<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Mensaje de Contacto</h1>
    <p>Nombre: {{$details['nombre']}}</p>
    <p>Apellido: {{$details['apellido']}}</p>
    <p>Correo: {{$details['email']}}</p>
    <p>Numero: {{$details['numero']}}</p>
    <p>Mensaje: {{$details['msg']}}</p>
</body>
</html>
