<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('producto.insertar')}}" method="post">
    @csrf
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Precio:</label>
        <input type="text" name="precio">
        <label for="">Descripción:</label>
        <input type="text" name="descripcion">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>