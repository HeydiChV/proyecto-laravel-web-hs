<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PersonaController extends Controller
{
    public function listarPersona(){
        try{
            DB::connection()->getPdo();
            toast('Success Toast','success');
        }catch(Exception $ex){
            alert()->error('Post Created',$ex->getMessage())->toToast();
        }
    
        $personas = [
            [
                "personaID" => "1",
                "nombres" => "Sebastian",
                "paterno" => "Fernandez",
                "materno" => "Figueroa",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://img.freepik.com/fotos-premium/rana-divertida_183364-4475.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1697932800&semt=ais",
                "documento" => "65235897",
                "celular" => "943546487",
            ],
            [
                "personaID" => "2",
                "nombres" => "Milagros",
                "paterno" => "Chaina",
                "materno" => "Velasquez",
                "bibliografia" => " Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, comes from a line in section 1.10.32. ",
                "foto" => "https://cloudfront-us-east-1.images.arcpublishing.com/semana/JWYU7BYMDNGKBMYPCOLVFUX4M4.png",
                "documento" => "65235797",
                "celular" => "943546477",
            ],
            [
                "personaID" => "3",
                "nombres" => "Daniel",
                "paterno" => "Velasquez",
                "materno" => "Figueroa",
                "bibliografia" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                "foto" => "https://img.freepik.com/fotos-premium/gecko-casco-casco_777271-7315.jpg",
                "documento" => "64235897",
                "celular" => "943596487",
            ],
            [
                "personaID" => "4",
                "nombres" => "Wilder",
                "paterno" => "Acurio",
                "materno" => "Gomez",
                "bibliografia" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                "foto" => "https://img.freepik.com/fotos-premium/dinosaurio-azul-casco-lapiz-leyendo-libro_593294-4731.jpg",
                "documento" => "65237797",
                "celular" => "943547487",
            ],
            [
                "personaID" => "5",
                "nombres" => "Nayes",
                "paterno" => "Altamirano",
                "materno" => "Zea",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cloudfront-us-east-1.images.arcpublishing.com/semana/KVRYJNDM6FGKPGL6WXPO26HFUA.png",
                "documento" => "64835897",
                "celular" => "948546487",
            ],
        ];
    
        //dd($personas);
        return view('lista-personas', compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        dd($id_persona, $request);
        
    }

    public function detallePersona(Request $request, $id_persona){
        //dd( $request);
        return view('mostrar-persona', compact('id_persona'));
        
    }
        
}
