@extends('admin.template.main')

@section('title', 'Creacion de las categorias')

@section('content')
<h1>CREACION DE UNA NUEVA CATEGORIA</h1>
{!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de la Categoria', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection