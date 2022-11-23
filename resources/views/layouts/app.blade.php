<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"> --}}
        {{-- CSS tienen que estar por delante de mis paginas(cdn)
        vamos a utilizar vite para bootstrap que es mas seguro cuando cambia de version --}}
        @vite(['resources/sass/app.scss','resources/js/mijs.js','resources/css/micss.css','resources/js/app.js'])
        {{-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <link rel="icon" type="image/png" href="{{ asset('/img/barrel.png') }}">  
              
        <title>@yield('title')</title> 
      
    </head>
    <body class="contenido">
        
        @yield('body')  
           {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> --}}

           
    </body>
</html>
