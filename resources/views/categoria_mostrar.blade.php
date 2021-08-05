<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBCATEGORIAS</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css">
<style>
.bott:link, .bott:visited {
  background-color: #6875F5;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.bott:hover, .bott:active {
  background-color: #7D89F8;
}
</style>
<body>
<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('LISTA DE CATEGORIAS') }}
        </h2>
    </x-slot><br><br>
  <form>

  
    

  @foreach ($registros as $registro)
        <tr>
        <div class="row">
    <div class="large-12 columns">
        <label for="">Categoria:</label>
        <input type="text" placeholder="{{$registro->nombre}}" readonly/>
        <a class="bott"href="{{route('categoria.editar', $registro->id)}}">Editar</a><br><br>
      </label>
    </div>
  </div>
        </tr>
</form>
@endforeach
</x-app-layout>
</body>
</html>

