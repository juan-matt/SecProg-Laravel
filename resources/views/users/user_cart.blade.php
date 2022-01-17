<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ItemMu Your Cart</title>

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
                    <li><a class="nav-link" href="{{ url('/cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
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
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>

    @if($product_from_db->isEmpty() )
        <br>
        <h1 style="text-align:center;">Cart is empty<h1>
    @else
    @if(session()->has('alert'))
      <div class="bg-danger text-primary px-4 py-3 rounded mt-6" role="alert">
          <p class="font-weight-bold text-white">{{session()->get('alert')}}</p> 
      </div>

    @endif
    <table class="table mt-5 ml-5">
      <thead>
          <tr>
            <!-- <th scope="col">No.</th>  -->
            <th scope="col">Name</th> 
            <th scope="col">Price</th> 
            <th scope="col">Description</th> 
            <th scope="col">Quantity</th> 
            <th scope="col">Image</th> 
            <th scope="col">Delete</th>
          </tr>
      </thead>
        
      <form action="{{url('buying_product')}}" method="post">
      @csrf
      @foreach($product_from_db as $product)
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <tbody>
        <tr>
          <!-- <th scope="row">{{$product->id}}</th> -->
          <td>
            <input type="text" name="product_name[]" value="{{$product->name}}" style="display:none;">
            {{$product->name}}
            
          </td>
          <td>
            <input type="text" name="product_price[]" value="{{$product->price}}" style="display:none;">
            {{$product->price}}
          </td>
          
          <td>{{$product->description}}</td>

          <td>
          <input type="text" name="product_quantity[]" value="{{$product->quantity}}" style="display:none;">
            {{$product->quantity}}
            
          </td>
          <td>
            <input type="text" name="product_image[]" value="{{$product->image}}" style="display:none;">
            <img width="150px" src="/uploaded_product_image/{{$product->image}}" alt="">
          </td>
          <td><a class="btn btn-danger"href="{{url('delete_from_cart', $product->id)}}">Delete from Cart</a> </td> 
            
            
        </tr>
      </tbody>
      @endforeach
    </table>
    <button type="submit" class="btn btn-success ml-5"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</button>
    
  </form>
    @endif

    @if(session()->has('done'))
      <div class="bg-success border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6" role="alert">
          <p class="font-weight-bold text-white">{{session()->get('done')}}</p>
      </div>
    @endif

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