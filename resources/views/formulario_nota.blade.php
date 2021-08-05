<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('nota.insertar')}}" method="post">
    @csrf
    <label for="">Texto:</label><br>
    <textarea name="texto" id="" cols="30" rows="10"></textarea><br>
    <label for="">Persona:</label>
    <select name="fkpersona" id="">
    @foreach ($registros as $registro)
            <option value="{{$registro->id}}">{{$registro->nombre}}</option>
        @endforeach
    </select>
    <input type="submit" value="Guardar">
    </form>
</body>
</html>