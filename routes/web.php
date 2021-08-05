<?php
use Illuminate\Fundation\Application;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("persona", function(){
    return view("formulario");
});



Route::get("agregar_cat", function(){
    return view("formulario_categoria");
})->name("agregar");



Route::get("nota", [PersonaController::class, "mostrarfk"]);
Route::get("agregar_subcat", [CategoriaController::class, "mostrarfk"])->name("agregarsub");


Route::post("persona", [PersonaController::class, "insertar"])->name("persona.insertar");
Route::post("Categoria", [CategoriaController::class, "insertar"])->name("categoria.insertar");
Route::post("Subcategoria", [SubcategoriaController::class, "insertar"])->name("subcategoria.insertar");
Route::post("nota", [NotaController::class, "insertar"])->name("nota.insertar");



Route::get("personas", [PersonaController::class, "mostrar"])->name("persona.mostrar");
Route::get("categoria/lista", [CategoriaController::class, "mostrar"])->name("categoria.mostrar");
Route::get("subcategoria/lista", [SubcategoriaController::class, "mostrar"])->name("subcategoria.mostrar");
Route::get("notas", [NotaController::class, "mostrar"])->name("nota.mostrar");

Route::get("categoria/editar{id}", [CategoriaController::class, "editar"])->name("categoria.editar");
Route::get("categoria/actualizar{id}", [CategoriaController::class, "actualizar"])->name("categoria.actualizar");

Route::get("subcategoria/editar{id}", [SubcategoriaController::class, "editar"])->name("subcategoria.editar");
Route::get("subcategoria/actualizar{id}", [SubcategoriaController::class, "actualizar"])->name("subcategoria.actualizar");


Route::get("persona/editar{id}", [PersonaController::class, "editar"])->name("persona.editar");
Route::get("persona/actualizar{id}", [PersonaController::class, "actualizar"])->name("persona.actualizar");
Route::get("persona/eliminar{id}", [PersonaController::class, "eliminar"])->name("persona.eliminar");



