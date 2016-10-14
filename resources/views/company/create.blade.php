@extends('layout')

@section('content')
	<br><br><br><br><br>
	<div class="container">
		<h1>Crear dependencia.</h1>
		<form role="form" method="POST" action="{{ url('companys') }}" id="for">
		{!! csrf_field() !!}
		  <div class="form-group">
		    <label for="name">Nombre de la Dependencia.</label>
		    <input type="text" class="form-control" id="name" placeholder="Dependencia" name="dependencia">
		  </div>
		  <div class="form-group">
		    <label for="responsable">Responsable(s)</label>
		    <input type="text" class="form-control" id="responsable" placeholder="Responsable" name="responsable">
		  </div>
		  <div class="form-group">
		    <label for="tel">Telefono(s)</label>
		    <input type="text" class="form-control" id="tel" placeholder="Telefono" name="telefono">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" placeholder="Email" name="emailu">
		  </div>

		  <div class="form-group">
		    <label for="direccion">Direccion</label>
		    <input type="direccion" class="form-control" id="direccion" placeholder="Direccion" name="direccionu">
		  </div>

		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
	<style type="text/css">
	  #for{
	  	margin-top: 40px;
		margin-bottom: 30px;
	  }
	</style>
@endsection