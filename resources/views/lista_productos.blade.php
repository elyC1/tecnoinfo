<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Productos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
        </tr>
        @foreach ($productos as $fila)
        <tr>
            <td>{{$fila->nombre}}</td>
            <td>{{$fila->precio}}</td>
            <td>{{$fila->descripcion}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>