@extends('admin.template.main')

@section('title', 'crear Estado')

@section('content')
	<h1>CREACION DE UN NUEVO ESTADO PARA INMUEBLES</h1>
	{!! Form::open(['route' => 'admin.states.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre del nuevo estado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar Estado', ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection