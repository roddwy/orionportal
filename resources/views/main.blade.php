<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | ORION BIENES RAICES</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<style>
		body{
			background-color: #BDBDBD;
		}
		h1{
			color:#fff;
			margin-top:0;
			margin-bottom: 0;
		}
		h3{
			font-size: 20px;
		}
		.navbar{
			margin-bottom: -20px;
			background-color: #000;
		}
		
		
		.col-md-12{
			padding: 0;
		}	

		.img-principal{
			max-height: 150px;
			max-width: 150px;
		}
		
		section {
			margin: 0%;
			padding: 2%;
			background-color: #000;
		}
		form {
				margin:25px;
				background-color: #E8E6E7;
			}
		table{
			margin:20px;
			background-color:#E8E6E7; 
		}
		div.pagination{
			margin-left: 180px;
			background-color:#000;
		}

		
		
	</style>
</head>
<body>
	<header>
		@include('nav')
		@include('carousel')
	</header>
	
	
	<section>
		
		@yield('content')
	</section>

	@include('admin.template.partials.footer')
	
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.0.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>