@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2">
            
        <h1 class="text-center p-3 mb-2 bg-info text-white"><i class="fa fa-id-card-alt text-warning fa-lg"></i> User Profile</h1>
        <hr>
        <h2 class="text-secondary">My Orders:</h2>   
        @foreach($orders as $order)
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-group">
            @foreach ($order->cart->items as $item)
                
            <li class="list-group-item mb-3">
            <span class="badge"><h3>Price: {{ $item['price'] }}$ |</span>
            Name: {{ $item['item']['name'] }} | Quantity: {{ $item['qty'] }}   
            </h3></li>
            @endforeach
             <div class="panel-footer text-center">
            <span class="text-secondary "><strong><h4>Total Price: <span class="text-primary ">${{ $order->cart->totalPrice }}</span></h4></stron></span>
        </div>
        </ul>

    </div>
        

    </div>

    @endforeach
        </div>
    </div>

</div>
@endsection
