<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Detalles') | ORION BIENES RAICES</title>
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">	
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.0.js') }}"></script>
	<style>
		body{
    		background-color: #EBE6E7;
		}
		.linavbar{
			font-family: 'Fjalla One', sans-serif;
			font-size: 20px;
		}
		.titulonavbar{
			font-family: 'Anton', sans-serif;
			font-size: 30px;

		}
		.navbar{
			margin-bottom: 5px;
			background-color: #BB1F35;
		}
		.navbar-form{
			background: #BB1F35;
			padding: 15px;
		}
		.row{
			margin:2%;
			background-color: #fff;
		}

		.row-detalle{
			margin:0%;
		}
		
		li.detalle{
			font-size: 10px;
		}
		
		.panel{			
			margin-right: 2%;
			margin-left: 2%;
			
			margin-bottom: 5px;
		}

		.img{
		    height: 80px;
		    width: 78px;
		    border: 3px solid grey;
		}
		.fondo{
			background: #000;
		}
		#contenedor{
			background-color: #000;
		}
		h1{
			color:red;
			font-size: 30px;
		}
		h3{
			margin:0px;
		}
		/*#bggaleria{
		    position: fixed;
		    background: rgba(0,0,0,0.7);
		    width: 100%;
		    height: 100%;
		    top: 0;
		    left: 0;
		    z-index: 1;
		    display: none;
		}
*/
		#galeria{
		    
		    background-color: grey;
		    width: 100%;
		    height: 100%;
		    /*top: 50%;
		    left: 50%;*/
		    /*margin-top: -300px;
		    margin-left: -250px;*/
		}

		/*#cerrar{
		    position: absolute;
		    margin-left: 220px;
		    margin-top: 410px;
		}

		#cerrar a{
		    color: #dbdce1;
		    text-decoration: none;
		    font-family: Helvetica;
		    padding: 8px;
		    background-color: #11219b;
		}

		#cerrar a:hover{
		    background-color: #c42D3f;
		    padding: 8px;
		    color: #000;
		}*/

		#map{
			outline: 2px solid grey;
			
			width: 100%;
			height: 450px;
		}
		footer{
			background: white;
		}
	</style>
	<script>
		$(function(){
                $('#contenedor img').on({
                    mouseover: function(){
                        $(this).css({
                            'cursor':'pointer',
                            'border-color':'orange'
                        });
                    },
                    mouseout: function(){
                        $(this).css({
                            'cursor':'default',
                            'border-color':'grey'
                        });
                    },
                    click: function(){
                        var UrlImage = $(this).attr('src');
                        $('#principal').fadeOut(300, function(){
                            $(this).attr('src', UrlImage);
                        }).fadeIn(300);
                    }
                });
                /*$(".open").click(function(){
                    $('#bggaleria').fadeIn(300);
                });
                $(".close").click(function(){
                    $('#bggaleria').fadeOut(300);
                });*/
            });
	</script>
	<script>
		$(function() {
	  	  // elementos de la lista
		  var menues = $(".nav li"); 
		  // manejador de click sobre todos los elementos
		  	menues.click(function() {
		     // eliminamos active de todos los elementos
		     menues.removeClass("active");
		     // activamos el elemento clicado.
		     $(this).addClass("active");
		  });

		});
	</script>
</head>
<body>
	<header>
		@include('nav')	
	</header>
	

	<div class="panel panel-default">
	  <div class="panel-heading">Detalle del Inmueble</div>
	  <div class="panel-body">
	  	<div class="row row-detalle">
	  		<div class="col-md-6">
		  		<ul class="list-group">
				  <li class="list-group-item detalle"><strong>Id </strong>{{$property->id}}</li>
				  <li class="list-group-item detalle"><strong>Zona </strong>{{$property->zone->name}}</li>
				  <li class="list-group-item detalle"><strong>Fecha </strong>{{$property->admission_date}}</li>				  
				</ul>
			</div>
			<div class="col-md-6">
		  		<ul class="list-group">
				  <li class="list-group-item detalle"><strong>Precio </strong>{{$property->sale_price}} $</li>
				  <li class="list-group-item detalle"><strong>Sup. Terreno </strong>{{$property->surface_area}}</li>
				  <li class="list-group-item detalle"><strong>Sup. Contruida </strong>{{$property->surface_builder}}</li>				  
				</ul>
			</div>
	  	</div>
	  	
	  </div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">Fotos y mapa</div>
		<div class="panel-body">
			<div class="col-md-6">
				    <!--<a href="#" class="open">
			        <img id="thumbnail" height="350" width="100%" 
			          style="border: 3px solid grey"
			          src="../images/properties/{{$property->images->first()->name}}" />
			    </a>-->	
				<!--<div id="bggaleria">-->
			            <div id="galeria">
			               <!-- <div id="cerrar">
			                    <a href="#" class="close">Cerrar</a>
			                </div>-->
			                <img id="principal" height="350" width="100%" style="border:3px solid grey" src="../images/properties/{{$property->images->first()->name}}">
			               <br />
			               <div class="row">
				               <div id="contenedor">
				               		<div class="col-md-12 fondo">
					                   	@foreach($property->images as $imagen)
											<img src="../images/properties/{{$imagen->name}}" class="img">
										@endforeach
									</div>
				               </div>
				            </div>
			            </div>
			    <!--</div>-->
			</div>    
    	

			<div class="col-md-6">
				<div id="map">
			    	<iframe src="{{$property->maps}}" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
			    </div>
			</div>
		</div>
    </div>
	<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</footer>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	
</body>
</html>