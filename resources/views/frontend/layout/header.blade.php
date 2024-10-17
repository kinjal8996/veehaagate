<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veehaagate</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('AdminPanel/assets/images/logos/logo.jpg') }}" />

	<link href="{{asset("frontend/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("frontend/css/global.css")}}" rel="stylesheet">
	<link href="{{asset("frontend/css/index.css")}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset("frontend/css/font-awesome.min.css")}}" />
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
	<script src="{{asset("frontend/js/jquery-2.1.1.min.js")}}"></script>
    <script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    nav {
        width: 100%; /* Full-width navbar */
        background-color: #2874F0; /* Full background color */
        font-family: Roboto;
        color: white;
    }

    .nav {
        height: 55px;
        width: 100%; /* Full-width for the nav items */
        display: flex; /* Align nav items horizontally */
        margin: 0;
        padding: 0;
        list-style: none;
    }



    .nav a:hover {
        color: white !important;
        text-decoration: none;
    }
</style>
<body>
    @php
    $cart = session('cart', []);
    $totalItems = array_sum(array_column($cart, 'quantity'));
@endphp
<section id="header" style="font-family:Roboto;">
 <div class="container">
  <div class="row" style="width: 100%; ">

   <div class="header_1 clearfix">
    <div class="col-sm-2" style="">
	 <div class="header_1l text-center clearfix">
        <a href=" " class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="{{ asset('AdminPanel/assets/images/logos/logo.jpg') }}" width="100" height="90" alt="">
          </a>
	    {{-- <h2 style="margin-top: 28px;"><a class="col_1" href="{{url('/')}}">Veehaagate</a></h2> --}}
	 </div>
	</div>
	<div class="col-sm-20">
	 <div class="header_1r clearfix">
	   <div class="header_1ri border_none clearfix" style="font-family:Roboto;">
	    {{-- <div class="input-group" style="width: 350px; border: 1px solid black; border-radius: 4px; overflow: hidden;">
            <input type="text" class="form-control" placeholder="Search" style="border: none; width: 100%; padding: 10px;">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button" style="border: none; color: black; padding: 10px;">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div> --}}
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group" style="width: 350px; border: 1px solid black; font-family:Roboto; border-radius: 4px; overflow: hidden; ">
                <input type="text" name="query" class="form-control" placeholder="Search" style="border: none; width: 100%; padding: 10px;" required>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" style="border: none; color: black; padding: 10px;">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>


	   </div>


       <div class="header_1ri clearfix" style="margin-left: 50px; ">
        @auth

        {{-- <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-dark text-center" style="margin-left: 20px; background-color: #d93d3d;"><b>Logout</b></button>
        </form> --}}
        <div class="header_1ri border_none clearfix">
            <span class="span_1">
                <a class="col_1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 28px; line-height: 1;">
                  <i class="fa fa-user"></i>
                </a>
              </span>

            <h5 class="mgt dropdown" style="margin-top: 10px;">

              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile </a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/edit-profile')}}">Profile</a></li>
                <li><a href="{{url('/orderhistory')}}">Order History</a></li>
                <li> <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark text-center" style="margin-left: 20px; background-color: black; color:white;"><b>Logout</b></button>
                </form></li>
              </ul>
            </h5>
        @else
        <span class="span_1">
            <a class="col_1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 28px; line-height: 1;">
              <i class="fa fa-user"></i>
            </a>
          </span>

        <h5 class="mgt dropdown">
          <a href="{{url('/Login')}}"  aria-haspopup="true" aria-expanded="false" >Login </a>
          {{-- <ul class="dropdown-menu">
            <li><a href="{{url('/Login')}}">Login</a></li>
            <li><a href="{{url('/register')}}">Sign Up</a></li>
          </ul> --}}
        </h5>
        @endauth
      </div>


      {{-- <div class="header_1ri border_none clearfix " style="position: relative;">
        <span class="span_1">
            <a class="col_1" href="#">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span class="badge rounded-pill bg-danger" style="position: absolute; top: -5px; right: -0px;">{{ $totalItems }}</span>
            </a>
        </span>
        <h5 class="mgt">
            <a href="{{ route('cart.view') }}">My <br> Cart</a>
        </h5>
    </div> --}}


    <div class="header_1ri border_none clearfix" style="position: relative;">
        <span class="span_1">
            <a class="col_1" href="javascript:void(0);" onclick="checkCartItems()" style="font-size: 26px; line-height: 1;">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span id="cart-badge" class="badge rounded-pill bg-danger" style="position: absolute; top: -5px; right: -0px; display: {{ $totalItems > 0 ? 'inline' : 'none' }};">{{ $totalItems }}</span>
            </a>
        </span>
        <h5 class="mgt">
            <a href="javascript:void(0);" onclick="checkCartItems()"> Cart</a>
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
	<nav class="navbar nav_t" style="">
		<div class="container">
		    <div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                {{-- <h2 style="margin-top: 28px;"><a class="col_1" href="{{url('/')}}">Veehaagate</a></h2> --}}
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			{{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="w-100;"> --}}

<nav class="w-100">

    <ul class="nav navbar-nav" style=" background-color:#2874F0; height:55px;  color:white; width:105%;    " >

       <li><a class="m_tag active_tab" style="color: white;display: flex;" href="{{url('/')}}">Home</a></li>

           @php
           $products = \App\Models\Product::all();
         @endphp
           {{-- <li class="dropdown">
               <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
               <ul class="dropdown-menu drop_3" role="menu">
                   @foreach ($products as $product)
                       <li><a href="{{ route('product.show', $product->product_id) }}">{{ $product->name }}</a></li>
                   @endforeach
               </ul>
           </li> --}}
           @php
         $categories = \App\Models\Category::all();
       @endphp
           <li class="dropdown">
               <a class="m_tag" href="#" style="color: white; text-decoration: none;" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
               <ul class="dropdown-menu drop_3" role="menu">
                   @foreach ($categories as $category)
                   <li><a href="{{ route('category.show', $category->category_id) }}">{{ $category->name }}</a></li>
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

       <li><a class="m_tag"style="color: white; display: flex;" href="{{url('/Aboutus')}}">About Us</a></li>
       <li><a class="m_tag"style="color: white; display: flex; " href="{{url('/Contactus')}}">Contact</a></li>


   </ul>
    </nav>

</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>

</section>
<script>
    function checkCartItems() {
        var totalItems = parseInt($("#cart-badge").text());  // Get the updated badge value

        if (totalItems == 0) {
            // Show alert if cart is empty
            alert("Your cart is empty! Please add items to cart.");

            // Redirect to homepage
            window.location.href = "{{ url('/') }}";
        } else {
            // Redirect to cart view if cart has items
            window.location.href = "{{ route('cart.view') }}";
        }
    }

</script>

