<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <!--font awesome icons-->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

  <div class=" text-center text-secondary">
        <h1>Category: {{ $category->name }}</h1>
  </div>
  
    <div class="container-fluid ">
      <div class="row justify-content-center">
    @if (count($products)>0)
    @foreach ($products as $product)
    
    <div class="card text-center " style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('public/image/'.$product->image )}}" alt="Card image cap" height="300" width="300">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-price">{{ $product->price }} $</p>
        <a href="{{ route('single.product', ['id'=>$product->id]) }}" class="btn btn-primary">View</a>
      </div>
    </div>


    @endforeach
  </div>
</div>
        @else
          <h1 class="text-danger text-center">No products in this Category</h1>     
    @endif
  
@endsection
