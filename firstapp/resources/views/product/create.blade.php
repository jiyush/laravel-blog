@extends('layouts.layout')

@section('title')
create product
@stop

@section('body')
	
	<form action="/product" method="post" >
	{{ csrf_field() }}
		name:<input type="text" name="name"><br/>
		price:<input type="text" name="price"><br/>
		<input type="submit" value="create">
	</form>

@stop