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
                    <div style="font-family: Arial, sans-serif; color: #333; line-height: 1.6; margin: 20px; padding: 35px; background-color: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                        <h2 style="font-size: 28px; color: black; text-align: center;">We Value Your Feedback</h2>
                        <p style="text-align: justify; font-size: 16px;">
                            We are here to assist you with any questions, concerns, or inquiries you may have.
                            Whether you need help with your order, product information, or anything else related to your shopping experience,
                            our customer service team is happy to help.
                        </p>

                        <h3 style="font-size: 20px; color: black;">How to Reach Us</h3>

                        <h4 style="font-size: 18px;">
                            <i class="fa fa-envelope" style="color: black;"></i> <strong>Email</strong>
                        </h4>
                        <p style="text-align: justify;">
                            For general inquiries, order assistance, or support, please email us at
                            <a href="mailto:veehaagate@gmail.com" style="color: black;">veehaagate@gmail.com</a>.
                            We aim to respond within 24-48 hours.
                        </p>

                        <h4 style="font-size: 18px;">
                            <i class="fa fa-phone" style="color:black;"></i> <strong>Phone</strong>
                        </h4>
                        <p style="text-align: justify;">
                            If you prefer to speak with us directly, call us at
                            <a href="tel:8980405701" style="color: black;">8980405701</a>.
                            Our customer service hours are Monday to Friday, 9 AM - 6 PM.
                        </p>

                        <h4 style="font-size: 18px;">
                            <i class="fa fa-map-marker" style="color: black;"></i> <strong>Mailing Address</strong>
                        </h4>
                        <p style="text-align: justify;">
                            You can also reach us by mail at the following address:<br>
                            veehaagate@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact_1r text-center clearfix" style="padding: 35px; background-color: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin-top:25px;">
                        <h1 class="mgt col_1" style="font-family: Arial, sans-serif; font-size: 28px; color: black;">Get in Touch!</h1><br>
                        <form action="{{url('/Feedbackform')}}" method="POST">
                            @csrf
                            <input class="form-control mb-3" placeholder="Your Name" name="name" type="text" style="border: 1px solid #333; border-radius: 4px; padding: 10px; color: black;"><br>
                            <input class="form-control mb-3" placeholder="Your Email" name="email" type="text" style="border: 1px solid #333; border-radius: 4px; padding: 10px; color: black;"><br>
                            <textarea class="form-control mb-3" placeholder="Your Comment" name="comment" style="border: 1px solid #333; border-radius: 4px; padding: 10px; color: black;"></textarea><br>
                            <button class="button_1" type="submit" style="background-color: black; color: white; border: none; border-radius: 4px; padding: 10px 15px; cursor: pointer; font-size: 16px;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
