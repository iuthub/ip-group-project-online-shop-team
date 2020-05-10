<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--font awesome icons-->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

    <!-- Optional JavaScript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->

    <style>
       
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

       
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: white;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        body{
            font-family: Arial, 'Times New Roman', serif, sans-serif;
         }

         #cards{
             background-color: white;

           
         }

 .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0e2f44;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
    }

.sidenav a {
  padding: 0px 2px 2px 20px;
  text-decoration: none;
  font-size: 17px;
  color: #c0c0c0;
  display: block;
  
}

.sidenav a:hover {
  color: #876d94;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 20px;
  font-size: 40px;
  margin-left: 50px;
}

#clickbtn {
  transition: margin-left .8s;
  padding: 16px;
}

    </style>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "150px";
  document.getElementById("clickbtn").style.marginLeft = "30px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("clickbtn").style.marginLeft= "0";
}
</script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-dark text-white ">
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon "></span>
            </button>

            <div class="collapse navbar-collapse bg-dark" id="navbarNavDropdown" id="navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <ul class="navbar-nav">
                <li class="nav-item ">
                    <p class="nav-link text-warning mb-2 pt-3" ><i class="fa fa-shopping-cart text-primary fa-lg mb-3"></i> Online Shop</p> 
                </li>

                <li class="nav-item dropdown">
                  <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a href="{{ route('product.bycategory',['id'=>1]) }}">Iphone</a>
                      <a href="{{ route('product.bycategory',['id'=>2]) }}">Ipad</a>
                      <a href="{{ route('product.bycategory',['id'=>3]) }}">IMac</a>
                      <a href="{{ route('product.bycategory',['id'=>4]) }}">Macbook Pro</a>
                      <a href="{{ route('product.bycategory',['id'=>5]) }}">Macbook Air</a>
                      <a href="{{ route('product.bycategory',['id'=>6]) }}">IWatch</a>
                      <a href="{{ route('product.bycategory',['id'=>7]) }}">AirPods</a>
                    </div>

            <div id="clickbtn">
              
        <span style="cursor:pointer" onclick="openNav()">&#9776; Categories</span>

            </div>

                  
                </li>

                <li class="nav-item ">
                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" id="navbar">Home</a>
                    @else
                        <a href="{{ route('login') }}" id="navbar">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" id="navbar">Register</a>
                        @endif
                    @endauth
                     <a href="{{ route('search') }}" id="navbar">Search</a>
                </div>
                     @endif
                </li>
                  <li class="nav-item ">
                      <a href="{{route('getContactus')}}" class="nav-link pt-3 text-light" >Contact us</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">
              <h5 class="display-5 font-weight-bold pt-2 mb-3 text-secondary">
               This store is based on selling products of Apple company
            
              </h2>
              
            </div>
          </div>
          <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <div class="panel">
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





<div class="container-fluid p-0 " >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://lh3.googleusercontent.com/mhVHiJ92X2GffV4L1vP6-iMkaPgI3QKFS-y6HDKxoE45GMieSGycrAPalUsFw1Cfl339zYYgF8IyulPRtiJWSKKE4kMk8RKg8rgFBJvXZ2e5ir0kH496EghhLFeIHvWnXEQDZGaT2aZ7zt-ZvQfDX70VTg-XlKbRIcGO2wjPKvZFlg9YDo4oSWG5O9zYwNsoxSE5M-pvqGzwAdKxjkdlwjYrmDhGzn0wgPZIrZWSCFOIyfIjIbTPEantRzgbEUeulTdj795jeBAQsGthYzL8XaKoApidThOAl4dpRwGnVyoSrC2d-T5RhsxkctzQPYQa1YUqdkNA1lqaQvIASZElQozLbWcWp5m31oL99LZa6R_9ZXimt2pRAgbKv4eC1w3n6WHYYYVkgWSvF0SbUT3mo7JDwzMjmJI9QUg8MzvWS1iny-R2MI0T5SiCGs3PdG8fz89o2Hm0pmof7f1KrsvEMlrcnnKyuF4-SkLvhrdbGWERgpzECg6Zd2IQ2OqwqhNissPqiX3MA-OqZAQhze8EkE3e3udnllG7XFfH9XWBVj7mjN0WB80qUJljUDshDU70dbcihKIHZHrNPBeoNX9XmwmPb4XKo3bX1jETYGCXtvfyfIIgvUtBHZ-c0_ZWe7mgmnAxz9vM-8HgNloEFhs8yFxkVsXbYan68t3cX510XoV4SbYidmo9HQA5pHH77QQLouH7kG6NabXNTytEtdtVXj_YceSzt36EpucbHawvRvoBt1Xkl7TDNtY=w1130-h608-no" height="700" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://techontap.com.au/wp-content/uploads/2019/04/apple-products.jpg" height="700" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://images.kaina24.lt/9/94/apple-macbook-air-13-2.jpg " height="700" class="d-block w-100" alt="...">
        </div>
    </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
</div>

<div class="container">

    <hr class="mt-4 mb-3">

    <section id="best-features" class="text-center">
    <h2 class="mb-5 text-secondary"> <strong> Best Features</strong> </h2>
    
    <div class="row">
        <div class="col-md-4 mb-5 " id="cards">
        <img src="https://media.istockphoto.com/vectors/user-icon-vector-sign-and-symbol-isolated-on-white-background-user-vector-id1001107822?k=6&m=1001107822&s=170667a&w=0&h=i62MfVqM-YZHPEoU4B2X7SL7GvcfPqr5s_T_z1ZNufo="
        alt="user-friendly" height="250 px">
        <h4 class="my-4 font-weight-bold">User-Feiendly</h4>
        <p class="text-secondary">With the siplicity of website buyers can get what they want.</p>
        </div>

        <div class="col-md-4 mb-5" id="cards">
        <img src="https://thumbs.dreamstime.com/b/find-search-zoom-line-illustration-icon-white-background-element-education-icons-signs-symbols-can-be-used-web-logo-173420728.jpg"
        alt="user-friendly" height="250 px">
            <h4 class="my-4 font-weight-bold ">Find in Store</h4>
            <p class="text-secondary">Shoppers first research items what they want then book it.</p>
        </div>

        <div class="col-md-4 mb-5" id="cards">
        <img src="https://images.assetsdelivery.com/compings_v2/muslumstock/muslumstock1811/muslumstock181100027.jpg"
        alt="user-friendly" height="250 px">
            <h4 class="my-4 font-weight-bold">Safe Payment</h4>
            <p class="text-secondary">Pay with secure payment methods.</p>
        </div>
    </div>

    </section>
</div>

<footer class="footer mt-auto  p-3  bg-secondary ">
    <div class="container text-center">
        <span class="text-white">Online Apple products store.</span>
    </div>
</footer>
            
        
    </body>
</html>
