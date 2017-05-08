@extends('admin.template.main')

@section('title', 'edicion '.$ownercurrent->first_name)

@section('content')
	<h1>{{ $ownercurrent->first_name.' '.$ownercurrent->last_name}}</h1>

	{!! Form::open(['route'=>['admin.ownercurrents.update', $ownercurrent], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('first_name', 'Nombres') !!}
			{!! Form::text('first_name', $ownercurrent->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres de propietario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', $ownercurrent->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos del propietario', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone', $ownercurrent->phone, ['class'=>'form-control', 'placeholder'=>'Numero de telefono', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cell_phone', 'Celular') !!}
			{!! Form::text('cell_phone', $ownercurrent->cell_phone, ['class'=>'form-control', 'placeholder'=>'Numero de celular', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', $ownercurrent->email, ['class'=>'form-control', 'placeholder'=>'correo electronico', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('availability', 'Disponibilidad') !!}
			{!! Form::text('availability', $ownercurrent->availability, ['class'=>'form-control', 'placeholder'=>'Disponibilidad', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
		</div>
	
	
	{!! Form::close() !!}
@endsection