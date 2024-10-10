@extends('frontend.layout.main')
@section('main-container')
{{-- <section id="center" class="center_home">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
         <!-- Overlay -->
         <div class="overlay"></div>

         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
           <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
           <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
           <div class="item slides active">
             <div class="slide-1"></div>
             <div class="hero">
               <h1 class="mgt">Rd Jewellers</h1>

               <hr>
               <p>Nulla quis sem at nibh elementum imperdiet <br> lacinia arcu eget nulla!</p>
               <h4><a class="button col" href="#">View More</a></h4>
               <h4><a class="button_1 col" href="#"> Shop Now</a></h4>
             </div>
           </div>
           <div class="item slides">
             <div class="slide-2"></div>
             <div class="hero hero_1">
               <h1 class="mgt">Dolore Magna</h1>
               <hr>
               <p>Nulla quis sem at nibh elementum imperdiet <br> lacinia arcu eget nulla!</p>
               <h4><a class="button col" href="#">View More</a></h4>
               <h4><a class="button_1 col" href="#"> Shop Now</a></h4>
             </div>
           </div>
           <div class="item slides">
             <div class="slide-3"></div>
             <div class="hero">
               <h1 class="mgt">Fusce  Tellus </h1>
               <hr>
               <p>Nulla quis sem at nibh elementum imperdiet <br> lacinia arcu eget nulla!</p>
               <h4><a class="button col" href="#">View More</a></h4>
               <h4><a class="button_1 col" href="#"> Shop Now</a></h4>
             </div>
           </div>
         </div>
       </div>


   </section> --}}

   @php
   $products = \App\Models\Product::all();
 @endphp

 @php
   $categories = \App\Models\Category::all();
 @endphp

   @include('Frontend.allproducts')



   {{-- <section id="price">
    <div class="container">
     <div class="row">
      <div class="price_1 text-center clearfix">
          <div class="col-sm-12">
            <h3 class="mgt"> Stylish Jewellery  <span class="col_1">Affordable Price </span></h3>
           <p>Discover our exclusive jewellery in versatile designs that fits every budget with poise and glamour.</p>
          </div>
      </div>
      <div class="price_2 clearfix">
          <div class="col-sm-3">
           <div class="price_2i clearfix">
            <div class="col-sm-8">
             <h5>Shop Under <br> <span class="bold"><i class="fa fa-rupee"></i> 5,000</span></h5>
            </div>
            <div class="col-sm-4 space_all">
             <img src="img/6.jpg" class="iw" height="80" alt="abc">
            </div>
           </div>
          </div>
          <div class="col-sm-3">
           <div class="price_2i clearfix">
            <div class="col-sm-8">
             <h5>Shop Under <br> <span class="bold"><i class="fa fa-rupee"></i> 7,000 -12,000</span></h5>
            </div>
            <div class="col-sm-4 space_all">
             <img src="img/11.jpg" class="iw" height="80" alt="abc">
            </div>
           </div>
          </div>
          <div class="col-sm-3">
           <div class="price_2i clearfix">
            <div class="col-sm-8">
             <h5>Shop Under <br> <span class="bold"><i class="fa fa-rupee"></i> 12,000 -15,000</span></h5>
            </div>
            <div class="col-sm-4 space_all">
             <img src="img/8.jpg" class="iw" height="80" alt="abc">
            </div>
           </div>
          </div>
          <div class="col-sm-3">
           <div class="price_2i clearfix">
            <div class="col-sm-8">
             <h5>Shop Above <br> <span class="bold"><i class="fa fa-rupee"></i> 30,000</span></h5>
            </div>
            <div class="col-sm-4 space_all">
             <img src="img/9.jpg" class="iw" height="80" alt="abc">
            </div>
           </div>
          </div>
      </div>
     </div>
    </div>
   </section> --}}

   <section id="list_o">
    <div class="container">
     <div class="row">
      <div class="price_1 text-center clearfix">
          <div class="col-sm-12">
            <h3 class="mgt">Shop by  <span class="col_1">Your Preference</span></h3>
           <p>Explore our unique daily wear jewellery designs that reflect elegance and exclusivity.</p>
          </div>
      </div>
      <div class="list_2 clearfix">
        <div id="carousel-example_1" class="carousel slide" data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                   <div class="item active">
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/6.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button_1" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/7.jpg" class="iw" alt="abc"></a>
                          <h5><a class="button" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/8.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button_1" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/9.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                   </div>
                   <div class="item">
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/10.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button_1" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/11.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/12.jpg" class="iw" alt="abc"></a>
                           <h5><a class="button_1" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i text-center clearfix">
                           <a href="#"><img src="img/13.png" class="iw" alt="abc"></a>
                           <h5><a class="button" href="#">SHOP NOW</a></h5>
                         </div>
                       </div>
                   </div>
               </div>
           </div>
        <div class="feature_2_last text-center clearfix">
               <div class="col-sm-12">
                   <!-- Controls -->
                   <div class="controls">
                       <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example_1" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example_1" data-slide="next"></a>
                   </div>
               </div>
           </div>
      </div>
     </div>
    </div>
   </section>



   <section id="list_o_1">
    <div class="container">
     <div class="row">
      <div class="list_1 clearfix">
        <div class="col-sm-9">
         <div class="list_1l clearfix">
           <h3 class="mgt">Explore  <span class="col_1">The New Arrivals </span></h3>
           <p>We craft exceptionally fashionable &amp; trendy designs to make you look beautiful every day.</p>
         </div>
        </div>
        <div class="col-sm-3">
         <div class="list_1r text-right clearfix">
           <h5 class="mgt"><a class="button mgt" href="#">VIEW ALL</a></h5>
         </div>
        </div>
      </div>
      <div class="list_2 clearfix">
        <div id="carousel-example_2" class="carousel slide" data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                   <div class="item active">
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/6.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 4566</h3>
                           <h4><a class="col_1" href="#">Nibh Elementum</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/7.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 4986</h3>
                           <h4><a class="col_1" href="#">Fusce Nec Tellus</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/8.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 5696</h3>
                           <h4><a class="col_1" href="#">Nulla Quis Sem</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/9.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 5836</h3>
                           <h4><a class="col_1" href="#">Vestibulum Lacinia</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                   </div>
                   <div class="item">
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/10.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 4566</h3>
                           <h4><a class="col_1" href="#">Nibh Elementum</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/11.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 4986</h3>
                           <h4><a class="col_1" href="#">Fusce Nec Tellus</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/12.jpg" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 5696</h3>
                           <h4><a class="col_1" href="#">Nulla Quis Sem</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                       <div class="col-sm-3">
                         <div class="list_2i clearfix mgt-center">
                           <a href="#"><img src="img/13.png" class="iw" alt="abc"></a>
                           <h3><i class="fa fa-rupee"></i> 5836</h3>
                           <h4><a class="col_1" href="#">Vestibulum Lacinia</a></h4>
                           <h6>Product Code: 12LDSJECR03</h6>
                         </div>
                       </div>
                   </div>
               </div>
           </div>
        <div class="feature_2_last text-center clearfix">
               <div class="col-sm-12">
                   <!-- Controls -->
                   <div class="controls">
                       <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example_2" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example_2" data-slide="next"></a>
                   </div>
               </div>
           </div>
      </div>
     </div>
    </div>
   </section>









@endsection
