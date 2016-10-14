@extends('layout')

@section('content')
	
	

	<div class="container">
		<h1 id="edit">Editar Dependencia</h1>

		{!! Form::model($company, [
		    'method' => 'PATCH',
		    'route' => ['companyupdate', $company->id],
		    'role' => 'form',
		    'id' => 'for'
		]) !!}

		<div class="form-group">
		    {!! Form::label('dep', 'Nombre de la Dependencia', ['class' => 'control-label']) !!}
		    {!! Form::text('dependencia', $company->company, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('resp', 'Responsable(s)', ['class' => 'control-label']) !!}
		    {!! Form::text('responsable', $company->responsable1, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('telefono', 'Telefono(s)', ['class' => 'control-label']) !!}
		    {!! Form::text('telefono', $company->tel1, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
		    {!! Form::text('email', $company->email1, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('direccion', 'Direccion', ['class' => 'control-label']) !!}
		    {!! Form::text('direccion', $company->address, ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Guardar', ['class' => 'btn btn-default']) !!}

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