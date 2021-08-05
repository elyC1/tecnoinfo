<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    function insertar(Request $req){
        $nota= new Nota();

        $nota->texto=$req->texto;
        $nota->fkpersona=$req->fkpersona;
        $nota->save();

        //return view("formulario");
        return redirect()->route("nota.mostrar");
    }

        function mostrar(){
        $registros=Nota::join("persona", "nota.fkpersona", "=", "persona.id")->get();
        return view("lista_notas", compact("registros"));
}
}