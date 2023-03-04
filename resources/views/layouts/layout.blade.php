
@extends('layouts.app')
@section('body')
  

               

             <nav class="navbar navbar_head navbar-expand-lg fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route ('home')}}"><img class="nav_icon" src="{{ asset ('/img/beer3.png')}}"></a>
                  <a class="navbar-brand" href="{{ route ('home')}}">Inicio</a>
                  
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- <span><img class="nav_icon" src="{{ asset ('/img/beer3.png')}}"></span> --}}
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route ('breweries')}}">Cervecerías</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contact')}}">Contacto</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route ('aboutus')}}">Quienes somos</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                      <button class="btn btn_search" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav> 
              

        <x-flash /> {{--  llamamos a flash.blade.php para hacer que el mensaje de comprobacion desaparezca --}}         
    
           <div class="container-fluid mt-5 pt-5">
                {{-- <h1 class="text-center"> @yield('pagetitle') </h1> --}}
            @yield('content') 
            
          </div> 
        <br>
    {{-- <x-message type="secondary" message='  --- mensaje layout.blade ---  '/> --}}
   {{--   llamamos al componente message.blade.php  para que no se vea de momento--}}

<div class="container-fluid">
      <nav class="navbar navbar_footer navbar-expand-lg fixed-bottom"> 
        <p class="w-100 text-center"> &copy; 2022, Breweries Media Network </p>
      </nav>  
</div>
@endsection  
