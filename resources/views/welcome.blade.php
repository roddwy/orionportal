@extends('main')

@section('title','Home')

@section('content')  

<hr>
<div class="row rowtitulo">
	<div class="col-md-12">
		<h1 class="text-center">Bienvenido a Bienes Raices Orion</h1>
	</div>	
</div>


<!-- CARGA DE LOS INMUEBLES -->
<div class="row">
   @foreach($properties as $property)
   		<!--@if(($property->state->name) != 'Inactivo' && ($property->state->name) !='Vendido')-->
	  		<div class="col-md-4">
	    		<div class="thumbnail"> 	    			
		    			<h3 class="text-center">{{$property->type_property->name}} en {{ $property->category->name }}</h3>
		    				<h3 class="text-center">{{ $property->state->name }}</h3>
		    				<!--{{ count($property->images) }}-->

		    				@if(count($property->images)!=0)
		    				<a href="{{ route('detailproperty', $property->id ) }}">
								<img src="images/properties/{{$property->images->first()->name}}" class="img-responsive img-principal">
							@else
								<img src="images/properties/orion_1491116798.Page 10.png" class="img-responsive img-principal"alt="Descripción de esta maravillosa imagen">
							@endif	
							</a>    			
		      			<div class="caption">
		      				
			        		<p>En {{ $property->zone->name }} calle {{ $property->street}}</p>
			        		<p><a href="{{ route('detailproperty', $property->id ) }}" class="btn btn-danger btn-lg btn-block" role="button">Mas información</a></p>
		      			</div>    			
	    		</div>
	  		</div>
	  	<!--@endif-->			
	@endforeach 
</div>  
<!-- FIN DE CARGA DE LOS INMUEBLES -->

<!-- PAGINACION-->
	<div class="text-center">
		{!! $properties->render() !!}
	</div>
<!-- FIN DE PAGINACION-->
@endsection
