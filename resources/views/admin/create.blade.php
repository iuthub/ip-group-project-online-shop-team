@extends('layouts.app')
@section('content')
<div class="container">
	@if(Session::has('success'))
                <div class="alert alert-success text-center">
                {{ Session::get('success') }}
                </div>
            @endif
<form action="{{ route('product.add') }}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-secondary font-weight-bold">Product name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name">
   @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPrice1" class="text-secondary font-weight-bold">Price</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleInputPrice1" name="price">
  @error('price')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
 </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1" class="text-secondary font-weight-bold">Image</label>
   
      <input id="files" style="visibility:hidden;" name="userfile" accept="image/*" type="file">
    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="exampleFormControlFile1" name="image">
     @error('image')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputDescription" class="text-secondary font-weight-bold">Description</label>
    <input type="textarea" class="form-control @error('description') is-invalid @enderror" id="exampleInputDescription" name="description" height="400">
     @error('description')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
 </div>
 <div class="form-group">
    <label for="" class="text-secondary font-weight-bold">Category</label>
    <select id = "exampleInputCategory" name="category_id">
       <option value="1">Iphone</option>
        <option value="2">Ipad</option>
         <option value="3">IMac</option>
         <option value="4">Macbook Pro</option>
         <option value="5">Macbook Air</option>
         <option value="6">IWatch</option>
         <option value="7">AirPods</option>
    </select> 
 </div>
  
  <button type="submit" class="btn btn-primary">Create</button>
</form>

	</div>
@endsection













