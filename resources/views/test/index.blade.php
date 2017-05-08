<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	HOLA GLENEY
	<br><br>
	<h1>{{ $prueba->admission_date }}</h1>
	<hr>
	{{ $prueba->sale_price }}
	<hr>
	{{ $prueba->owner_current->first_name }} {{ $prueba->owner_current->last_name}}
</body>
</html>


 