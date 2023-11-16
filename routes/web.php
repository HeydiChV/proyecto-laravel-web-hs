<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonaWebController;
use App\Http\Controllers\RegistroProductoWebController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PdfController;

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
 
 
 Route::get('/mostrar-personas/{id_persona}',
 [personacontroller::class, 'mostrarPersona']
 )->name('mostrar.persona');

 Route::get('/lista-productos', 
 [productocontroller::class ,'listarProducto']
)->name('lista-productos');


Route::get('/mostrar-productos/{id_producto}',
 [productocontroller::class, 'mostrarProducto']
 )->name('mostrar.producto');

 Route::get('/editar-personas/{id_persona}',
 [personacontroller::class, 'editarPersona']
 )->name('editar.persona');


 Route::get('/editar-personas/{id_persona}',
 [Personacontroller::class, 'editarPersona']
 )->name('editar.persona');

 Route::put('/actualizar-persona/{id_persona}', 
 [Personacontroller::class ,'actualizarPersona']
 )->name('actualizar.persona');

 Route::get('/editar-productos/{id_producto}',
 [productocontroller::class, 'editarProducto']
 )->name('editar.producto');

 Route::put('/actualizar-producto/{id_producto}', 
 [productocontroller::class ,'actualizarProducto']
 )->name('actualizar.producto');

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

 Route::delete('/pagina-web/eliminar-personas/{id_persona}',
 [PersonaController::class, 'eliminarPersona']
 )->name('eliminar.personas');

 Route::delete('/pagina-web/eliminar-productos/{id_producto}',
 [PersonaController::class, 'eliminarProducto']
 )->name('eliminar.productos');

 Route::get('/pdf-personas', 
 [PdfController::class, 'exportarPdfPersonas']
 )->name('pdf.personas');

 Route::get('/pdf-productos', 
 [PdfController::class, 'exportarPdfProductos']
 )->name('pdf.productos');