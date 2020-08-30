@extends('layouts.pagelayout')
@section('page_content')
<div class="row">
	<div class="col-lg-12">
	<!-- Prodcut list -->
		@if(!empty($products))
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				@if(session('message'))
					<div class="alert alert-success">{{ session('message') }}</div>
				@endif
					<div class="pull-left">
						<h2>Product List </h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-success" href="{{ route('product.add') }}"> Add Product</a>
					</div>
						<br/> <br/>
				<table class="table table-striped task-table">
				<!-- Table Headings -->
					<thead>
						<th >Sno</th>
						<th >Name</th>
						<th >Color</th>
						<th >Description</th>
						<th >Price</th>
						<th >Action</th>
					</thead>
					<!-- Table Body -->
					<tbody>
					@php( $sno = 1 )
					@foreach($products as $product)
						<tr>
							<td class="table-text">
								<div>{{ $sno++ }}</div>
							</td>
							<td class="table-text">
								<div>{{$product->name}}</div>
							</td>
							<td class="table-text">
								<div>{{$product->color}}</div>
							</td>
							<td class="table-text">
								<div>{{$product->description}}</div>
							</td>
							<td class="table-text">
								<div>{{$product->price}}</div>
							</td>
							<td>
								<a href="{{ route('product.show', $product->id) }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
								<a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
