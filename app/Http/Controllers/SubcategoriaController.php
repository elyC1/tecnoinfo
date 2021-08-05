<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategoria;

class SubcategoriaController extends Controller
{
    function insertar(request $req){

        $subcategoria =new Subcategoria();
        $subcategoria->nombre=$req->nombre;
        $subcategoria->fkcategoria=$req->fkcategoria;


        $subcategoria->save();
        return redirect()->route("subcategoria.mostrar");
    }

    function mostrar(){
        $registros=Subcategoria::select("subcategoria.id as id_sub", "subcategoria.nombre as nombre_sub", "categoria.nombre as nombre_cat")->join("categoria", "subcategoria.fkcategoria", "=", "categoria.id")->get();
        return view("subcategoria_mostrar", compact("registros"));
    }


    function editar(Subcategoria $id){
        return view("subcategoria_editar", compact ("id"));
    }

    function actualizar(Subcategoria $id, Request $req){
        $id->nombre=$req->nombre;

        
        $id->save();
        return redirect()->route("subcategoria.mostrar");
    }
}
