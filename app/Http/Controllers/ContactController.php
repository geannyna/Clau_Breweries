<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Http\Requests\BreweryRequest;


class ContactController extends Controller
{ 
    public function show(){
        return view ('contact');
    }
    public function store (BreweryRequest $request){
        //llamamos a la clase Mailable(ContactNotification.php)

        if (Mail::to('claudia.iacob@hotmail.com')->send(new ContactNotification($request->name, $request->email,$request->subject,$request->body))) {
            return back()->with('success','Mensaje enviado correctamente. En breve nos pondremos en contacto.');
           // return back()->with('error','ERROR. Mensaje NO enviado.');  //--para ver el mensaje de error
        } else {
            return back()->with('error','ERROR. Mensaje NO enviado.');
        }
        
        

        // return 'Formulario procesado ' . $request->name;
        //  $request->input ('name') - se puede poner asi tambien pero tarda mas, esto no sirve porque va a una nueva pagina y deberia de estar en la misma pagina y enseñar el mensaje de envio

      
    }
  
}
