<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Persona;

class PersonaController extends Controller

{
    //Código para hacer conexion con la base de datos creada, especificamente con la tabla personas
   public function listarPersona(){
     alert()->success('Exitoso')->toToast();
     $personas = Persona::all();
     return view('lista-personas', compact('personas'));  
  }
   public function mostrarPersona(Request $request, $id_persona){
     return view('mostrar-persona', compact('id_persona'));
  }
}

