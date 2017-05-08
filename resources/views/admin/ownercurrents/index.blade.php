@extends('admin.template.main')

@section('title', 'Listado de propietarios')

@section('content')
	<a href="{{ route('admin.ownercurrents.create') }}" class="btn btn-info">Registrar nuevo propietario</a>
	<!--BUSCADOR DE PROPIETARIOS-->
	{!! Form::open(['route'=>'admin.ownercurrents.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'Buscar x telefono o celular','aria-describedby'=>'search']) !!}
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" hidden="true"></span>
			</span>
		</div>
	{!! Form::close() !!}
	<!--FIN DEL BUSCADOR-->
	
	<hr>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Nombre propietario</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Celular</th>
				<th>Email</th>
				<th>Disponibilidad</th>
				<th>Cantidad Inmuebles</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($ownercurrents as $ownercurrent)
					<tr>
						<td>{{ $ownercurrent->id}}</td>
						<td>{{ $ownercurrent->first_name }}</td>
						<td>{{ $ownercurrent->last_name }}</td>
						<td>{{ $ownercurrent->phone }}</td>
						<td>{{ $ownercurrent->cell_phone }}</td>
						<td>{{ $ownercurrent->email }}</td>
						<td>{{ $ownercurrent->availability }}</td>
						<td>{{ count($ownercurrent->properties)}}</td>
						<td>
							<a href="{{ route('admin.ownercurrents.edit', $ownercurrent->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.ownercurrents.destroy', $ownercurrent->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
							<a href="{{ route('admin.properties.create', $ownercurrent->id ) }}" onclick="return confirm('¿Seguro que desea Agregar un Inmueble al usuario?')"class="btn btn-info">Agregar <span class="glyphicon glyphicon-home"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $ownercurrents->render() !!}
	</div>
@endsection