
        
        @extends('layouts.layout')
        @section('pagetitle','Contacto')
       
         @section('content')
            <div class="container-fluid mi_form w_100">

           
              <form action="" method="post">
                  @csrf   {{--  componente de seguridad cuando tenemos post, hay que ponerlo siempre para el post --}}
                <div class="mb-3">
                  <label for="name" class="form-label" >Tu nombre</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu nombre" required>
                  
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required> 
                </div>
                <div class="mb-3">
                  <label for="subject" class="form-label">Asunto</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder=" Qué nos quieres sugerir ?" required> 
                </div>
                <div class="mb-3">
                  <label for="body" class="form-label">Comentarios</label>
                  <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn_back">Enviar consulta</button>
                </div>
              
              </form>
            </div>

         @endsection
          
                

