@extends('layout')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <h1>Crear usuario.</h1>
        <form role="form" method="POST" action="{{ url('userstore') }}" id="for">
        {!! csrf_field() !!}
          <div class="form-group">
            <label for="name">Nombre Responsable</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre del responsable" name="name">
          </div>
          <div class="form-group">
            <label for="name">Nombre Usuario</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre de Usuario" name="user">
          </div>
          <div class="form-group">
            <label for="tel">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="password">
          </div>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form>
    </div>
    <style type="text/css">
      #for{
        margin-top: 40px;
        margin-bottom: 96px;
      }
    </style>
@endsection