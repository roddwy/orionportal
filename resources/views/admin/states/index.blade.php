@extends('admin.template.main')

@section('title', 'Lista de Estados')

@section('content')
	<a href="{{ route('admin.states.create') }}" class="btn btn-info">Registrar nueva zona</a>
	<!--BUSCADOR DE ZONAS-->
	
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
				@foreach($states as $state)
					<tr>
						<td>{{ $state->id}}</td>
						<td>{{ $state->name }}</td>
						<td>
							<a href="{{ route('admin.states.edit', $state->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.states.destroy', $state->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $states->render() !!}
	</div>
@endsection