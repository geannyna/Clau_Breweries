@extends('layouts.layout') 
@section('title', 'Detalles de cervecería') 
@section('pagetitle','Detalles de cervecería')  

@section('content')
{{-- <div class="row row-cols-1 row-cols-md-1 g-4"> --}}

    <x-card title="{{ $brewery->name }}"
         body="{{ $brewery->description }}" 
         img="{{ $brewery->img }}" 
         place="{{ $brewery->place }}" >
    </x-card>
        {{-- (habia text al final) --}}
    <br>
   <div class="d-flex justify-content-around">
        <a class="btn card_btn" href="{{ url ('/editbrewery/')."/". $brewery->id }}">Modificar</a>

        <form method="post" action="{{ url ('/deletebrewery')}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$brewery->id}}">
            <button type="submit" class="btn btn-delete">Eliminar</button>
        </form>

        <a class="btn btn_back" href="{{ route ('breweries') }}">Volver</a>
    </div>
    

     @yield('footer') 
    @endsection
