@component('mail::message')
{{-- con el componente cambiamos la forma en la que se ve el mensaje --}}
  <style>
    i{color: blue}
    b{text-decoration: underline}
  </style>

  <p> Mensaje</p>
  <p> el visitante <i>{{ $name }}</i> <b>&lt;{{ $email }}&gt; </b> comentado </p>
  <p>{{ $webSubject }}</p>
  <p>{{ $body }}</p>
@endcomponent

