@extends('admin.template.main')

@section('title', 'Creacion de inmueble')

@section('content')

<h1>Creacion del inmueble para el cliente propietario {{ $ownercurrent->first_name.' '.$ownercurrent->last_name}}</h1>
	{!!Form::open(['route'=>'admin.properties.store', 'method'=>'POST', 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('admission_date', 'Fecha de entrada') !!}
		{!! Form::text('admission_date', null, ['class'=>'form-control', 'placeholder'=>'introduzca la  fecha de ingreso', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('sale_price', 'Precio de venta') !!}
		{!! Form::text('sale_price', null, ['class'=>'form-control', 'placeholder'=>'introduzca el precio de venta', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('offer_price', 'Precio de oferta') !!}
		{!! Form::text('offer_price', null, ['class'=>'form-control', 'placeholder'=>'introduzca el precio de oferta', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('comission', 'Comision') !!}
		{!! Form::text('comission', null, ['class'=>'form-control', 'placeholder'=>'introduzca la comision', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('financing', 'Financiamiento') !!}
		{!! Form::text('financing', null, ['class'=>'form-control', 'placeholder'=>'introduzca el finaciamiento', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('building', 'edificio') !!}
		{!! Form::text('building', null, ['class'=>'form-control', 'placeholder'=>'introduzca el edificio', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('piso', 'Piso') !!}
		{!! Form::text('piso', null, ['class'=>'form-control', 'placeholder'=>'introduzca el piso', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('no_dpto', 'No Departamento') !!}
		{!! Form::text('no_dpto', null, ['class'=>'form-control', 'placeholder'=>'introduzca el No Depertamento', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('referencies', 'Referencias') !!}
		{!! Form::text('referencies', null, ['class'=>'form-control', 'placeholder'=>'introduzca algunas Referencias', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('antiquily', 'Antiguedad') !!}
		{!! Form::text('antiquily', null, ['class'=>'form-control', 'placeholder'=>'introduzca la antiguedad', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('legal_document', 'Documento Legal') !!}
		{!! Form::text('legal_document', null, ['class'=>'form-control', 'placeholder'=>'introduzca doc legal', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('avaluo', 'Avaluo') !!}
		{!! Form::text('avaluo', null, ['class'=>'form-control', 'placeholder'=>'introduzca el Avaluo', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('delivery_time', 'Tiempo de entraga') !!}
		{!! Form::text('delivery_time', null, ['class'=>'form-control', 'placeholder'=>'introduzca el tiempo de entrega', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('additional_inf', 'Informacion adicional') !!}
		{!! Form::text('additional_inf', null, ['class'=>'form-control', 'placeholder'=>'introduzca alguna informacion adicional', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bedrooms', 'Cuartos') !!}
		{!! Form::text('bedrooms', null, ['class'=>'form-control', 'placeholder'=>'introduzca cuartos', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('kitchens', 'Cocinas') !!}
		{!! Form::text('kitchens', null, ['class'=>'form-control', 'placeholder'=>'introduzca cocinas', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bathrooms', 'Baños') !!}
		{!! Form::text('bathrooms', null, ['class'=>'form-control', 'placeholder'=>'introduzca baños', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('livingrooms', 'Salas') !!}
		{!! Form::text('livingrooms', null, ['class'=>'form-control', 'placeholder'=>'introduzca salas', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('garages', 'Garajes') !!}
		{!! Form::text('garages', null, ['class'=>'form-control', 'placeholder'=>'introduzca garajes', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('asensors', 'Asensor') !!}
		{!! Form::text('asensors', null, ['class'=>'form-control', 'placeholder'=>'introduzca asensor', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('suite', 'Suite') !!}
		{!! Form::text('suite', null, ['class'=>'form-control', 'placeholder'=>'introduzca Suite', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('pantry', 'Despensa') !!}
		{!! Form::text('pantry', null, ['class'=>'form-control', 'placeholder'=>'introduzca despensa', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('deskrooms', 'Escritorio') !!}
		{!! Form::text('deskrooms', null, ['class'=>'form-control', 'placeholder'=>'introduzca escritorio', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('servicesrooms', 'cuarto de servicio') !!}
		{!! Form::text('servicesrooms', null, ['class'=>'form-control', 'placeholder'=>'introduzca cuarto de servicios', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('storages', 'Almacen') !!}
		{!! Form::text('storages', null, ['class'=>'form-control', 'placeholder'=>'introduzca Almacen', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('others', 'Otros') !!}
		{!! Form::text('others', null, ['class'=>'form-control', 'placeholder'=>'introduzca otros', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('surface_area', 'Superficie de area') !!}
		{!! Form::text('surface_area', null, ['class'=>'form-control', 'placeholder'=>'introduzca la superficie de area', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('surface_builder', 'Superficie contruida') !!}
		{!! Form::text('surface_builder', null, ['class'=>'form-control', 'placeholder'=>'introduzca la superficie construida', 'required']) !!}
	</div>
	<h2>DIRECCION DEL INMUEBLE</h2>
	<div class="form-group">
		{!! Form::label('street', 'Calle') !!}
		{!! Form::text('street', null, ['class'=>'form-control', 'placeholder'=>'introduzca la calle', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('zone_id', 'Zona') !!}
		{!! Form::select('zone_id', $zones, null, ['class'=>'form-control', 'placeholder'=>'introduzca zona', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('maps', 'Mapa de Google') !!}
		{!! Form::text('maps', null, ['class'=>'form-control', 'placeholder'=>'introduzca url de google maps', 'required']) !!}
	</div>
	<h2>CATEGORIA</h2>
	<div class="form-group">
		{!! Form::label('category_id', 'Categoria') !!}
		{!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'placeholder'=>'introduzca la categoria', 'required']) !!}
	</div>
	<h2>TIPO DE PROPIEDAD</h2>
	<div class="form-group">
		{!! Form::label('type_property_id', 'tipo de propiedad') !!}
		{!! Form::select('type_property_id', $typeproperties, null, ['class'=>'form-control', 'placeholder'=>'introduzca el tipo de propiedad', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('owner_current_id', 'NOMBRE DEL PROPIETARIO ACTUAL')!!}
		{!! Form::text('owner_current_id', $ownercurrent->id, ['class'=>'form-control', 'placeholder'=>'id de propietario', 'required', 'style'=>'display:none']) !!}
	</div>
	<h2>ESTADO DE PROPIEDAD</h2>
	<div class="form-group">
		{!! Form::label('state_id', 'tipo de propiedad') !!}
		{!! Form::select('state_id', $states, null, ['class'=>'form-control', 'placeholder'=>'Seleccione un Estado', 'required']) !!}
	</div>
	<h2>IMAGENES</h2>
	<div class="form-group">
		{!! Form::label('image', 'Imagen') !!}
		{!! Form::file('image[]', ['multiple']) !!}
	</div>
	<h2>{{ $ownercurrent->first_name.' '.$ownercurrent->last_name}}</h2>
	<div class="form-group">
		{!! Form::submit('Registrar Inmueble', ['class'=>'btn btn-primary'])!!}
	</div>	
	{!!Form::close()!!}
@endsection