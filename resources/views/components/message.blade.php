
@if ($type != "")

<div class="w-100 text-center m-4">
    <p class="bg-{{ $type }} p-3">{{ $message }} </p>
</div> 
@endif


@if($errors->all())
    <div class="w-100 text-center m-4">
        @foreach ($errors->all() as $error )
           <p class="bg-danger p-3 text-white">{{ $error}}</p>  
        @endforeach
       
    </div>
@endif
