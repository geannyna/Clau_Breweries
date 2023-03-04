@extends('layouts.layout') 
@section('title', 'Portal de cervecerías') 
@section('pagetitle','Portal Cervecerías Artesanales en Madrid') 

@section('content')
<div class="container-fluid row d-flex justify-content-center">
<div id="divQuote" class="w-100 p-2 text-center"><img class="home_img" src="{{ asset ('/img/beerAnim.gif')}}"></div>
<br>

<div class="container-md home_text mt-5">
<p>
    There are several breweries in the  Madrid's surroundings, but there is only one microbrewery  in the city center who is actualy brewing. Fábrica Maravillas brew pub has operated in Malasaña area in center's Madrid since 2012. The location is great – Malasaña is said to be the hippiest neighborhood of the city, and (in normal times) it bubbles with life day and night. The streets, boutiques, restaurants and bars of Malasaña are popular among both the locals and tourists exploring Madrid.
 </p> 
 </div>
 </div>

<script>

    setTimeout(() => {
        loadQuote();
    }, 3000);


    function loadQuote(){
        let quote  = ' prueba';
        let urlApi = 'https://api.chucknorris.io/jokes/random';
        let xhr = new XMLHttpRequest();

        xhr.addEventListener('readystatechange', function(){
            if(this.readyState === 4 ){
                 let resp = JSON.parse(this.responseText);
                    if (resp['value']){
                     quote = resp['value'];
                     document.getElementById('divQuote').innerHTML = '<p>' + quote + '</p>'; 
                }
            }
           
        })
        xhr.open('GET', urlApi);
        xhr.send();
    }
</script>
@endsection
       
             
    
