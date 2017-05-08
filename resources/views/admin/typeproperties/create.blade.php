@extends('admin.template.main')

@section('title', 'Creacion de tipos de propiedades')

@section('content')
<h1>CREACION DE UN NUEVO TIPO DE PROPIEDAD</h1>
{!! Form::open(['route' => 'admin.typeproperties.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre del tipo de propiedad', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection