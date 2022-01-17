<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ItemMu-Item and Voucher Game</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="/public/assets/js/"></script> 



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/index') }}"><h2>Item<em>Mu</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/index') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/products') }}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                @if (Route::has('login'))
                    @auth 

                    @php
                        $product_on_cart_string = (string) $product_on_cart;
                    @endphp
                      <li><a class="nav-link" href="{{ url('/cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart [ {{$product_on_cart}} ]</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </a>
                          </form>
                      </li>
                      @else
                        <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                  </div>
                @endif
              </li>



            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>ItemMu</h4>
            <h2>Best Place to Buy Gaming Item</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Game Item</h4>
            <h2>Get the best Item</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Game Voucher</h4>
            <h2>Grab the lowest price voucher</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              @if(session()->has('alert'))
                <div class="bg-danger text-primary px-4 py-3 rounded mt-6" role="alert">
                    <p class="font-weight-bold text-white">{{session()->get('alert')}}</p> 
                </div>
    
              @endif
              @if(session()->has('success'))
                <div class="bg-success text-primary px-4 py-3 rounded mt-6" role="alert">
                    <p class="font-weight-bold text-white">{{session()->get('success')}}</p> 
                </div>
    
              @endif
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
          @foreach($product_from_db as $product)
          <div class="col-md-4">
            <div class="product-item">
              <!-- <a href="#"><img src="{{asset('/uploaded_product_image/'.$product->image)}}" alt=""></a> -->
              <a href="#"><img src="../uploaded_product_image/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->name}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}.</p>
                <p>Stock: {{$product->quantity}}</p>
                <!-- <a class="btn btn-success" href="#">
                  Add to cart
                </a> -->
                <!-- <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul> -->
                <!-- <span>Reviews (32)</span> -->



                <form action="{{url('add_to_cart', $product->id)}}" method="post"> 
                  @csrf
                  <input type="number" min="1" value="1" class="mb-4 w-100" name="quantity_yang_mau_dibeli"> 

                  <input class="btn btn-primary" type="submit" value="Add to Cart"> 

                </form>



              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About ItemMu</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
            <h4>Looking for the best gaming item and voucher?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
              <li><a href="#">Best Price Guarantee</a></li>
                <li><a href="#">Fast Respond</a></li>
                <li><a href="#">Trusted By many Gamers</a></li>
                <li><a href="#">Secure and Easy Payment</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 ItemMu
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
