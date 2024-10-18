@extends('frontend.layout.main')
@section('main-container')
<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-left: 200px;
        background-color: #fff;
        width: 800px;
        margin-bottom: 10px;
        margin-top: 15px;

    }
    .card h4 {
        font-size: 18px;
        color: #2874F0;
    }
    .card p {
        font-size: 15px;
        color: #333;
        line-height: 1.6;
    }
</style>

<section id="center" class="clearfix center_prod" style="margin-bottom: 20px;">
    <div class="container">
     <div class="row">
       <div class="center_prod_1 clearfix">
        <div class="col-sm-12">
         <h6 class="mgt col_1 normal"><a href="{{url('/')}}">Home</a>  <i style="font-size:14px; margin-left:5px; margin-right:5px;" class="fa fa-chevron-right"></i>   About Us</h6>
        </div>
       </div>
     </div>
    </div>
    </section>

<section id="about" class="clearfix" style="margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            @foreach ($aboutus as $ab)
            <div class="col-lg-8">
                <div class="card clearfix">
                    <div class="about_1l clearfix">
                        <h4>{{$ab->title}}</h4>
                        <p>{{$ab->description1}}</p>
                        <div class="about_1m clearfix">
                            <p>{{$ab->description2}}</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card clearfix">

                </div>
            </div> --}}
            @endforeach
        </div>
    </div>
</section>






@endsection
