@extends('layouts.layout') 
@section('title', 'Crear cervecería') 
@section('pagetitle','Nueva cervecería')  

@section('content')
<br>

<form enctype="multipart/form-data" action="" method="post">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf
  <x-editcard />
    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn card_btn me-4">Guardar</button>
      <a class="btn btn_back" href="{{ route ('breweries') }}">Volver</a>
    </div>

</form>

@endsection
      
