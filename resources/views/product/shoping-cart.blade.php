@extends('layouts.app')

@section('content')
=@if (Session::has('cart'))
<div class="row">
	<div class="col-sm-6">
		<ul class="list-group">
			@foreach ($products as $product)
				<li class="list-group-item"> 
					<span class="badge">{{ $product['qty']}}</span>
					<strong>{{ $product['item']['name'] }}</strong>
					<span class="label">{{ $product['price'] }}</span>
					<div class="btn-group">
						<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action
							
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Reduce by 1</a></li>
							<li><a href="#">Reduce All</a></li>
						
						</ul>
					</div>

				</li>
			@endforeach

		</ul>
	</div>
</div>
	<div class="row">
	<div class="col-sm-6">
			<strong>Total: {{ $totalPrice }}</strong>
					</div>
				</div>
				<div class="row">
	<div class="col-sm-6">
			<a href="{{ route('checkout') }}" type="button" class="btn btn-success">
				Checkout
			</a>
				</div>
			</div>
@else
	<div class="row">
	<div class="col-sm-6">
			<h2>No Items in Cart</h2>
				</div>
			</div>
@endif



@endsection
