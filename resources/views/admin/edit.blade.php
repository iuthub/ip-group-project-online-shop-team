@extends('layouts.app')
@section('content')


<div class="container">
	
<form action="{{ route('product.edited') }}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="name" value="{{ $product->name }}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputPrice1">Price</label>
    <input type="text" class="form-control" id="exampleInputPrice1" name="price" value="{{ $product->price }}">
 </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{ $product->image}}">
  </div>
  <div class="form-group">
    <label for="exampleInputDescription">Description</label>
    <input type="textarea" class="form-control" id="exampleInputDescription" name="description" height="400"value="{{ $product->description }}">
 </div>
 @csrf
   <input type="hidden" name="id" value="{{ $productId }}">
  <button type="submit" class="btn btn-primary">Save</button>
</form>

	</div>
@endsection
