<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
   //Código para hacer conexion con la base de datos creada, especificamente con la tabla productoss
   public function listarProducto(){
     //alert()->success('Exitoso')->toToast();
     $productos = Producto::all();
     return view('lista-productos', compact('productos'));  
  }
   public function mostrarProducto(Request $request, $id_producto){
     return view('mostrar-producto', compact('id_producto'));
  }
  public function eliminarProducto(Request $request, $id_producto){

    $producto = Producto::find($id_producto);
    $producto->delete();

    return redirect()
    ->route('lista-productos')
    ->with('mensaje', 'Producto eliminada correctamente');
}
public function editarProducto(Request $request, $id_producto){

  $producto = Producto::findOrFail($id_producto);
  return view('editar-producto', compact('producto'));
  //dd($id_producto);
}
public function actualizarProducto(Request $request, $id_producto){
  if($request->file('imagen')){
    $uriFoto = $request->file('imagen')->store('uploads', 'public');
  }else{
    $uriFoto =  $request->get('imagenEditar');
  }
    $producto = Producto::where('productoID',$id_producto)->update(
    [
      'nombre' => $request->get('nombre'),
                'marca' => $request->get('marca'),
                'categoria' => $request->get('categoria'),
                'descripcion' => $request->get('descripcion'), 
                'imagen' => $uriFoto,
                'precio' => $request->get('precio'), 
                'stock' => $request->get('stock'),
                'fechaRegistro' => $request->get('fechaRegistro') 
    ]
  );
  return redirect()
  ->route('lista-productos')
  ->with('mensaje','Producto actualizada correctamente');
  //dd($id_producto);
}

}