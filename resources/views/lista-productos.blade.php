<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Lista Productos</h1>
        <p>Ofrecen gran variedad de productos que solo ellos traen. Así que si un cliente desea ese determinado producto. Crear un buen clima laboral. Bonificaciones a los empleados, reuniones constantes, premios al mejor trabajador.</p>
        @foreach($productos as $producto)
        <p>{{$producto['nombre'] }} // {{$producto['marca'] }} // {{$producto['categoria'] }} </p>


        @endforeach
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Nombres</th>
                    <th scope="col" class="text-center">Marca</th>
                    <th scope="col" class="text-center">Categoria</th>
                    <th scope="col" class="text-center">Descripción</th>
                    <th scope="col" class="text-center">Imagen</th>
                    <th scope="col" class="text-center">Precio</th>
                    <th scope="col" class="text-center">Stock</th>
                    <th scope="col" class="text-center">Fecha de registro</th>
                    <th scope="col" class="text-center">Opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$producto['nombre'] }}</td>
                    <td>{{$producto['marca'] }}</td>
                    <td>{{$producto['categoria'] }}</td>
                    <td>{{$producto['descripcion'] }}</td>
                    <td style="text-align:center"><img style="height:55px;" src="{{$producto['imagen'] }}" alt="Foto de persona"></td>
                    <td>{{$producto['precio'] }}</td>
                    <td>{{$producto['stock'] }}</td>
                    <td>{{$producto['fechaRegistro'] }}</td>
                    <td class="" style="text-align:center">
                        <button type="button" class="btn btn-success">Detalles</button>
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>