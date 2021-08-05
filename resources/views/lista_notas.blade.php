<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .cuadro_nota{
        display: inline-block;
        background: pink;
        margin: 30px;
        padding: 20px;
    }
</style>

<body>
    <h2>Notas</h2>
    <div>
        @foreach ($registros as $cuadro)
            <div class="cuadro_nota">
                <h3>{{$cuadro->nombre}}</h3>
                <h4>{{$cuadro->created_at}}</h4>
                <p>{{$cuadro->texto}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>