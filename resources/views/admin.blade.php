@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center p-3 mb-2 bg-dark text-white">Dashboard for Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            @if (Auth::guard('web')->check())
    <p class="text-success">
        You are Loged In as a <strong>User</strong>
        
    </p>
    @else
    <p class="text-danger">
        You are Loged out as a <strong>User</strong>
        
    </p>
    {{-- expr --}}
@endif

@if (Auth::guard('admin')->check())

    <p class="text-success">
        You are Loged In as a <strong>Admin</strong>
        <br>
<div class="row">
    <div class="group col-md-6">
    <a href="{{ route('product.create') }}">
        <button type="button" class="btn btn-success btn-lg "> Create New Product  </button>
    </a>
    </div>
          <br>
    <div class="group col-md-6">
    <a href="{{ route('admin.index') }}">
        <button type="button" class="btn btn-primary btn-lg ">View Existing Products </button>
    </a>
    </div>
</div>
    </p>
    </p>

    @else
    <p class="text-danger">
        You are Loged out as a <strong>Admin</strong>
        
    </p>
@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
