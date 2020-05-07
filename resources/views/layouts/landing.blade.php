@extends('layouts.content')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>  
    <header>
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-10">
            <h5 class="display-5 font-weight-bold pt-2 mb-3 text-secondary">
             This store is based on selling products of Apple company
            </h2>
            
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
                        <img src="https://www.techieapps.com/wp-content/uploads/2012/02/new_imac.jpg " height="700" class="d-block w-100" alt="...">
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
        
    </header>
    
    <div class="container">
        <hr class="mt-4 mb-3">

      <section id="best-features" class="text-center">
        <h2 class="mb-5 text-secondary" font-weight = "bold"> Best Features </h2>
        
        <div class="row">
          <div class="col-md-4 mb-5" id="cards">
            <img src="https://lh3.googleusercontent.com/U6_ExG4DlD6Tp-3qkLdRfIDP4xspBBN3ZVPxbesH2HvP8zsEPEL5l0FwAG6TjH5AZNEV-ew7X_h6OKkoAk58lkL_yBGBQhoSRexdmysnDeItEXunqVMD4_WKI5oEVRWuutftKwdUqCppUZDkUyZnwjIusnCFYM_6eD1Yud_1lcs6bGKTfWmsdmi4v3x_Myhykb-Mst8ys-wCnxx84JBE2B0pXDSA5LP5RursqaZXk2eWXfr0TlZa6vrUJXJELf7bGhSEswmxw0GPzfMy-acCX9jHMPSMANPL4WL6U7KE2f9vqdt7hrecrmdWYsr1Gzzuq1tSeQJMJNHpMIShke7Sg0WYbfkdoqGFjswTSN0XjwPsVloKP0OOPqj67v0y_cuyMHmSRwIHGMtR1lfmVLDUBrjm34P-03DzNIYVS9vLwa1UMwqudwqtzAGhepdd0KKWQMVzWde_Wleh6JH_7itmMKmJPU0J_z8pIrgObPIm0rL72f1MdlnKR8bIZAq2BcZTlkKWIHKQXzA3d7zqF3Cl74K46iZU7vCjO-WtgWHozNYjBWYaWU-670N5yRo7pTc3nVQl-ZbT8Dpb7VtVI4SZ7ox5rLQ_XLTM_Ry0YAEEqUxqwTEMeByuavHY_YF31xzFH7uKDKHoOslcDy-0_KxE_UKvtveKTUtlmz-vvVdsdskaH-HBlA2FNnW4ZvqKIw=s608-no"
            alt="user-friendly" height="250 px">
            <h4 class="my-4 font-weight-bold">User-Feiendly</h4>
            <p class="text-secondary">With the siplicity of website buyers can get what they want.</p>
          </div>

          <div class="col-md-4 mb-5" id="cards">
            <img src="https://lh3.googleusercontent.com/bzQs09ubj1UEYvs1eSy-6C67rQT19-ffFfgxGR6ilYT7U97rXK5NPcUts_PPCa1s1XWKtPm42nd5bOE2yva02XkaOpHeQnlcZyrmtDigb-H3ZMcAUokCdOFLzXcg_ecQViqrjxrfexL5xJUFyGn9TRIxkBTCVBbQMjgY_06bFfAo5dXmxGUbG7TjvaICpua5WTOIWpGCT52TCrCFQk7YtTRhYkV-visk5xbfn-Du6cpTqiOLcND5IfR6Uew1zVTEjCUpldtoqLbRJnsDwmOC61SGnscrEWlhwSLh4ONZiiE7VlskXpBn5gR-WGagcpUW-zm8EVmt-TW5u7BAnTWWWN2SwjblW6jNSCvgHan2PtrEUs0an78nAyvxvH3luzp9NR7te2KgdAQrIOe-NpMdKwr1d4vMptIqkYYt3zrpQBBXj7mRs2BPyIZ5gH2zgjkVcUCYWUsl87weHK2WYMa3rLV-LC0l7yGCY0H-ossbIl68HdJoomW-0BJ5-BsbiYmdtVwVo8IJau1dkmzsXtcXG7PZKlfchUw_UUzKYlkUiXul_Fw4XkJUJGCJg7GKlAM3bUvUuYM0m1_EAilM6AFnQ5rcEa8TVvaqK5KF8NPAZ6dCOO0SszGH6EDLyf1LL6nJjHsYzd4qYI9HmL2hs_wgymSK1VW93_TpJou15KVmdAwOHh9cJAnEt5sy8MmPLA=s608-no"
            alt="user-friendly" height="250 px">
                <h4 class="my-4 font-weight-bold ">Find in Store</h4>
                <p class="text-secondary">Shoppers first research items what they want then book it.</p>
            </div>

          <div class="col-md-4 mb-5" id="cards">
            <img src="https://lh3.googleusercontent.com/4BbmkutRmRcgBhKVlt71hgGWWrjlL3sAhl0qV09lt-79fppv0RMBXmbtA37HcBqH6wT1PLfxNCQwHh5F6w1nD8HKqis_3jVSrmcxRLIkx3X_FxP6YxbCVQEHxuwCn3i8eXzj1liqGk4vMPnaZQEn0zug8Imf3SP848QhPABW6-hZRj3ghnBhD7mwaK_UUP7FUyxaxE8YjV3R8ctWvRuPu7b7628FsS4pAqLVpk5889jrinRJlU7JsfcSJ_C7HjnZUJAyxuJlhkm8LOcSN5zUQJDVNhk0Rxk6diAyMxlTBfzdWTGta7f7G63XI01JPNB-eS64T3k3V7u8cxwP0sFKps3tV-d3W5gRsFheoy3UWJCMCbIpL_hISZnOFe90tuQI8BpdiVrm-HAoODa1gNuzg_iJaPFYynCEmtagJwW6M4I9Oy2b9xNIEoWH9Db5zxPF7dmq2ecpnOceEFbrVbvYSFvpj5zDY3qxOqSf0hw6uZlgJMKHSvQOWsIbMeOi-fT9LA9fW81LCkgTX8QUBp52rvh_9qkKNj_5iZrmqrH0RzdcUnkhGcxNzBHljwLLuaDKpbCVvfYG6_eO5CltEMKpnjrgPtuDIzigGEhRyc7ySeV5Me9iRPx6tK1mpYoq3XUAhn7P1DuZ3fLNwzOZ4EbOEI2vKRkou6AUq2tgosMGMLHKtIawR0-D_5VLZopvCw=s608-no"
            alt="user-friendly" height="250 px">
              <h4 class="my-4 font-weight-bold">Safe Payment</h4>
              <p class="text-secondary">Pay with secure payment methods.</p>
          </div>
        </div>

      </section>
    </div>
    </body>

   

</html>
@endsection