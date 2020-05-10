@extends('layouts.app')
@section('content')


<div class="container">
	@if(Session::has('success'))
      <div class="alert alert-success text-center">
      {{ Session::get('success') }}
      </div>
  @endif
<form action="{{ route('product.edited') }}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"name="name" value="{{ $product->name }}">
    @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
   
  </div>

  <div class="form-group">
    <label for="exampleInputPrice1">Price</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleInputPrice1" name="price" value="{{ $product->price }}">
    @error('price')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
 </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="exampleFormControlFile1" name="image" value="{{ $product->image}}">
    @error('image')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputDescription">Description</label>
    <input type="textarea" class="form-control @error('description') is-invalid @enderror" id="exampleInputDescription" name="description" height="400"value="{{ $product->description }}">
    @error('description')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
 </div>
 @csrf
   <input type="hidden" name="id" value="{{ $productId }}">
  <button type="submit" class="btn btn-primary">Save</button>
</form>

	</div>
@endsection
