<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductoController extends Controller
{
    public function listarProducto(){
        try{
            DB::connection()->getPdo();
            toast('Success Toast','success');
        }catch(Exception $ex){
            alert()->error('Post Created',$ex->getMessage())->toToast();
        }
    
        $productos = [
            [
                "productoID" => "1",
               "nombre" => "oufits",
               "marca" => "A",
               "categoria" => "ropa y moda",
               "descripcion" => "Esta categoría abarca todo lo relacionado con la indumentaria y la moda. Puede incluir ropa para mujeres, hombres, niños y bebés, así como calzado y accesorios de moda como bolsos, cinturones, bufandas, sombreros y gafas de sol. Es un mercado amplio y diverso donde la tendencia y el estilo juegan un papel importante.",
               "imagen" => "https://thehappening.com/wp-content/uploads/2021/07/sabrina-44.jpg",
               "precio" => "500",
               "stock" => "150",
               "fechaRegistro" => "2023-10-27",
            ],
        
            [
               "productoID" => "2",
               "nombre" => "la toxica",
               "marca" => "A",
               "categoria" => "alimentos y bebidas",
               "descripcion" => "En esta categoría se encuentran todos los productos relacionados con la alimentación y las bebidas. Esto incluye alimentos frescos como frutas y verduras, carnes, pescados, así como productos enlatados y envasados. También abarca una variedad de bebidas, desde agua y refrescos hasta bebidas alcohólicas como vinos y cervezas.",
               "imagen" => "https://gestion.pe/resizer/i5vGkdDtf5Hm87rWfJgyCvkwEyI=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/IOUUSANWTNDP7G3IJPGGO6NZOI.jpg",
               "precio" => "15",
               "stock" => "50",
               "fechaRegistro" => "2023-12-13",
        
            ],
        
            [
               "productoID" => "3",
               "nombre" => "muebles",
               "marca" => "A",
               "categoria" => "hogar y jardin",
               "descripcion" => "Esta categoría se centra en productos para el hogar y la decoración. Incluye muebles para el hogar, decoración de interiores, electrodomésticos de cocina, productos para el baño y elementos relacionados con el jardín, como muebles de jardín, herramientas de jardinería y plantas.",
               "imagen" => "https://colineal.pe/cdn/shop/articles/555559551037_600x600_crop_center.jpg?v=1666721828",
               "precio" => "200",
               "stock" => "100",
               "fechaRegistro" => "2023-11-08",
            ],
        
            [
               "productoID" => "4",
               "nombre" => "diccionarios",
               "marca" => "A",
               "categoria" => "Libros",
               "descripcion" => "Esta categoría se enfoca en literatura, entretenimiento y medios. Incluye libros de ficción y no ficción en diversos géneros, películas, música en diferentes formatos, videojuegos, revistas y cómics. Los medios son una fuente de entretenimiento y conocimiento para muchas personas.",
               "imagen" => "https://www.asale.org/sites/default/files/styles/noticia_grande/public/imagenes/articulos/Diccionarios_DSC1992.jpg?h=c9f93661&itok=TC0X0oHB",
               "precio" => "60",
               "stock" => "200",
               "fechaRegistro" => "2023-10-03",
            ],
        
            [
               "productoID" => "5",
               "nombre" => "perfumes",
               "marca" => "A",
               "categoria" => "Salud y belleza",
               "descripcion" => "La categoría de Salud y Belleza engloba una amplia gama de productos relacionados con el cuidado personal y el bienestar. Incluye productos para el cuidado del cabello, como champús, acondicionadores y tratamientos capilares. También abarca productos para el cuidado de la piel, como cremas hidratantes, protectores solares y productos antienvejecimiento. Además, esta categoría engloba suplementos dietéticos y productos relacionados con la salud, como vitaminas y minerales. En el ámbito de la belleza, se encuentran productos de maquillaje, como bases, labiales y sombras de ojos, así como equipos de ejercicio en casa, como pesas y máquinas de entrenamiento. La salud y la belleza son aspectos importantes en la vida de muchas personas, y esta categoría ofrece una amplia gama de productos para ayudar a las personas a cuidar de sí mismas y sentirse mejor tanto por dentro como por fuera.",
               "imagen" => "https://media.vogue.es/photos/61ed2ff6dd52dacaa3c9fd5f/3:2/w_1600%2Cc_limit/Bodegon_Vogue_4_202.jpg",
               "precio" => "150",
               "stock" => "200",
               "fechaRegistro" => "2023-12-01",
            ]
        
            ];
    
        //dd($productos);
        return view('lista-productos', compact('productos'));
    }

    public function mostrarProducto(Request $request, $id_producto){
        dd($id_producto, $request);
        
    }

    public function detalleProducto(Request $request, $id_producto){
        //dd( $request);
        return view('mostrar-producto', compact('id_producto'));
        
    }
}
