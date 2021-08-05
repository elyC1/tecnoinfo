<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    function insertar(Request $req){
        $producto= new Producto();
       $producto->nombre=$req->nombre;
       $producto->precio=$req->precio;
       $producto->descripcion=$req->descripcion;

       $producto->save();
    }
    function mostrar(){
        $productos=Producto::all();
        return view("lista_productos", compact("productos"));
    }
    function mostrar2(){
        $productos=Producto::all();
        return view("formulario_venta", compact("productos"));
    }
}
