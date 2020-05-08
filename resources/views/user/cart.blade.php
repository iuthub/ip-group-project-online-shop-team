@extends('layouts.app')

@section('content')
@if(count($user->products)>0)
@foreach ($user->products as $product)
    <div class="Item">
        <p>{{ $product->name }}</p>
        <p>{{ $product->price }}</p>
    </div>

<a href="{{ route('user.checkout') }}">Make an order</a>    
@endforeach
@else
<h1>Your Cart is Empty</h1>
@endif
@endsection
