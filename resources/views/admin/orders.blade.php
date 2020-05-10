@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        @if(Session::has('Delivered'))
     <h1>   {{ Session::get('Delivered') }}</h1>
        @endif
    <div class="container">
        <h2 class="text-center text-muted pt-3">Orders:</h2>
    </div>

    @foreach($users as $user)
    @if(count($orders) > 0 )
    @foreach($orders as $order)
    
     @if($user->id == $order->user_id)

     <div class="card text-center single order" style="width: 20rem;">
        <div class="card-body" >
         <ul class="list-group " style="height: 36 rem;">
            <li class="list-group-item active"></li>
            <li class="list-group-item "><strong>User: </strong>{{ $user->name}}</li>
            <li class="list-group-item"><strong>Address: </strong>{{ $order->address}}</li>
            @foreach ($order->cart->items as $item)
            <li class="list-group-item"> <b>Product: </b>{{  $item['item']['name']}}:   <b>Quantity :</b>  {{  $item['qty']}}</li>
           @endforeach 
           <li class="list-group-item pt-3"><strong>Total price: </strong>{{ $order->cart->totalPrice }}$</li>
           
          </ul>
         
        </div>
        <a href="{{ route('admin.orderDelivered', ['id' => $order->id]) }}" class="text-center">
          <button type="button" class="btn btn-success mb-3">Done</button> 
       </a>
      </div>
     
      
    {{-- <div class = " single order">
        <pre><strong>User:</strong>{{ $user->name}}</pre> 
        <pre><strong>Address:</strong>{{ $order->address}}</pre> 
      @foreach ($order->cart->items as $item)
       <li> {{  $item['item']['name']}}|<b>Quantity</b>{{  $item['qty']}}</li>
      @endforeach 
      <p> <strong>Total price:</strong>{{ $order->cart->totalPrice }}$</p>
      <a href="{{ route('admin.orderDelivered', ['id' => $order->id]) }}"> Done</a>
  </div> --}}
      
    @endif
    @endforeach
    @else

    <div class="container d-flex justify-content-center">
        <div class="row "></div><h1 class="text-danger pt-5">No Orders yet</h1>
    </div>

    @endif
    @endforeach
    </div>
</div>


@endsection