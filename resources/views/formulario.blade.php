<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('persona.insertar')}}" method="post">
        @csrf
    <label for="">Nombre:</label>
    <input type="text" name="nombre"><br>
    <label for="">Apellido:</label>
    <input type="text" name="apellido"><br>
    <label for="">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nac"><br>

    <input type="submit" value="Guardar">
    </form>
</body>
</html>