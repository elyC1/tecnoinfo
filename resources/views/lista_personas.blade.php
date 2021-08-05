<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Personas Registradas:</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Opción</th>
        </tr>
        @foreach ($registros as $fila)
        <tr>
            <td>{{$fila->nombre}}</td>
            <td>{{$fila->apellido}}</td>
            <td>{{$fila->fecha_nac}}</td>
            <td>
                <a href="{{route('persona.editar', $fila->id)}}">Editar</a>
            
                <form action="{{route('persona.eliminar', $fila->id)}}" method="put">
                @csrf
                @method("delete")
                <input type="submit" value="Eliminar">
                </form>
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>