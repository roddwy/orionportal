@extends('admin.template.main')

@section('title', 'Creacion de inmueble')

@section('content')

<h1>Actualización del inmueble con id {{$property->id}}</h1>
	{!! Form::open(['route' => ['admin.properties.update', $property], 'method' => 'PUT','files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('admission_date', 'Fecha de entrada') !!}
		{!! Form::text('admission_date', $property->admission_date, ['class'=>'form-control', 'placeholder'=>'introduzca la  fecha de ingreso', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('sale_price', 'Precio de venta') !!}
		{!! Form::text('sale_price', $property->sale_price, ['class'=>'form-control', 'placeholder'=>'introduzca el precio de venta', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('offer_price', 'Precio de oferta') !!}
		{!! Form::text('offer_price', $property->offer_price, ['class'=>'form-control', 'placeholder'=>'introduzca el precio de oferta', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('comission', 'Comision') !!}
		{!! Form::text('comission', $property->comission, ['class'=>'form-control', 'placeholder'=>'introduzca la comision', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('financing', 'Financiamiento') !!}
		{!! Form::text('financing', $property->financing, ['class'=>'form-control', 'placeholder'=>'introduzca el finaciamiento', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('building', 'edificio') !!}
		{!! Form::text('building', $property->building, ['class'=>'form-control', 'placeholder'=>'introduzca el edificio', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('piso', 'Piso') !!}
		{!! Form::text('piso', $property->piso, ['class'=>'form-control', 'placeholder'=>'introduzca el piso', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('no_dpto', 'No Departamento') !!}
		{!! Form::text('no_dpto', $property->no_dpto, ['class'=>'form-control', 'placeholder'=>'introduzca el No Depertamento', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('referencies', 'Referencias') !!}
		{!! Form::text('referencies', $property->referencies, ['class'=>'form-control', 'placeholder'=>'introduzca algunas Referencias', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('antiquily', 'Antiguedad') !!}
		{!! Form::text('antiquily', $property->antiquily, ['class'=>'form-control', 'placeholder'=>'introduzca la antiguedad', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('legal_document', 'Documento Legal') !!}
		{!! Form::text('legal_document', $property->legal_document, ['class'=>'form-control', 'placeholder'=>'introduzca doc legal', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('avaluo', 'Avaluo') !!}
		{!! Form::text('avaluo', $property->avaluo, ['class'=>'form-control', 'placeholder'=>'introduzca el Avaluo', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('delivery_time', 'Tiempo de entraga') !!}
		{!! Form::text('delivery_time', $property->delivery_time, ['class'=>'form-control', 'placeholder'=>'introduzca el tiempo de entrega', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('additional_inf', 'Informacion adicional') !!}
		{!! Form::text('additional_inf', $property->additional_inf, ['class'=>'form-control', 'placeholder'=>'introduzca alguna informacion adicional', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bedrooms', 'Cuartos') !!}
		{!! Form::text('bedrooms', $property->bedrooms, ['class'=>'form-control', 'placeholder'=>'introduzca cuartos', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('kitchens', 'Cocinas') !!}
		{!! Form::text('kitchens', $property->kitchens, ['class'=>'form-control', 'placeholder'=>'introduzca cocinas', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bathrooms', 'Baños') !!}
		{!! Form::text('bathrooms', $property->bathrooms, ['class'=>'form-control', 'placeholder'=>'introduzca baños', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('livingrooms', 'Salas') !!}
		{!! Form::text('livingrooms', $property->livingrooms, ['class'=>'form-control', 'placeholder'=>'introduzca salas', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('garages', 'Garajes') !!}
		{!! Form::text('garages', $property->garages, ['class'=>'form-control', 'placeholder'=>'introduzca garajes', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('asensors', 'Asensor') !!}
		{!! Form::text('asensors', $property->asensors, ['class'=>'form-control', 'placeholder'=>'introduzca asensor', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('suite', 'Suite') !!}
		{!! Form::text('suite', $property->suite, ['class'=>'form-control', 'placeholder'=>'introduzca Suite', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('pantry', 'Despensa') !!}
		{!! Form::text('pantry', $property->pantry, ['class'=>'form-control', 'placeholder'=>'introduzca despensa', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('deskrooms', 'Escritorio') !!}
		{!! Form::text('deskrooms', $property->deskrooms, ['class'=>'form-control', 'placeholder'=>'introduzca escritorio', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('servicesrooms', 'cuarto de servicio') !!}
		{!! Form::text('servicesrooms', $property->servicesrooms, ['class'=>'form-control', 'placeholder'=>'introduzca cuarto de servicios', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('storages', 'Almacen') !!}
		{!! Form::text('storages', $property->storages, ['class'=>'form-control', 'placeholder'=>'introduzca Almacen', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('others', 'Otros') !!}
		{!! Form::text('others', $property->others, ['class'=>'form-control', 'placeholder'=>'introduzca otros', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('surface_area', 'Superficie de area') !!}
		{!! Form::text('surface_area', $property->surface_area, ['class'=>'form-control', 'placeholder'=>'introduzca la superficie de area', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('surface_builder', 'Superficie contruida') !!}
		{!! Form::text('surface_builder', $property->surface_builder, ['class'=>'form-control', 'placeholder'=>'introduzca la superficie construida', 'required']) !!}
	</div>
	<h2>DIRECCION DEL INMUEBLE</h2>
	<div class="form-group">
		{!! Form::label('street', 'Calle') !!}
		{!! Form::text('street', $property->street, ['class'=>'form-control', 'placeholder'=>'introduzca la calle', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('zone_id', 'Zona') !!}
		{!! Form::select('zone_id', $zones, $property->zone_id, ['class'=>'form-control']) !!}
		
	</div>
	<div class="form-group">
		{!! Form::label('maps', 'Mapa de Google') !!}
		{!! Form::text('maps', $property->maps, ['class'=>'form-control', 'placeholder'=>'introduzca url de google maps', 'required']) !!}
	</div>
	
	<h2>CATEGORIA</h2>
	<div class="form-group">
		{!! Form::label('category_id', 'Categoria') !!}
		{!! Form::select('category_id', $categories, $property->category_id, ['class'=>'form-control']) !!}
	</div>

	<h2>TIPO DE PROPIEDAD</h2>
	<div class="form-group">
		{!! Form::label('type_property_id', 'tipo de propiedad') !!}
		{!! Form::select('type_property_id', $typeproperties, $property->type_property_id, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('owner_current_id', 'ID DEL PROPIETARIO ACTUAL')!!}
		{!! Form::text('owner_current_id', $property->owner_current_id, ['class'=>'form-control', 'placeholder'=>'id de propietario', 'required']) !!}
	</div>
	<h2>ESTADO DE PROPIEDAD</h2>
	<div class="form-group">
		{!! Form::label('state_id', 'tipo de propiedad') !!}
		{!! Form::select('state_id', $states, $property->state_id, ['class'=>'form-control']) !!}
	</div>

	<!--<h2>IMAGENES</h2>
	<div class="form-group">
		{!! Form::label('image', 'Imagen') !!}
		{!! Form::file('image[]', ['multiple']) !!}
	</div>-->
	
	<div class="form-group">
		{!! Form::submit('Actualizar Inmueble', ['class'=>'btn btn-primary'])!!}
	</div>	
	{!!Form::close()!!}
@endsection