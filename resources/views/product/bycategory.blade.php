@extends('layouts.app')

@section('content')
<div class="products">
<h1>Category: {{ $category->name }}</h1>
@if (count($products)>0)
@foreach ($products as $product)
 <p> {{ $product->name }}</p>
 <p> {{ $product->price }}</p>  
<p><a href="{{ route('single.product', ['id'=>$product->id]) }}">View</a></p>
    
@endforeach
    @else
      <h1>No products in this Category</h1>     
@endif
</div>
@endsection
