<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BreweryRequest;

class BreweryController extends Controller
{
    // //creamos una function(metodo)
    // private $breweries = [
    //     [1,'Fabrica Maravillas','Uno de los primeros templos de cerveza artesanal en Madrid'],
    //     [2,'Mad Brewing','Tienen su propia producción de cervezas, con diferentes tipos de tostado y fermentación'],
    //     [3,' Fogg Bar','Tienen siete grifos de las mejores cerveceras craft del país'],
    //     [4,'Beerhouse Madrid','Cerveza artesana de la mejor calidad, tanto nacional como internacional'],
    //     [5,'The Stuyck Co','Embotellan cerveza artesanal de barril en el momento para que te la lleves a casa'],
    //     [6,'Brew Wild Pizza','Una cueva del barrio de Las Letras del s. XVIII y con música rock de fondo']
    // ];
    public function index(){
        $breweries = DB::table ('breweries')->get();
       // dd($breweries);
        return view('breweries',['breweries'=>$breweries]);
    }

    public function show($id){
        
        // $fila = -1;
        // for ($i=0; $i < sizeof ($this->breweries); $i++) { 
        //   if($id == $this->breweries[$i][0]){
        //     $fila = $i;
        //   }
        // }
        $brewery = DB::table('breweries')->find( $id);
        return view ('brewery', ['brewery' => $brewery]);
    }

    public function create(){
       
        return view('newbrewery');
    }

    public function store(BreweryRequest $request){
      $urlweb = "";

       if($request->hasFile('img')){
          $path = $request->file('img')->store('public/multimedia');
          $urlweb = Storage::url($path);
       }
      // $path = $request->file('img')->store('public/multimedia');
    //    aqui lo almacenamos en privado en storage/app/public/multimedia
    // si muevo el proyecto de sitio a un servidor nuevo hay que ejecutar de nuevo -- php artisan storage:link(esto se ejecuta solo una vez por proyecto)
      // $urlweb = Storage::url($path);

        DB::table('breweries')->insert([
            'name'=>$request->title,
            'description'=>$request->cuerpo,
            'place'=>$request->place,
            'img'=> $urlweb
        ]);
        return redirect()->route('breweries')->with('success','Se ha guardado la cervecería');
    }

    public function edit($id){
       
        $brewery = DB::table('breweries')->find( $id);
        return view ('editbrewery', ['brewery' => $brewery]);
    }
    public function update(BreweryRequest $request){
       // comprobamos si existe el fichero o no
       $urlweb = "";

       if($request->hasFile('img')){
          $path = $request->file('img')->store('public/multimedia');
          $urlweb = Storage::url($path);
       }
        
        DB::table('breweries')->where('id', '=', $request->id)
                              ->update([
            
             'name'=>$request->title,
             'description'=>$request->cuerpo,
             'place'=>$request->place,
             'img'=> $urlweb
         ]);
     
         return redirect()->route('breweries')->with('success','Se ha actualizado la cervecería');
     }

     // borrar una cerveceria
     public function delete(Request $request){
        
        DB::table('breweries')->delete($request->id);
          return redirect()->route('breweries')->with('success','Se ha borrado la cervecería');
      }
}
