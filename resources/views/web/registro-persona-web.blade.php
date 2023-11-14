@extends('web.pagina-web-plantilla')
@section('contenido')

	<h1>Registro Persona</h1>

		<!-- Title page -->
		<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
				Contact
			</h2>
		</section>	
	
	
		<!-- Content page -->
		<section class="bg0 p-t-104 p-b-116">
			<div class="container">
				<div class="flex-w flex-tr">
					<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
						<form action="{{ route('guardar.persona') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
							  <label for="exampleInputEmail1" class="form-label">Nombres</label>
							  <input type="text" class="form-control" name="nombres" id="exampleInputEmail1" aria-describedby="Nombres">
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
								<input type="text" class="form-control" name="paterno" id="exampleInputEmail1" aria-describedby="Apellido Paterno">
							  </div>
							  <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
								<input type="text" class="form-control" name="materno" id="exampleInputEmail1" aria-describedby="Apellido Materno">
							  </div>
							  <div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Bibliografia</label>
								<textarea class="form-control" name="bibliografia" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<div class="row">
									<div class="col-md-9">
										<label for="exampleInputEmail1" class="form-label">Foto</label>
								<input type="file" class="form-control" name="foto" id="input" aria-describedby="Foto">
									</div>
									<div class="col-md-3">
										<div>
											<img src="" alt="" id="img" height="100">
										  </div>
										</div>

								</div>
							  </div>
							  <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Número de documento</label>
								<input type="text" class="form-control" name="documento" id="exampleInputEmail1" aria-describedby="Número de documento">
							  </div>
							  <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Número de celular</label>
								<input type="text" class="form-control" name="celular" id="exampleInputEmail1" aria-describedby="Número de celular">
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
	
					<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-map-marker"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Address
								</span>
	
								<p class="stext-115 cl6 size-213 p-t-18">
									Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
								</p>
							</div>
						</div>
	
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-phone-handset"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Lets Talk
								</span>
	
								<p class="stext-115 cl1 size-213 p-t-18">
									+1 800 1236879
								</p>
							</div>
						</div>
	
						<div class="flex-w w-full">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-envelope"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Sale Support
								</span>
	
								<p class="stext-115 cl1 size-213 p-t-18">
									contact@example.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
let img = document.getElementById('img');
let input = document.getElementById('input');

input.onchange = (e) => {
  if(input.files[0])
    img.src = URL.createObjectURL(input.files[0]);
}


			</script>
		</section>	

@endsection