@extends('admin.template.main')

@section('title', 'Editar Estado '. $state->name)

@section('content')
<h1>Edicion de categoria {{$state->name}}</h1>
{!! Form::open(['route' => ['admin.states.update', $state], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', $state->name, ['class'=>'form-control', 'placeholder'=>'Nombre del Estado', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar Estado', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection