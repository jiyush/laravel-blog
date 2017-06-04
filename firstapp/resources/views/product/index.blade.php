@extends('layouts.layout')

@section('title')
	all products
@stop

@section('body')

	
	<table border="1">
	<tr>
		<td>name</td>
		<td>price</td>
		<td>Edit</td>
		<td>Delet</td>
	</tr>
	@foreach($products as $product)
	<tr>
		<td>{{ $product->name }}</td>
		<td>{{ $product->price }}</td>
		<td><a href="/product/{{ $product->id }}/edit">Edit</a></td>
		<td><a href="/product/{{ $product->id }}">Delet</a></td>
	</tr>
	@endforeach	
	 	
	 
	 </table>
	
@stop