<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    function insertar(request $req){

        $categoria =new Categoria();
        $categoria->nombre=$req->nombre;


        $categoria->save();
        return redirect()->route("categoria.mostrar");
    }

    function mostrar(){
        $registros=Categoria::all();
        return view("categoria_mostrar", compact("registros"));
    }
    

    function editar(Categoria $id){
        return view("categoria_editar", compact ("id"));
    }

    function actualizar(Categoria $id, Request $req){
        $id->nombre=$req->nombre;

        
        $id->save();
        return redirect()->route("categoria.mostrar");
    }

    function mostrarfk(){
        $registros=Categoria::all();
        return view("formulario_subcategoria", compact("registros"));
    }
    
}
