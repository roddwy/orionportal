@extends('admin.template.main')

@section('title', 'crear zona')

@section('content')
	<h1>CREACION DE UNA NUEVA ZONA</h1>
	{!! Form::open(['route' => 'admin.zones.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de la Zona', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar Zona', ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection