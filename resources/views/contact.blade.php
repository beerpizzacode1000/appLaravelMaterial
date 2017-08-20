@extends('master')
@section('title','Contact')
@section('content')
<div class:"container">
    <div class="content">
    <div class="title">Página de Contacto"</div>
    <div class="quote">Nuestra Pagina de Contacto!</div>

    <form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="ejemplo_email_2">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_2"
           placeholder="Introduce tu email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="ejemplo_password_2">Contraseña</label>
    <input type="password" class="form-control" id="ejemplo_password_2" 
           placeholder="Contraseña">
  </div>
 
  <button type="submit" class="btn btn-default">Entrar</button>
</form>
</div>
@endsection
