<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;

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

Route::get('/breweries', [BreweryController::class, 'index'])->name ('breweries');


Route::get('/brewery/{id}', [BreweryController::class, 'show']);
Route::get('/brewery', [BreweryController::class, 'create'])->name ('brewery');
Route::post('/brewery', [BreweryController::class, 'store']);

Route::get('/editbrewery/{id}', [BreweryController::class, 'edit']);
Route::post('/editbrewery', [BreweryController::class, 'update'])->name ('editbrewery');
Route::post('/deletebrewery', [BreweryController::class, 'delete']);

Route::get('/contact',  [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');


Route::get('/aboutus', function () {
    return view('aboutus');
})->name ('aboutus');


Route::get('/landing', function () {
    return redirect()->route ('home');
});


