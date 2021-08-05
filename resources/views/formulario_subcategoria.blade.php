<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria - Formulario</title>
</head>
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background: #6875F5;
  font-family: 'Open Sans', sans-serif;
}

.login {
  width: 400px;
  margin: 20px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 300px;
  margin-right: auto;
  margin-left: auto;
  border: 10px solid transparent;
  border-bottom-color: #6875F5;
}

.login-header {
  background: #6875F5;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: black;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="submit"] {
  background: #6875F5;
  border-color: transparent;
  color: black;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
</style>


<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Formulario Subcategoria') }}
        </h2>
    </x-slot><br><br>
    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">REGISTRA NUEVA SUBCATEGORIA</h2>
  <form class="login-container" action="{{route('subcategoria.insertar')}}" method="post">
        @csrf
    <p><input type="text" name="nombre" placeholder="Nombre de la Subcategoria"></p>
    <select name="fkcategoria" id="">
    @foreach ($registros as $sub)
            <option value="{{$sub->id}}">{{$sub->nombre}}</option>
        @endforeach
    </select>
    <p><input type="submit" value="ACEPTAR"></p>
  </form>
</div>
  </div>
</x-app-layout>
</body>
</html>