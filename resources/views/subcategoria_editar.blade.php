<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>

<style>
.bott:link, .bott:visited {
  background-color: #6875F5;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 0%;
}

.bott:hover, .bott:active {
  background-color: #7D89F8;
}
form {
  margin: 10px auto;
  width: 1400px;
}

.botonera {
  display: flex;
  justify-content: space-between;

  width: 15%;
}

/* Apariencia de los botones */ 
.boton {
  padding: 10px;
  border: 0;
  background: #6875F5;
  font-size: 1.2em;
  color: #FFF;
}

.boton-atras {
  text-decoration: none;
}
</style>
<body>
<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('EDITAR SUBCATEGORIAS') }}
        </h2>
    </x-slot><br><br>
    <form action="{{route('subcategoria.actualizar', $id)}}" method="put">
    @csrf
    @method("put")
    <label for="">Nombre:</label>
    <input type="text" name="nombre" value="{{$id->nombre}}"><br><br>

        <!-- Contenedor al que se le aplica flexbox -->
  <div class="botonera">
      <!-- Botón para ir atrás -->
      <a href="../subcategoria/lista" id="atras" class="boton boton-atras">Atrás</a>
      <!-- Botón para confirmar -->
      <input type="submit" value="Confirmar" name="confirmar" id="confirmar" class="boton">
  
    </div> <!-- Fin del contenedor -->
    </form>    
  
  
</x-app-layout>
</body>
</html>