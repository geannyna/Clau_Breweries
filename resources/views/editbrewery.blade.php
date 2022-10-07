@extends('layouts.layout') 
@section('title', 'Modificar cervecería') 
@section('pagetitle','Modificar cervecería')  

@section('content')
<br>
<form enctype="multipart/form-data" method="post" action="{{ route ('editbrewery') }}">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf

  <input type="hidden" id="id" name="id" value="{{ $brewery->id}}">
  {{-- creamos ese campo oculto para pasar el id al controlador y poder modificar info --}}
  <div class="container-fluid d-flex justify-content-center w-75">
    <div class="col d-flex">
        <div class="card mod_card card-body d-flex row">
          <p class="card-title">
            <h3 class="form-label text-center w-75 ps-5 ms-3">Cervecería</h3></p>
            <p><input type="text" name="title" id="title" value="{{ $brewery->name }}" placeholder="Nombre de la cervecería" class="form-control" required></p>
          <p class="card-text">
             <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3" required placeholder="Detalles ...">{{ $brewery->description }}</textarea></p>
            <p><input type="text" name="place" id="place" value="{{ $brewery->place }} " placeholder="Localidad ..." class="form-control" required></p>
            <div class="mb-3">
              <label for="img" class="form-label">Cargar imagen</label>
              <input class="form-control" type="file" id="img" name="img">
            </div>
        </div>
      </div> 
  </div>

    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn card_btn  me-4">Guardar</button> 
     <a class="btn btn_back" href="{{ route ('breweries') }}">Volver</a>
    </div>

</form>
 


@endsection
      
