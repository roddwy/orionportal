@extends('admin.template.main')

@section('title', 'Lista de Zonas')

@section('content')
	<a href="{{ route('admin.zones.create') }}" class="btn btn-info">Registrar nueva zona</a>
	<!--BUSCADOR DE ZONAS-->
	{!! Form::open(['route'=>'admin.zones.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Buscar Zonas','aria-describedby'=>'search']) !!}
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
				<th>Nombre Zona</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($zones as $zone)
					<tr>
						<td>{{ $zone->id}}</td>
						<td>{{ $zone->name }}</td>
						<td>
							<a href="{{ route('admin.zones.edit', $zone->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.zones.destroy', $zone->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $zones->render() !!}
	</div>
@endsection