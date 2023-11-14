<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container">
        
        <h1>Lista Personas</h1>

        <a type="button" href= "{{ route('registro.persona') }}" class= "btn btn-primary">Registrar nueva persona</a>

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
                    <td style="text-align:center"><img style="height:55px;" src="{{asset('storage/'.$persona['foto']) }}" alt="Foto de persona"></td>





                    <td class="" style="text-align:center">
                        <a href="{{ route('mostrar-persona', $persona['personaID']) }}" type="button" class="btn-success">Detalles</a>
                        <a type="button" class="btn btn-primary">Editar</a>
                        <form action="{{route('eliminar.personas', $persona ['personaID'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class= "btn-success">Eliminar</button>
                          </form>
                    
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>