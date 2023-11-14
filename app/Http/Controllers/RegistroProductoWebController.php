<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Exception;

class RegistroProductoWebController extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');
    }
    public function guardarProducto(Request $request){
        //dd($request);
        $uriFoto = $request->file('imagen')->store('uploads', 'public');
        try{
            

            $data = [
                'nombre' => $request->get('nombre'),
                'marca' => $request->get('marca'),
                'categoria' => $request->get('categoria'),
                'descripcion' => $request->get('descripcion'), 
                'imagen' => $uriFoto,
                'precio' => $request->get('precio'), 
                'stock' => $request->get('stock'),
                'fecha_registro' => $request->get('fecha_registro')
            ];
    
            Producto::create($data);
            return redirect()->route('lista-productos');
        }catch(Exception $ex){
            dd($ex);
            return redirect()
                ->route('registro.producto')
                ->with('mensaje',$ex->getMessage()); 
        }


    }

}


