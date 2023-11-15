<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* Añadí una clase personalizada para el color de fondo de las tablas */
        .table-dynamic {
            background-color: #f8f9fa; /* Fondo gris claro por defecto */
        }

        /* Función para generar colores aleatorios en formato hexadecimal */
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        /* Función para aplicar colores aleatorios a las tablas con la clase .table-dynamic */
        function applyRandomColors() {
            const tables = document.querySelectorAll('.table-dynamic');
            tables.forEach(table => {
                const randomColor = getRandomColor();
                table.style.backgroundColor = randomColor;
            });
        }

        /* Llamada a la función para aplicar colores aleatorios cuando se carga la página */
        document.addEventListener('DOMContentLoaded', applyRandomColors);
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Senati_Per%C3%BA_logo.svg" class="image-fluid" width="650" height="350" alt="">
            </div>
        </div>

        <h1 style="font-size: 15px">Lista Productos</h1>

        <!-- Añadí la clase .table-dynamic para aplicar colores aleatorios a estas tablas -->
        <table class="table table-dynamic" style="font-size: 12px">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Nombres</th>
                    <th scope="col" class="text-center">Marca</th>
                    <th scope="col" class="text-center">Categoria</th>
                    <th scope="col" class="text-center">Descripción</th>
                    <th scope="col" class="text-center">Precio</th>
                    <th scope="col" class="text-center">Stock</th>
                    <th scope="col" class="text-center">Fecha de registro</th>
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
                    <td>{{$producto['precio'] }}</td>
                    <td>{{$producto['stock'] }}</td>
                    <td>{{$producto['fechaRegistro'] }}</td>
                    <td class="" style="text-align:center"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Agregué más tablas con la clase .table-dynamic para demostrar variabilidad en colores -->
        <table class="table table-dynamic" style="font-size: 12px">
            <!-- ... (contenido similar a la primera tabla) ... -->
        </table>

        <table class="table table-dynamic" style="font-size: 12px">
            <!-- ... (contenido similar a la primera tabla) ... -->
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
