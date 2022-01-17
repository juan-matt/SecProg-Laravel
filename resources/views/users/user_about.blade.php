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


    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About ItemMu</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <!-- <h4>Who we are &amp; What we do?</h4> -->
              <p>ItemMu adalah sebuah tempat pada gamers untuk membeli item dan diamond, gems, voucher games dan lain - lain dengan mudah dan harga yang murah</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Timotius Welly Pranata</h4>
                <span>2301850506</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Juan Matthew</h4>
                <span>2301852253</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Rayson King</h4>
                <span>2301869866</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Maximilian Paulus Nathaniel</h4>
                <span>2301863761</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Justin Valent</h4>
                <span>2301855375</span>
              </div>
            </div>
          </div>

          