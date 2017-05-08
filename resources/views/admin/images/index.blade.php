@extends('admin.template.main')

@section('title','Home')

@section('content')
    <h1>TODAS LAS IMAGENES</h1>
    <div class="container-fluid">
   <div class="row">
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="../images/properties/{{$image->name}}" class="img-responsive" >
					</div>
				</div>
			</div>
		@endforeach
	</div>
	</div>
@endsection