@extends('layouts.layout')

@section('title')
edit product
@stop

@section('body')
	
	<form action="{{ route::['product.update'] }} " method="put" >
	
			name:<input type="text" name="name" value="{{ $products->name }}"><br/>
		price:<input type="text" name="price" value="{{ $products->price }}"><br/>
		<input type="submit" value="update">
	</form>

@stop