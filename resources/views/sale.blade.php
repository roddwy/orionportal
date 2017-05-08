@extends('main')

@section('title','Ofertas')

@section('content') 

<hr>
<h1>Bienvenido a Ofertas</h1>
<hr>
<!-- CARGA DE LOS INMUEBLES -->
<div class="row">
  	@foreach($properties as $property)
	  		<div class="col-md-4">
	    		<div class="thumbnail"> 
	    			<h3>OFERTA</h3>
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
		
	</div>
<!-- FIN DE PAGINACION-->
@endsection