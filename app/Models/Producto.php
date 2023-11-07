<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'productoID';

    protected $fillable = [
        'nombre',
        'marca',
        'categoria',
        'descripcion',
        'imagen',
        'precio',
        'stock',
        'fechaRegistro',
    ];
}
