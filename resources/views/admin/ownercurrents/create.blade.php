@extends('admin.template.main')

@section('title', 'creacion de propieario')

@section('content')

	{!! Form::open(['route'=>'admin.ownercurrents.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('first_name', 'Nombres') !!}
			{!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres de propietario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos del propietario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Numero de telefono', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cell_phone', 'Celular') !!}
			{!! Form::text('cell_phone', null, ['class'=>'form-control', 'placeholder'=>'Numero de celular', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'correo electronico', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('availability', 'Disponibilidad') !!}
			{!! Form::text('availability', null, ['class'=>'form-control', 'placeholder'=>'Disponibilidad', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
		</div>
	
	
	{!! Form::close() !!}
@endsection