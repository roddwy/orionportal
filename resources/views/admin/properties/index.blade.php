@extends('admin.template.main')

@section('title', 'Lista de Inmuebles')

@section('content')
	<h2>Registrar nueva zona</h2>
	<!--BUSCADOR DE INMUEBLES-->
	{!! Form::open(['route'=>'admin.properties.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('id', null, ['class'=>'form-control','placeholder'=>'Buscar Inmueble','aria-describedby'=>'search']) !!}
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" hidden="true"></span>
			</span>
		</div>
	{!! Form::close() !!}
	<!--FIN DEL BUSCADOR-->
	<hr>
	<hr>
		<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>TIPO DE PROPIEDAD</th>
				<th>CATEGORIA</th>
				<th>PROPIETARIO</th>
				<th>TEL/CEL PROPIETARIO</th>
				<th>FECHA INGRESO</th>
				<th>PRECIO VENTA</th>
				<th>PRECIO OFERTA</th>
				<th>COMISION</th>
				<th>ZONA</th>
				<th>CALLE</th>	
				<th>USUARIO</th>
				<th>TIPO USUARIO</th>
				<th>ESTADO</th>
				<th>ACCION</th>
				<th>IMAGENES</th>		
			</thead>
			<tbody>
				@foreach($properties as $property)
					<tr>
						<td>{{ $property->id }}</td>
						<td>{{ $property->type_property->name }}</td>
						<td>{{ $property->category->name }}</td>
						<td>{{ $property->owner_current->first_name.' '.$property->owner_current->last_name }}</td>
						<td>{{ $property->owner_current->phone.'/'.$property->owner_current->cell_phone }}</td>	
						<td>{{ $property->admission_date }}</td>		
						<td>{{ $property->sale_price }}</td>
						<td>{{ $property->offer_price }}</td>
						<td>{{ $property->comission }}</td>
						<td>{{ $property->zone->name }}</td>
						<td>{{ $property->street }}</td>
						<td>{{ $property->user->first_name.' '.$property->user->last_name }}</td>
						<td>
							@if($property->user->type == "admin")
								<span class="label label-danger">Administrador</span>
							@elseif($property->user->type == "seller")
								<span class="label label-primary">Asesor</span>
							@elseif($property->user->type == "secretary")
								<span class="label label-success">Secretaria</span>
							@elseif($property->user->type == "")
								<span class="label label-warning">No hay tipo de usuario</span>
							@endif
						</td>
						<td>{{ $property->state->name }}</td>
						<td>
							<a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.properties.destroy', $property->id) }}" onclick="return confirm('¿Seguro que deseas Eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
						<td>
							<div class="container-fluid">
							<div class="row">
								@foreach($property->images as $image)
									
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="../images/properties/{{ $image->name }}" class="img-responsive">
											</div>
										</div>
									
								@endforeach
							</div>
							</div>
							
						</td>
					</tr>
				@endforeach
			</tbody>		
		</table>
	</div>
	<hr>
	<div class="text-center">
		{!! $properties->render() !!}
	</div>
	
@endsection