@extends('layouts.app')
@section('content')
@if(Session::has('info'))
  <h1 class="text-success text-center pt-3 mb-3">
		{{   Session::get('info') }}
    
	</h1>

@endif
<div class="container">
    <table class="table table-light">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col"> </th>
          <th scope="col"> </th>
        </tr>
      </thead>
    @foreach($products as $product)
      <tbody>
        <tr>
          <th scope="row">{{ $product->id}}</th>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }} $</td>
          <td><a href=" {{ route('admin.edit',['id'  => $product->id ]) }} ">
            <button type="button" class="btn btn-success">Edit</button></a></td>
          <td><a href="{{ route('product.delete', ['id' =>$product->id ]) }}">
            <button type="button" class="btn btn-danger">Delete</button></a></td>
          @endforeach
    </table>

  
</div>
@endsection
