@extends('layouts.app')

@section('content')
<link href="{{URL::to('css/styles.css')}}" rel="stylesheet">

	<div class="row">
		<div class="container">
			<div class="card text-center mx-auto" style="width: 25rem; ">
				<img class="card-img-top" src="{{ asset('public/image/'.$product->image )}}" alt="Card image cap" height="300" width="300">
				<div class="card-body">
					<h5 class="card-title">{{ $product->name }}</h5>
					<p class="card-price">{{ $product->price }} $</p>
					<p class="card-description">{{  $product->description}} </p>
					<a href="{{ route('product.addToCart',['id'=>$product->id]) }}" class="btn btn-primary">Add to Card</a>
				</div>
			</div>	
		
		</div>
	</div>
@endsection
