@extends('layouts.layout') 
@section('title', 'Listado de cervecerías') 
@section('pagetitle','6 Cervecerías Artesanales en Madrid')  

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($breweries as $brewery )
    {{-- <p> {{ $brewery[0] }} - {{ $brewery[1] }} - {{ $brewery[2] }} </p> --}}
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $brewery[1] }}</h5>
          <p class="card-text">{{ $brewery[2] }}</p>
        </div>
        <div class="d-flex justify-content-center">
          <a class="btn btn-warning" href="/brewery/{{ $brewery[0]}}">Ver más</a>
        </div>
      </div>
    </div>
  @endforeach
 </div>
@endsection
      
