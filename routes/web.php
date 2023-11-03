<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nueva-ruta', function () {
    return view('vista2');
});

 
 
 Route::get('/lista-personas', 
 [personacontroller::class ,'listarPersona']);
 
 
 
 Route::get('/lista-personas/{id_persona}',
 [personacontroller::class, 'mostrarPersona']
 )->name('mostrar-persona');

 Route::get('/lista-productos', 
 [productocontroller::class ,'listarProducto']);


Route::get('/lista-productos/{id_producto}',
 [productocontroller::class, 'mostrarProducto']
 )->name('mostrar-producto');

 

 //-------------------------------------------------------------------------------------------------------------------
 //Página Web
 //-------------------------------------------------------------------------------------------------------------------

 Route::get('/pagina-web', 
 [PaginaWebcontroller::class ,'verPaginaWeb']
 )->name('pagina-web');
 
 