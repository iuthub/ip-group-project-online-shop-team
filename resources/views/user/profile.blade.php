@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
        <h1 class="text-center p-3 mb-2 bg-info text-white"><i class="fa fa-id-card-alt text-warning fa-lg"></i> User Profile</h1>
        <hr>
        <h2 class="text-secondary">My Orders:</h2>   
        @foreach($orders as $order)
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-group">
            @foreach ($order->cart->items as $item)
                
            <li class="list-group-item">
            <span class="badge">{{ $item['price'] }}</span>
            {{ $item['item']['name'] }} |{{ $item['qty'] }}   
            </li>
            @endforeach
        </ul></div>
        <div class="panel-footer">
            <span class="text-secondary"><strong>Total Price: ${{ $order->cart->totalPrice }}</strong></span>
        </div>

    </div>

    @endforeach
        </div>
    </div>

</div>
@endsection
