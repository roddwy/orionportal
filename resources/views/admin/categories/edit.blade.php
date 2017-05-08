@extends('admin.template.main')

@section('title', 'Editar categoria '. $category->name)

@section('content')
<h1>Edicion de categoria {{$category->name}}</h1>
{!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Nombre de la Categoria', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar Categoria', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection