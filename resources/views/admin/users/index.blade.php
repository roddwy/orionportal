@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><hr>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Ci</th>
				<th>Teléfono</th>
				<th>Celular</th>
				<th>Email</th>
				<th>Cant prop registrados</th>
				<th>Tipo Usuario</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->first_name }}</td>
						<td>{{ $user->last_name }}</td>
						<td>{{ $user->ci }}</td>
						<td>{{ $user->phone }}</td>
						<td>{{ $user->cell_phone }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ count($user->owner_currents)}}</td>
						<td>
							@if($user->type == "admin")
								<span class="label label-danger">Administrador</span>
							@elseif($user->type == "seller")
								<span class="label label-primary">Asesor</span>
							@elseif($user->type == "secretary")
								<span class="label label-success">Secretaria</span>
							@elseif($user->type == "")
								<span class="label label-warning">No hay tipo de usuario</span>
							@endif
						</td>
						<td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>		
		</table>
	</div>
	<hr>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
	
@endsection