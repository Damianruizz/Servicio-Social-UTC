@extends('layout')

@section('content')

	<div class="container">
		<h1 id="edit">Editando a <?php echo $user->name ?></h1>

		{!! Form::model($user, [
		    'method' => 'PATCH',
		    'route' => ['userupdate', $user->id],
		    'role' => 'form',
		    'id' => 'for'
		]) !!}

		<div class="form-group">
		    {!! Form::label('dep', 'Nombre del Responsable', ['class' => 'control-label']) !!}
		    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('nombre', 'Nombre de Usuario', ['class' => 'control-label']) !!}
		    {!! Form::text('user', $user->username, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Contraseña', ['class' => 'control-label']) !!}
		    {!! Form::password('password', null, ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}
	</div>

	<style type="text/css">
	  #for{
	  	margin-top: 50px;
		margin-bottom: 100px;
	  }

	  #edit{
	  	margin-top: 150px;
	  }
	</style>
@endsection