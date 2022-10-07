<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> --}}


      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        {{-- CSS tienen que estar por delante de mis paginas(cdn)
        vamos a utilizar vite para bootstrap que es mas seguro cuando cambia de version --}}
        @vite(['resources/sass/app.scss','resources/js/mijs.js','resources/css/micss.css'])
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('barrel2.png') }}">  
              
        <title>@yield('title')</title> 
      
    </head>
    <body class="contenido">
        
        @yield('body')  
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> --}}
    </body>
</html>
