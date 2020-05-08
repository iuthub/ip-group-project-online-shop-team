@extends('layouts.app')
@section('content')
<div class="container">
	
<form action="{{ route('product.add') }}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
   
  </div>

  <div class="form-group">
    <label for="exampleInputPrice1">Price</label>
    <input type="text" class="form-control" id="exampleInputPrice1" name="price">
 </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputDescription">Description</label>
    <input type="textarea" class="form-control" id="exampleInputDescription" name="description" height="400">
 </div>
 <div class="form-group">
    <label for="">Category</label>
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













