@extends('frontend.layout.main')
@section('main-container')
<section id="center" class="clearfix center_prod">
    <div class="container">
        <div class="row">
            <div class="center_prod_1 clearfix">
                <div class="col-sm-12">
                    <h6 class="mgt col_1 normal">
                        <a href="#">Home</a>
                        <i style="font-size:14px; margin-left:5px; margin-right:5px;" class="fa fa-chevron-right"></i>
                        Contact Us
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" style="margin-bottom: 20px; margin-top:20px;">
    <div class="container">
        <div class="row">
            <div class="contact_1 clearfix">
                <div class="col-sm-6">
                    <div class="contact_1l clearfix">
                        <h1 class="mgt">How to find Us?</h1>
                        @foreach ($contactus as $contact)
                            <h5>
                                <a href="#"><i class="fa fa-envelope col_1"></i> {{ $contact->email }}</a>
                            </h5>
                            <h5>
                                <a href="#"><i class="fa fa-phone col_1"></i> {{ $contact->contact1 }}</a>
                            </h5>
                            <h5>
                                <a href="#"><i class="fa fa-phone col_1"></i> {{ $contact->contact2 }}</a>
                            </h5>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact_1r text-center clearfix">
                        <h1 class="mgt col_1">Get in Touch!</h1>
                        <form action="{{url('/Feedbackform')}}" method="POST">
                            @csrf
                        <input class="form-control" placeholder="Your Name" name="name" type="text">
                        <input class="form-control" placeholder="Your Email" name="email" type="text">
                        <textarea class="form-control form_1" placeholder="Your Comment" name="comment"></textarea>
                        {{-- <h4><a class="button_1" href="#">Submit</a></h4> --}}
                        <button class="button_1" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
