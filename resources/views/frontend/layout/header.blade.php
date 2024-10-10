<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rd Jewellers</title>
	<link href="{{asset("frontend/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("frontend/css/global.css")}}" rel="stylesheet">
	<link href="{{asset("frontend/css/index.css")}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset("frontend/css/font-awesome.min.css")}}" />
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
	<script src="{{asset("frontend/js/jquery-2.1.1.min.js")}}"></script>
    <script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
  </head>

<body>

<section id="header">
 <div class="container">
  <div class="row">
   <div class="header_1 clearfix">
    <div class="col-sm-2">
	 <div class="header_1l text-center clearfix">
	   <h2 class="mgt"><a class="col_1" href="index.html">Real <span class="span_1">JEWELLERS</span>  <span class="span_2">JEWELRY WORLD</span></a></h2>
	 </div>
	</div>
	<div class="col-sm-10">
	 <div class="header_1r clearfix">
	   <div class="header_1ri border_none clearfix">
	     <div class="input-group">
					<input type="text" class="form-control" placeholder="Search" style="width: 350px">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							<i class="fa fa-search"></i></button>
					</span>
				 </div>
	   </div>
	   <div class="header_1ri clearfix" >
	     <span class="span_1"><a class="col_1" href="#"><i class="fa fa-map-marker"></i></a></span>
		 <h5 class="mgt"><a href="#">Store <br> Locator</a></h5>
	   </div>

       <div class="header_1ri clearfix">
        @auth

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-dark text-center" style="margin-left: 20px; background-color: #d93d3d;"><b>Logout</b></button>
        </form>
        @else
        <span class="span_1">
            <a class="col_1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>
            </a>
          </span>

        <h5 class="mgt dropdown">
          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account <br> </a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/Login')}}">Login</a></li>
            <li><a href="{{url('/register')}}">Sign Up</a></li>
          </ul>
        </h5>
        @endauth
      </div>


       <div class="header_1ri border_none clearfix" >
        <span class="span_1">
          <a class="col_1" href="#"><i class="glyphicon glyphicon-shopping-cart"></i></a>
        </span>
        <h5 class="mgt">
            <a href="{{ route('cart.view') }}">My <br> Cart</a>

        </h5>
      </div>



	   {{-- <div class="header_1ri border_none clearfix">
	     <span class="span_1"><a class="col_1" href="#"><i class="fa fa-heart-o"></i></a></span>
		 <h5 class="mgt"><a href="#">My <br> Wishlist (0)</a></h5>
	   </div> --}}

	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="menu" class="clearfix cd-secondary-nav">
	<nav class="navbar nav_t">
		<div class="container">
		    <div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="col_1 navbar-brand" href="index.html">Real <span class="span_1">JEWELLERS</span>  <span class="span_2">JEWELRY WORLD</span></a>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

				<li><a class="m_tag active_tab" href="{{url('/')}}">Home</a></li>
				{{-- <li class="dropdown">
					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Product</a>
                      <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="product.html">Product</a></li>
						<li><a class="border_none" href="detail.html">Product Detail</a></li>
					  </ul>
                    </li> --}}
                    @php
                    $products = \App\Models\Product::all();
                  @endphp
                    <li class="dropdown">
                        <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu drop_3" role="menu">
                            @foreach ($products as $product)
                                <li><a href="{{ route('product.show', $product->product_id) }}">{{ $product->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

				{{-- <li class="dropdown">
					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="blog.html">Blog</a></li>
						<li><a class="border_none" href="blog_detail.html">Blog Detail</a></li>
					  </ul>
                    </li> --}}

				<li><a class="m_tag" href="{{url('/Aboutus')}}">About Us</a></li>
				<li><a class="m_tag" href="{{url('/Contactus')}}">Contact</a></li>


			</ul>


			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	</section>
