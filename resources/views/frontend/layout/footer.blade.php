{{--

<section id="footer_bottom">
    <div class="container">
     <div class="row">
      <div class="footer_b clearfix">
        <div class="col-sm-5 space_left">
         <div class="footer_br clearfix">
         <ul class="mgt">
          <li>
           <a href="#">Our Policy</a>
           <a href="#">Shipping</a>
           <a href="#">Terms & Conditions</a>
           <a class="border_none" href="#">Refund Policy</a>
          </li>
         </ul>
        </div>
        </div>
        <div class="col-sm-7 space_left">
         <div class="footer_bl  text-right clearfix">
          <p>© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_1" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
         </div>
        </div>
      </div>
     </div>
    </div>
   </section>

   <script type="text/javascript">
   $(document).ready(function(){
       /*****Fixed Menu******/
       var secondaryNav = $('.cd-secondary-nav'),
          secondaryNavTopPosition = secondaryNav.offset().top;
          navbar_height = document.querySelector('.navbar').offsetHeight;

           $(window).on('scroll', function(){
               if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
                   secondaryNav.addClass('is-fixed');
                   document.body.style.paddingTop = navbar_height + 'px';

               } else {
                   secondaryNav.removeClass('is-fixed');
                   document.body.style.paddingTop = '0'
               }
           });

   });
   </script>

   </body>

   </html> --}}
   {{-- main footer --}}
   {{-- <section id="footer"  >
    <div class="container">
        <div class="row">
            <div class="footer_1 mgt clearfix">
                @php
                $categories = \App\Models\Category::all();
              @endphp

                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3" style="font-size: 1.7rem;"> OUR CATEGORIES</h4>
                        @foreach($categories as $category)
                        <h5 style="font-size: 1.5rem;">
                            <a class="hvr-forward col" href="#">{{ $category->name }}</a>
                        </h5>
                    @endforeach
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3" style="font-size: 1.7rem;">OUR STORY</h4>
                        <h5 style="font-size: 1.5rem;"><a class="hvr-forward col" href="{{url('/')}}">Home</a></h5>
                        <h5 style="font-size: 1.5rem;"><a class="hvr-forward col" href="{{url('/Aboutus')}}">About Us</a></h5>
                        <h5 style="font-size: 1.5rem;"><a class="hvr-forward col" href="{{url('/Contactus')}}">Contact Us</a></h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3" style="font-size: 1.7rem;">HELP</h4>
                        <h5 style="font-size: 1.5rem;"><a class="hvr-forward col" href="{{url('/Aboutus')}}">About Us</a></h5>
                        <h5 style="font-size: 1.5rem;"><a class="hvr-forward col" href="{{url('/Contactus')}}">Contact Us</a></h5>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3" style="font-size: 1.7rem;">Social Links</h4>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 style="font-size: 1.5rem; margin: 0; color: white;">© {{ date('2024') }} Veeha Agate. All Rights Reserved.</h2>
            </div>
        </div>
    </div>
</section>



   <script type="text/javascript">
   $(document).ready(function(){
       /*****Fixed Menu******/
       var secondaryNav = $('.cd-secondary-nav'),
          secondaryNavTopPosition = secondaryNav.offset().top;
          navbar_height = document.querySelector('.navbar').offsetHeight;

           $(window).on('scroll', function(){
               if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
                   secondaryNav.addClass('is-fixed');
                   document.body.style.paddingTop = navbar_height + 'px';

               } else {
                   secondaryNav.removeClass('is-fixed');
                   document.body.style.paddingTop = '0'
               }
           });

   });
   </script> --}}
   <style>
    /* General footer styles */

    #footer h4 {
        font-family:'Roboto';
        font-weight: normal; /* Unbold the title */
        font-size: 1.1rem; /* Make the title font slightly smaller */
        color: #cccccc; /* Dimmed color for the title */
    }

    #footer h5, #footer p, #footer a {
        font-family: 'Roboto';
        font-weight: normal; /* Unbold the text */
        font-size: 1.1rem; /* Slightly smaller font size for general text */
        color: #fff; /* Keep text color white */
    }

    #footer a {
        background-color: #172337;
        font-family: 'Roboto';
        /* font-family: 'Poppins', sans-serif; */
        color: #fff; /* Ensure links are white */
        text-decoration: none; /* Remove underline from links */
    }

    #footer a:hover {
        text-decoration: underline; /* Underline on hover */
    }

    /* Optional: Make social links slightly smaller */
    .social-network li a {
        font-size: 18px;
    }
</style>

<section id="footer" style="background-color: #172337; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="footer_1 mgt clearfix">
                @php
                $categories = \App\Models\Category::all();
                @endphp

                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3">OUR CATEGORIES</h4>
                        @foreach($categories as $category)
                        <h5>
                            <a class="hvr-forward col" href="#">{{ $category->name }}</a>
                        </h5>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3">OUR STORY</h4>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/') }}">Home</a>
                        </h5>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/Aboutus') }}">About Us</a>
                        </h5>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/Contactus') }}">Contact Us</a>
                        </h5>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3">CONSUMER POLICY</h4>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/privacypolicy') }}">Privacy Policy</a>
                        </h5>

                        <h5>
                            <a class="hvr-forward col" href="{{ url('/termscondition') }}">Terms and Conditions</a>
                        </h5>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/cancellation') }}">Cancellation and Refund</a>
                        </h5>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/shipping') }}">Shipping and delivery</a>
                        </h5>
                    </div>
                </div>
                {{-- <div class="col-sm-2">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3">HELP</h4>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/Aboutus') }}">About Us</a>
                        </h5>
                        <h5>
                            <a class="hvr-forward col" href="{{ url('/Contactus') }}">Contact Us</a>
                        </h5>
                    </div>
                </div> --}}

                <div class="col-sm-3">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3">REGISTERED ADDRESS</h4>
                        <p>
                            VEEHA AGATE<br>
                            Ali Powerhouse Road,<br>
                            Khambhat-388620<br>
                            Phone no.: 8980405701<br>
                            Email: <a href="mailto:veehaagate@gmail.com">veehaagate@gmail.com</a><br>
                            GSTIN: 24DKPPK4864Q1Z7<br>
                            State:24-Gujarat
                        </p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="footer_1i clearfix" style="background-color: #172337;">
                        <h4 class="mgt col_3" >SOCIAL LINKS</h4>
                        <ul class="social-network social-circle" style= "background-color: #172337;">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 style="font-size: 1.3rem; margin: 0; color: white; font-family: 'Roboto'; ">© {{ date('Y') }}  VEEHA AGATE. All Rights Reserved.</h2>
            </div>
        </div>
    </div>
</section>
