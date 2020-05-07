@extends('layouts.app')

@section('content')
<form action="{{ route('search') }}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                Search
            </button>
        </span>
    </div>
</form>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample Product details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>      </th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{ route('single.product',['id'=>$product->id]) }}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection
