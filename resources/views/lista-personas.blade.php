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
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <h1>Lista Personas</h1>
        @foreach($personas as $persona)
        <p>{{$persona['nombres'] }} {{$persona['paterno'] }} {{$persona['materno'] }} </p>


        @endforeach
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Nombres</th>
                    <th scope="col" class="text-center">Paterno</th>
                    <th scope="col" class="text-center">Materno</th>
                    <th scope="col" class="text-center">Documento</th>
                    <th scope="col" class="text-center">Celular</th>
                    <th scope="col" class="text-center">Foto</th>
                    <th scope="col" class="text-center">Opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$persona['nombres'] }}</td>
                    <td>{{$persona['paterno'] }}</td>
                    <td>{{$persona['materno'] }}</td>
                    <td>{{$persona['documento'] }}</td>
                    <td>{{$persona['celular'] }}</td>
                    <td style="text-align:center"><img style="height:55px;" src="{{$persona['foto'] }}" alt="Foto de persona"></td>
                    <td class="" style="text-align:center">
                        <a href="{{ route('mostrar-persona', $persona['personaID']) }}" type="button" class="btn-success">Detalles</a>
                        <a type="button" class="btn btn-primary">Editar</a>
                        <a type="button" class="btn btn-danger">Eliminar</a>
                    
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>
@include('sweetalert::alert')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>