@extends('admin.template.main')
@section('title', 'Crear Usuario')

@section('content')
 	
	
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('first_name', 'Nombres') !!}
			{!! Form::text('first_name', null, ['class' => 'form-control','placeholder' =>'Nombres', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', null, ['class' => 'form-control','placeholder' =>'Apellidos', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ci', 'Cédula de Identidad') !!}{!! Form::text('ci', null, ['class' => 'form-control','placeholder' =>'ci', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone', null, ['class' => 'form-control','placeholder' =>'Telefono fijo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cell_phone', 'No Celular') !!}
			{!! Form::text('cell_phone', null, ['class' => 'form-control','placeholder' =>'Celular Móvil', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email', null, ['class' => 'form-control','placeholder' =>'ejemplo@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name_user', 'Nombre de Usuario') !!}
			{!! Form::text('name_user', null, ['class' => 'form-control','placeholder' =>'Nombre Usuario', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control','placeholder' =>'************', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo Usuario') !!}
			{!! Form::select('type', ['admin' => 'Administrador','seller' => 'Asesor de venta ', 'secretary'=>'Secretaria'], null, ['class'=>'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection