@extends('layouts.pageLayout')
@section('page_content')
<style type="text/css">
.cust-table td{ padding: 10px; }
</style>
<div class="row">
<div class="col-lg-offset-3 col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
View Product Details 
</div>
<div class="panel-body">
<table class="cust-table">
<tr>
<th width="30%">Name</th><td>:</td><td width="69%">{{ $product->name }}</td>
</tr>
<tr>
<th width="30%">Color</th><td>:</td><td width="69%">{{ $product->color }}</td>
</tr>
<tr>
<th>Description</th><td>:</td><td>{{ $product->description }}</td>
</tr>
<tr>
<th width="30%">Price</th><td>:</td><td width="69%">{{ $product->price }}</td>
</tr>
<tr>
<th>Created At</th><td>:</td><td>{{ $product->created_at }}</td>
</tr>
<tr>
<td colspan="3"><a href="{{ route('product.index') }}" class="btn btn-primary"> Back</a></td>
</tr>
</table>
</div>
</div>
</div>
</div>
@endsection
