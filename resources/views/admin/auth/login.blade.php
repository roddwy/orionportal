@extends('admin.template.main')

@section('title', 'Login')

@section('content')

	{!! Form::open(['route'	=>	'admin.auth.login', 'method' => 'POST'])!!}
	<h1>Hola esto es login</h1>
	<div class="form-group">
	 	{!! Form::label('name_user', 'Nombre de usuario') !!}
	 	{!! Form::text('name_user', null, ['class' => 'form-control', 'placeholder'=>'Nombre de usuario']) !!}
	 </div>
	 <div class="form-group">
	 	{!! Form::label('password', 'Contraseña') !!}
	 	{!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'******************']) !!}
	 </div>
	 <div class="form-group">
	 	{!! Form::submit('Acceder al sistema', ['class'=>'btn btn-primary']) !!}
	 </div>
	{!! Form::close() !!}


@endsection