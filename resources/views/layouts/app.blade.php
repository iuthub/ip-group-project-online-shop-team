<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
</head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online SHop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
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
    
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark">
            <div class="container" >
                <a class="navbar-brand text-light" href="{{ url('/') }}" >
                    Main Page
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(Auth::check() && !Auth::guard('admin')->check())
                        <li class = "nav-item pt-2">
                            <a href="{{ route('product.shoppingCart') }}" id="navbar">
                                <i class="fa fa-shopping-cart text-light" aria-hidden="true">
                                    </i> <span class="text-light">Shopping Cart<span class="badge">{{  Session::has('cart') ?  Session::get('cart')->totalQty : '' }}</span></span>
                            </a>
                        </li>
                        @endif
                        @if (Auth::guard('admin')->check())
                            <li class="nav-item"><a class="nav-link text-light" href="{{ route('admin.orders') }}">Orders</a></li>
                            <li class="nav-item"><a class="nav-link text-light"  href="{{ route('product.create') }}">Create Product</a></li>
                            <li class="nav-item"><a class="nav-link text-light"  href="{{ route('admin.index') }}">Products</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="{{ route('admin.dashboard') }}" >Dashboard</a></li>
                                
                        @endif
                        @if (Auth::guard('web')->check())
                            <li class="nav-item"><a class="nav-link text-light" href="{{ route('user.profile') }}" >MyProfile</a></li>
                            <li class="nav-item"><a class="nav-link text-light"  href="{{ route('search') }}">Search</a></li>
                        @endif
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link text-light"  href="{{ route('admin.login') }}">{{ __('Admin') }}</a> 
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light"  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="{{route('logout')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
