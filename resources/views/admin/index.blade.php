@extends('layouts.app')
@section('content')
@if(Session::has('info'))
	<p>
		{{   Session::get('info') }}

	</p>

@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
 @foreach($products as $product)
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td><a href=" {{ route('admin.edit',['id'  => $product->id ]) }} "><strong>Edit</strong></a></td>
      <td><a href="{{ route('product.delete', ['id' =>$product->id ]) }}"><strong>Delete</strong></a></td>
      @endforeach
</table>

  
</table>
@endsection
