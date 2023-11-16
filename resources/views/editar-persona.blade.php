<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Editar persona</h1>
                
        <form action="{{ route('actualizar.persona', $persona->personaID) }}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombres</label>
              <input type="text" class="form-control" name="nombres" value="{{$persona->nombres}}" id="exampleFormControlInput1" aria-describedby="Nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="paterno" value="{{ $persona->paterno }}" id="exampleInputEmail1" aria-describedby="Apellido Paterno">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="materno" value="{{ $persona->materno }}" id="exampleInputEmail1" aria-describedby="Apellido Materno">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Bibliografia</label>
                <textarea class="form-control" name="bibliografia" id="exampleFormControlTextarea1" rows="3">"{{ $persona->bibliografia }}"</textarea>
              </div>
                <input type="text" hiden class="form-control" name="fotoEditar" value="{{ $persona->foto }}" id="exampleInputEmail1" aria-describedby="Número de documento">
              <div class="mb-3">
                <div class="row">
                    <div class="col-md-9">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="input" aria-describedby="Foto">
                    </div>
                    <div class="col-md-3">
                        <div>
                            <img src="{{asset('storage/'.$persona['foto']) }}" alt="" id="img" height="100">
                          </div>
                        </div>

                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número de documento</label>
                <input type="text" class="form-control" name="documento" value="{{ $persona->documento }}" id="exampleInputEmail1" aria-describedby="Número de documento">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número de celular</label>
                <input type="text" class="form-control" name="celular" value="{{ $persona->celular }}" id="exampleInputEmail1" aria-describedby="Número de celular">
              </div>
            
              <div class="mb-3">
                <label for="categories" class="form-label">Categorias</label>
                <select class="form-select" name="categoria" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Administrador</option>
                    <option value="2">Cliente</option>
                    <option value="3">Vendedor</option>
                  </select>
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            </div>
            <div class="col-md-4"></div>
           
        </div>
        

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>