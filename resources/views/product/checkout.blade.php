@extends('layouts.app')

@section('content')
<div class="container">
	<strong><h1  class=" text-center text-secondary">Checkout</h1></strong>
	
<div class="row justify-content-center">
	<div class="col-sm-6 bg-secondary text-light">
		
		<h4 class="text-center pt-3"><span class="text-light"> Total:</span> <strong>{{ $total }} $ </strong></h4>
		
		<form class="form-horizontal" action="{{ route('postcheckout') }}" method = "post" id="checkout-form" >
			<div class="form-group ">
			  <div class="col-sm-12">
				<input type="text" class="form-control" id="name"  name ="name" placeholder="Enter your name">
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-sm-12">
				<input type="text" class="form-control" id="address" name="address" placeholder="Enter your addess">
			  </div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="creditcardnumber" name="creditcardnumber" placeholder="Enter your shopping cart">
				</div>
			  </div>
			<div class="form-group">
			  <div class="col-sm-offset-2 col-sm-12 text-center">
				@csrf
				<button type="submit" class="btn btn-success">Buy</button>
			  </div>
			</div>
		  </form>
	</div>
</div>
</div>
@endsection
