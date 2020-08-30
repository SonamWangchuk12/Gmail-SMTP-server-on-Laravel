@extends('layouts.pagelayout')
@section('page_content')
<div class="row">
<div class="col-lg-offset-3 col-lg-6">
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach()
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
Add a New Product 
</div>
<div class="panel-body">
	<form action="{{route('product.insert')}}" method="POST" name="csrf_token">
		@csrf
<div class="form-group">
	<input type="text" name="name" id="product_name" class="form-control required" placeholder="Enter Product Name">
</div>
<div class="form-group">
	<input type="text" name="color" id="product_color" class="form-control required" placeholder="Enter Product Color">
</div>
<div class="form-group">
	<input type="text" name="description" id="product_description" class="form-control required" placeholder="Enter Product Description">
</div>
<div class="form-group">
<input type="text" name="price" id="product_price" class="form-control required" placeholder="Enter Product Price">
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-6">
<input type="submit" class="btn btn-success" value="Add Product" />
<a href="{{ url('products') }}" class="btn btn-primary">Back</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
