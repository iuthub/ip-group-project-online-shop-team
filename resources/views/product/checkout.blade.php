@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-6">
		<h1>Checkout</h1>
		<h4>Your Total:${{ $total }}</h4>
		<form action="{{ route('checkout') }}" method = "post" id="checkout-form">
			@csrf
			Name:
			<input type="text" name="name" id="name" >
			<br>
			Address:
			<input type="text" id="address" name="address">
			<br>
			Shopping Cart:
			<input type="text" id="creditcardnumber" name="creditcardnumber" >
			<br>
			@csrf
			
				<button type="submit" class="btn btn-success">Buy</button>
		</form>
	</div>
</div>

@endsection
