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