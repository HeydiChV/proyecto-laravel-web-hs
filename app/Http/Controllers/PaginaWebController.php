<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Producto;

class PaginaWebController extends Controller
{
    public function verPaginaWeb(){
        $data = [
            'personas' => Persona::all(),
            'productos' => Producto::all(),
        ];
        return view('web.pagina-web-principal', compact('data'));
    }

}
