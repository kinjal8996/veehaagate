@extends('frontend.layout.main')
@section('main-container')
<section id="center" class="clearfix center_prod" style="margin-bottom: 20px;">
    <div class="container">
     <div class="row">
       <div class="center_prod_1 clearfix">
        <div class="col-sm-12">
         <h6 class="mgt col_1 normal"><a href="#">Home</a>  <i style="font-size:14px; margin-left:5px; margin-right:5px;" class="fa fa-chevron-right"></i>   About Us</h6>
        </div>
       </div>
     </div>
    </div>
    </section>

    <section id="about" class="clearfix" style="margin-bottom: 20px;">
     <div class="container">
      <div class="row">
       <div class="about_1 clearfix">
        <div class="col-m-4">
         <div class="about_1l clearfix">
          {{-- <img src="img/45.jpg" class="iw" alt="abc"> --}}
          @foreach ($aboutus as $ab)
          <h4>{{$ab->title}}</h4>
          <p>{{$ab->description1}}</p>
         </div>
        </div>
        <div class="col-m-4">
         <div class="about_1m clearfix">
          {{-- <img src="img/46.jpg" class="iw" alt="abc"> --}}
          <p>{{$ab->description2}}</p>

         </div>
        </div>
        @endforeach
       </div>
      </div>
     </div>
    </section>





@endsection
