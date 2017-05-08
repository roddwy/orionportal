@extends('admin.template.main')

@section('title', 'Listado de tipo de propiedad')

@section('content')
	<a href="{{ route('admin.typeproperties.create') }}" class="btn btn-info">Registrar nuevo tipo de propiedad</a>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Nombre Tipo Propertiedad</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($typeproperties as $typeproperty)
					<tr>
						<td>{{ $typeproperty->id}}</td>
						<td>{{ $typeproperty->name }}</td>
						<td>
							<a href="{{ route('admin.typeproperties.edit', $typeproperty->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.typeproperties.destroy', $typeproperty->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $typeproperties->render() !!}
	</div>
@endsection