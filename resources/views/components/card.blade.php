
@props(['text','auxiliar'])

<div class="container-fluid d-flex align-items-stretch">
  <div class="col d-flex justify-content-center">
    <div class="card mi_card mt-4" style="width: 16rem;">
      <img src="{{ $img }}" class="card-img-top card_img" alt="{{ $title }}">
      <div class="card-body d-flex row">
        <h5 class="card-title text-center">{{ $title }}</h5>
        <p class="card-text">{{ $body}}</p>
        <p class="card-text"><b>{{ $place }}</b></p>
        @if ($link != '')
             <p class="text-center mt-auto"><a class="btn card_btn" href="{{ $link }}">Ver más</a></p>
        @endif
      </div>
    </div>
  </div>  
</div>
