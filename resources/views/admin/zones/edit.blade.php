@extends('admin.template.main')

@section('title', 'Editar zona '. $zone->name)

@section('content')
<h1>Edicion de categoria {{$zone->name}}</h1>
{!! Form::open(['route' => ['admin.zones.update', $zone], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre')!!}
		{!! Form::text('name', $zone->name, ['class'=>'form-control', 'placeholder'=>'Nombre de la Zona', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar Zona', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection