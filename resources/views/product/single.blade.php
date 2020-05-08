@extends('layouts.app')

@section('content')
	<div class="container">
		
	<div class="name">
		<h1>{{ $product->name }}</h1>
	</div>
	<div>
		
	<div class="image">
		<p> <img src="" alt=""></p>
	</div>
	<div class="description">
		<p>{{  $product->description}}</p>
	</div>

	</div>

<div class="price">
	<p>{{ $product->price }}</p>
	<br>
	<a href="{{ route('product.addToCart',['id'=>$product->id]) }}">Add to Card</a>
</div>



	</div>







</div>
@endsection
