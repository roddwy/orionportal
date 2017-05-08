@extends('admin.template.main')

@section('title', 'Editar tipo propiedad '. $typeproperty->name)

@section('content')
<h1>Edicion del tipo propiedad {{$typeproperty->name}}</h1>
{!! Form::open(['route' => ['admin.typeproperties.update', $typeproperty], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', $typeproperty->name, ['class'=>'form-control', 'placeholder'=>'Nombre del tipo propiedad', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar tipo propiedad', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection