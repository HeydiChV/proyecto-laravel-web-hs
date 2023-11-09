<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
   //Código para hacer conexion con la base de datos creada, especificamente con la tabla productos
   public function listarProducto(){
     //alert()->success('Exitoso')->toToast();
     $productos = Producto::all();
     return view('lista-productos', compact('productos'));  
  }
   public function mostrarProducto(Request $request, $id_producto){
     return view('mostrar-producto', compact('id_producto'));
  }
}