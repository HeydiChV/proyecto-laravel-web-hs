<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Persona;
use App\Models\Producto;

class PdfController extends Controller
{
    public function exportarPdfPersonas(){
        $persona = Persona::all();
        $pdf = Pdf::loadView('pdf.pdf-personas', ['personas'=>$persona]);
        return $pdf->stream();
    }

    public function exportarPdfProductos(){
        $producto = Producto::all();
        $pdf = Pdf::loadView('pdf.pdf-productos', ['productos'=>$producto]);
        return $pdf->stream();
    }
}