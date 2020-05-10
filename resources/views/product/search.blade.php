@extends('layouts.app')

@section('content')
<div id="searchPage">
        <div class="container d-flex flex-row-reverse bd-highlight">
                <form action="{{ route('search') }}" method="POST" role="search" class="form-inline">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input class="form-control mr-sm-2" type="search" name="q"
                            placeholder="Type here..."> <span class="input-group-btn">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">
                                Search
                            </button>
                        </span>
                    </div>
                </form>
        </div>

        <div class="container">
            @if(isset($details))
                <h4 class="text-center text-success"> The Search results for your query <b> {{ $query }} </b> are :</h4>
            <h2 class="text-center text-secondary mb-3">Product details are: </h2>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>      </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $product)
                    <tr> 
                        <td><strong>{{$product->id}}</strong></td>
                        <td><strong>{{$product->name}}</strong></td>
                        <td><strong>{{$product->price}} $</strong></td>
                        <td>
                            <a href="{{ route('single.product',['id'=>$product->id]) }}">
                                <button type="button" class="btn btn-info  text-light ">View</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
            
            
        </div>
</div>
@endsection
