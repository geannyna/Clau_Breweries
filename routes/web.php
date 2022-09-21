<?php

use Illuminate\Support\Facades\Route;

function getBreweries(){
    $breweries = [
    [1,'Fabrica Maravillas','uno de los primeros templos de cerveza artesanal en Madrid'],
    [2,'Mad Brewing','su propia producción de cervezas, con diferentes tipos de tostado y fermentación'],
    [3,' Fogg Bar','siete grifos de las mejores cerveceras craft del país'],
    [4,'Beerhouse Madrid','cerveza artesana de la mejor calidad, tanto nacional como internacional'],
    [5,'The Stuyck Co','embotellan cerveza artesanal de barril en el momento para que te la lleves a casa'],
    [6,'Brew Wild Pizza','una cueva del barrio de Las Letras del s. XVIII y con música rock de fondo']
];
return $breweries;
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// todo lo que ponemos en (return view('welcome'); -- lo imprime como un string)

// Route::get('/', function () {
//     return view('welcome');
// });->name --- es recomendable poner nombre

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name ('home');

Route::get('/breweries', function () {
   
    $breweries = getBreweries();
    return view('breweries',['breweries'=>$breweries]);
})->name ('breweries');

Route::get('/brewery/{id}', function ($id) {
    $breweries = getBreweries();
    $fila = -1;
    for ($i=0; $i < sizeof ($breweries); $i++) { 
      if($id == $breweries[$i][0]){
        $fila = $i;
      }
    }
    return view ('brewery', ['brewery' => $breweries[$fila]]);
});

Route::get('/contact', function () {
    return view('contact');
})->name ('contact');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name ('aboutus');

Route::get('/landing', function () {
    return redirect()->route ('home');
});


