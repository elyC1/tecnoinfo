<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('persona.actualizar', $id)}}" method="put">
    @csrf
    @method("put")
    <label for="">Nombre:</label>
    <input type="text" name="nombre" value="{{$id->nombre}}"><br>
    <label for="">Apellido:</label>
    <input type="text" name="apellido" value="{{$id->apellido}}"><br>
    <label for="">Fecha de Nacimiento:</label>
    <input type="text" name="fecha_nac" value="{{$id->fecha_nac}}"><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>