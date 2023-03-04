@extends('layouts.layout') 
@section('title', 'Listado de cervecerías') 
@section('pagetitle','6 Cervecerías Artesanales en Madrid')  
<div >
  <p class="pagetitle text-center">6 Cervecerías Artesanales en Madrid</p>
</div>
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
  @foreach ($breweries as $brewery )

  <x-card title="{{ $brewery->name }}" 
    body="{{ $brewery->description }}"
    img="{{ $brewery->img }}"
    place="{{ $brewery->place }}"
    link="/brewery/{{ $brewery->id }}" text>
  
      {{-- <x-slot:text>
        <p class="bg-green text-center"> Disclaimer / <b>Exención de responsabilidad </b></p>
      </x-slot:text>   --}}
    </x-card>

  @endforeach
 </div>
 <br>
 <div class="container-fluid">
  <p class="text-center">
    <a class="btn card_btn" href="{{ route ('brewery') }}">Crear nueva cervecería</a></p>
 </div>

@endsection
      
