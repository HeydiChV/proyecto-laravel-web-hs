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
                <h1>Editar producto</h1>
                <form action="{{ route('actualizar.producto', $producto->productoID) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}" id="exampleInputEmail1" aria-describedby="Nombres">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" value="{{$producto->marca}}" id="exampleInputEmail1" aria-describedby="Apellido Paterno">
                      </div>
                      <div class="mb-3">
                        <label for="categories" class="form-label">Categorias</label>
                        <select class="form-select" name="categoria" aria-label="Default select example">
                            <option selected>Seleccione uno</option>
                            <option value="1">Carnes</option>
                            <option value="2">Verduras</option>
                            <option value="3">Frutas</option>
                          </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3">value="{{$producto->descripcion}}"</textarea>
                      </div>
                      <div class="mb-3">
                        
                        <div class="row">
                            <div class="col-md-9">
                                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen" id="input" aria-describedby="imagen">
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <img src="{{asset('storage/'.$producto['imagen']) }}" alt="" id="img" height="100">
                                  </div>
                                </div>

                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" value="{{$producto->precio}}" id="exampleInputEmail1" aria-describedby="Número de documento">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock" value="{{$producto->stock}}" id="exampleInputEmail1" aria-describedby="Número de celular">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de registro</label>
                        <input type="date" class="form-control" name="fechaRegistro" value="{{$producto->fechaRegistro}}" id="exampleInputEmail1" aria-describedby="Número de documento">
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