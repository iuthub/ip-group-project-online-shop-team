@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @if(Session::has('Delivered'))
     <h1>   {{ Session::get('Delivered') }}</h1>
        @endif
     <hr>
     <h2>Orders</h2>

    @foreach($users as $user)
    @if(count($orders) > 0 )
    @foreach($orders as $order)
    
     @if($user->id == $order->user_id)
    <div class = " single order">
        <pre><strong>User:</strong>{{ $user->name}}</pre> 
        <pre><strong>Address:</strong>{{ $order->address}}</pre> 
      @foreach ($order->cart->items as $item)
       <li> {{  $item['item']['name']}}|<b>Quantity</b>{{  $item['qty']}}</li>
      @endforeach 
      <p> <strong>Total price:</strong>{{ $order->cart->totalPrice }}$</p>
      <a href="{{ route('admin.orderDelivered', ['id' => $order->id]) }}"> Done</a>
  </div>
      
    @endif
    @endforeach
    @else
    <h1>No Orders yet</h1>
    @endif
    @endforeach
    </div>
</div>


@endsection