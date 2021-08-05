<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    function insertar(Request $req){
        $venta= new Venta();
       $venta->fecha=NOW();
       $venta->fkproducto=$req->fkproducto;
       $venta->save();
    }
}
