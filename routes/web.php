<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonaWebController;
use App\Http\Controllers\RegistroProductoWebController;

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
 [personacontroller::class ,'listarPersona']
 )->name('lista-personas');
 
 
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
 
 Route::get('/pagina-web/registro-persona', 
 [RegistroPersonaWebController::class ,'registroPersona']
 )->name('registro.persona');
 
 Route::get('/pagina-web/registro-producto', 
 [RegistroProductoWebController::class ,'registroProducto']
 )->name('registro.producto');
 
 Route::post('/pagina-web/guardar-persona', 
 [RegistroPersonaWebController::class ,'guardarPersona']
 )->name('guardar.persona');
 
 Route::post('/pagina-web/guardar-producto', 
 [RegistroProductoWebController::class ,'guardarProducto']
 )->name('guardar.producto');