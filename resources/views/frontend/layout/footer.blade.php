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
   <section id="footer">
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
                {{-- <div class="col-sm-6">
                    <div class="footer_1i clearfix">
                        <h4 class="mgt col_3" style="font-size: 1.7rem;">Join Our Newsletter</h4>
                        <p class="col" style="font-size: 1.5rem;">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero. Sed dignissim lacinia nunc.</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" style="font-size: 1.5rem;">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" style="font-size: 1.5rem;">
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div> --}}
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
                <h2 style="font-size: 1.5rem; margin: 0; color: white;">© {{ date('2024') }} InnoBrain. All Rights Reserved.</h2>
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
