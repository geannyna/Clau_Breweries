

@if($msg = Session::get('success'))
<div id='mensaje' class="p-3 msg">
  {{ $msg }}
</div>
@endif
@if($msg = Session::get('error'))
<div id='mensajeError' class="p-3 mt-auto msgError">
  {{ $msg }}
</div>
@endif
