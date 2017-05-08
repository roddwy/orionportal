<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<style>
		nav.navbar {
    			background-color: #C25C53;
    			margin-right: 50px;
    			margin-left: 50px;
			}	

		section {
			margin: 50px;
			padding: 20px;
			background-color: #E8E6E7;
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
	@include('admin.template.partials.nav')
	
	<section>
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content')
	</section>

	@include('admin.template.partials.footer')
	
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.0.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>