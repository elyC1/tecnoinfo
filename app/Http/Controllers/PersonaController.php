<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    function insertar(request $req){

        $persona =new Persona();

        $persona->nombre=$req->nombre;
        $persona->apellido=$req->apellido;
        $persona->fecha_nac=$req->fecha_nac;

        $persona->save();
        return redirect()->route("persona.mostrar");
    }

    function mostrarfk(){
        $registros=Persona::all();
        return view("formulario_nota", compact("registros"));
    }

    function mostrar(){
        $registros=Persona::all();
        return view("lista_personas", compact("registros"));
}

    function editar(Persona $id){
        return view("editar_persona", compact ("id"));
    }

    function actualizar(Persona $id, Request $req){
        $id->nombre=$req->nombre;
        $id->apellido=$req->apellido;
        $id->fecha_nac=$req->fecha_nac;
        
        $id->save();
        return redirect()->route("persona.mostrar");
    }

    function eliminar(Persona $id){
        $id->delete();
        return redirect()->route("persona.mostrar");
    }
}