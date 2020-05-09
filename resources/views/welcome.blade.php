<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                     <a href="{{ route('search') }}">Search</a>
                </div>
            @endif
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col">
                            <div class="panel">
  @if (Auth::guard('web')->check() && !Auth::guard('admin')->check())
    <p class="text-success">
        You are Loged In as a <strong>User</strong>
        
    </p>
    @else
    <p class="text-danger">
        You are Loged out as a <strong>User</strong>
        
    </p>
    {{-- expr --}}
@endif
@if (Auth::guard('admin')->check() && !Auth::guard('web')->check() )
    <p class="text-success">
        You are Loged In as a <strong>Admin</strong>
        
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
            
            <div class="categories">
                <h1>Categories</h1>
                <hr>
                <p><a href="{{ route('product.bycategory',['id'=>1]) }}">Iphone</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>2]) }}">Ipad</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>3]) }}">IMac</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>4]) }}">Macbook Pro</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>5]) }}">Macbook Air</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>6]) }}">IWatch</a></p>
                <p><a href="{{ route('product.bycategory',['id'=>7]) }}">AirPods</a></p>
            </div>
        </div>
    </body>
</html>
