@extends('admin.template.main')
@section('title', 'Editar Usuario'.$user->first_name)

@section('content')
	<h1>{{ $user->first_name.' '.$user->last_name }}</h1>
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('first_name', 'Nombres') !!}
			{!! Form::text('first_name', $user->first_name, ['class' => 'form-control','placeholder' =>'Nombres', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', $user->last_name, ['class' => 'form-control','placeholder' =>'Apellidos', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ci', 'Cédula de Identidad') !!}
			{!! Form::text('ci', $user->ci, ['class' => 'form-control','placeholder' =>'ci', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone', $user->phone, ['class' => 'form-control','placeholder' =>'Telefono fijo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cell_phone', 'No Celular') !!}
			{!! Form::text('cell_phone', $user->cell_phone, ['class' => 'form-control','placeholder' =>'Celular Móvil', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' =>'ejemplo@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name_user', 'Nombre de Usuario') !!}
			{!! Form::text('name_user', $user->name_user, ['class' => 'form-control','placeholder' =>'Nombre Usuario', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::text('password',$user->password,['class' => 'form-control','placeholder' =>'************', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo Usuario') !!}
			{!! Form::select('type', ['admin'=>'Administrador', 'seller'=>'Asesor', 'secretary'=>'secretaria'], $user->type, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection