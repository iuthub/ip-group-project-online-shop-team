@extends('layouts.app')

@section('content')

@if (Session::has('cart'))
<div class="row justify-content-center">
	<div class="col-sm-6">
		<ul class="list-group">
			@foreach ($products as $product)
				<li class="list-group-item"> 
					<table class="table table-sm  table-bordered text-center">
						<thead class="thead-dark">
						  <tr>
							<th scope="col">Name</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
						
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><strong>{{ $product['item']['name'] }}</strong></td>
							<td><strong><span class="badge">{{ $product['qty']}}</span></strong></td>
							<td><strong><span class="label">{{ $product['price'] }} $</span></strong></td>
							
						</tbody>
					  </table>
					  <div class="d-flex justify-content-around">
					  <a href="{{ route('product.incrementByOne',['id'=>$product['item']['id']]) }}">
						<button type="button" class="btn btn-primary "> Increment by 1 </button>
					</a>

					<a href="{{ route('product.reduceByOne',['id'=>$product['item']['id']]) }}">
						<button type="button" class="btn btn-danger"> Reduce by 1 </button>
					</a>

					<a href="{{ route('product.removeItem',['id'=>$product['item']['id']]) }}">
						<button type="button" class="btn btn-warning  text-light "> Reduce All </button>
					</a>
					  </div>
					
				</li>
			@endforeach

		</ul>
	</div>
</div>

<div class="container text-center">
		

			<div class="col-sm-12 ">
					<strong>Total: {{ $totalPrice }} $</strong>	
			</div>
	
			<div class="col-sm-12">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">
					Checkout
				</a>
			</div>
	@else
		
				<div class="col-sm-12 text-center">
						<h2 class="text-danger">No Items in Cart</h2>
				</div>
		
	@endif
</div>




@endsection
