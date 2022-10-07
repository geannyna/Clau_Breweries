
@props(['text','auxiliar'])

<div class="container-fluid d-flex justify-content-center w-75">
  <div class="col d-flex">
      <div class="card mod_card card-body d-flex row">
        <p class="card-title">
          <h3 class="form-label text-center w-75 ps-5 ms-3">Cervecería </h3>
        </p>

          <p><input type="text" name="title" id="title" value="{{ old ('title')}}" placeholder="Nombre de la cervecería" class="form-control @error('title')
              border-danger
            @enderror"></p>
            @error('title')
              <p class="text-danger"><b>{{$errors->first('title')}}</b></p>
            @enderror

        <p class="card-text">
           <textarea class="form-control @error('cuerpo')
           border-danger
         @enderror" id="cuerpo" name="cuerpo" rows="3" placeholder="Detalles ...">{{ old ('cuerpo')}}</textarea>
        </p>
          @error('cuerpo')
            <p class="text-danger"><b>{{$errors->first('cuerpo')}}</b> </p>
          @enderror

          <p><input type="text" name="place" id="place" value="{{ old ('place')}}" placeholder="Localidad ..." class="form-control @error('place')
            border-danger
          @enderror"></p>
              @error('place')
                    <p class="text-danger"><b>{{$errors->first('place')}}</b> </p>
              @enderror
  
          <div class="mb-3">
            <label for="img" class="form-label">Cargar imagen</label>
            <input class="form-control" type="file" id="img" name="img" value="" class="form-control">
         
          </div>
      </div>
    </div> 
</div>
