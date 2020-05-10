<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
    <!--for svg icons -->
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script> --}}
    
</head>

<nav class = "navbar navbar-expand-lg navbar-dark bg-dark sticky-top "  >
            
    <a href="/"class="navbar-brand">
        <strong class="text-warning">Online Shop</strong>
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a href="/" class="nav-link active " id="navbar" >Home</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link " id="navbar">Categories</a>
        </li>
          
          <li class="nav-item ">
            <a href="#" class="nav-link " id="navbar">Sign in</a>
        </li>
          <li class="nav-item ">
              <a href="/contact-us" class="nav-link " id="navbar">Contact us</a>
          </li>

    </ul>
    
    {{-- <form class="form-inline my-2 my-lg-0">
        <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form> --}}

</div>
</nav>

@yield('content');

<footer class="footer mt-auto  p-3  bg-secondary ">
    <div class="container text-center">
      <span class="text-white">Online Apple products store.</span>
    </div>
</footer>