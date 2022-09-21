<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only tienen que estar por delante de mis paginas(cdn)-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper tienen que estar por delante de mis paginas-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
        <link rel="icon" type="image/png" href="{{ asset('barrel2.png') }}">
        <link rel="stylesheet" href="{{ asset ('/css/micss.css')}}"> 
       
        <script type="text/javascript" src="{{ asset ('/js/mijs.js')}}"></script>
        
        <title>@yield('title')</title> 
      
    </head>
    <body>
        @yield('body')                    
    </body>
</html>
