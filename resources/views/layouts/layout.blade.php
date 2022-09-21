
@extends('layouts.app')
@section('body')
  

               
        <div class="container-fluid">
             <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route ('home')}}">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img class="nav_icon" src="{{ asset ('/img/beer3.png')}}"></span>
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
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>             
        <h1 class="text-center"> @yield('pagetitle') </h1>
           <div class="container-fluid w-75">
            @yield('content')
          </div> 
          <br>
          <nav class="text-center">
            <p> &copy; 2022 </p>
          </nav>                         
 
@endsection