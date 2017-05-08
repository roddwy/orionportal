@extends('main')

@section('title','Busquedas')

@section('content') 

{!! Form::model(Request::all(),['route'=>'search', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
		<div class="form-group">
			{!! Form::select('type_property_id',$types ,null, ['class'=>'form-control','placeholder'=>'Buscar x tipo']) !!}
			{!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'placeholder'=>'Buscar x categoria']) !!}
		
			{!! Form::select('zone_id', $zones, null, ['class'=>'form-control', 'placeholder'=>'Zona']) !!}
			{!! Form::text('sale_price', null, ['class'=>'form-control', 'placeholder'=>'Buscar x precio']) !!}
			<button type="submit" class="btn btn-default">Buscar</button>
		</div>
{!! Form::close() !!}

<hr>
<h1>Bienvenido a Busquedas</h1>
<hr>
<!-- CARGA DE LOS INMUEBLES -->
<div class="row">
   @foreach($properties as $property)
	  		<div class="col-md-4">
	    		<div class="thumbnail"> 
	    			<h3>{{$property->type_property->name}} en {{ $property->category->name }} precio {{ $property->sale_price }}</h3>
	    			<h3>Superficie{{$property->surface_area}}</h3>
	    				<!--{{ count($property->images) }}-->
	    				@if(count($property->images)!=0)
							<img src="images/properties/{{$property->images->first()->name}}" class="img-responsive img-principal">
						@else
							<img src="images/properties/orion_1491116798.Page 10.png" class="img-responsive img-principal"alt="Descripción de esta maravillosa imagen">
						@endif	    			
	      			<div class="caption">
	      				
		        		<p>En {{ $property->zone->name }} calle {{ $property->street}}</p>
		        		<p><a href="{{ route('detailproperty', $property->id ) }}" class="btn btn-primary" role="button">Mas información</a></p>
	      			</div>
	    		</div>
	  		</div>			
	@endforeach 
</div>  
<!-- FIN DE CARGA DE LOS INMUEBLES -->
<hr>

<!-- PAGINACION-->
	<div class="text-center">
		{!! $properties->appends(Request::only(['type_property_id', 'category_id', 'zone_id', 'sale_price']))->render() !!}
	</div>
<!-- FIN DE PAGINACION-->
@endsection