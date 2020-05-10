@extends('layouts.app')

@section('content')
<div class="container">
	 @if(Session::has('success'))
                <div class="alert alert-success text-center">
                {{ Session::get('success') }}
                </div>
            @endif
	<strong><h1  class=" text-center text-secondary">Checkout</h1></strong>
	
<div class="row justify-content-center">
	<div class="col-sm-6 bg-secondary text-light">
		
		<h4 class="text-center pt-3"><span class="text-light"> Total:</span> <strong>{{ $total }} $ </strong></h4>
		
		<form class="form-horizontal" action="{{ route('postcheckout') }}" method = "post" id="checkout-form" >
			{{csrf_field()}}
			<div class="form-group ">
			  <div class="col-sm-12">
				<input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"  name ="name" placeholder="Enter your name">
				@error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-sm-12">
				<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter your addess">
				@error('address')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
			  </div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
				  <input type="text" class="form-control @error('creditcardnumber') is-invalid @enderror" id="creditcardnumber" name="creditcardnumber" placeholder="Enter your shopping cart">
				  @error('creditcardnumber')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
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
