@extends('layouts.website.animated-pages-layout')
@section('title')iShout Media @stop

@section('content')
    
    <div class="container-fluid text-white gradientBlue pt-5">
        <div class="whitePattern"></div>
        <div class="banner_left"></div>
        <div class="banner_right"></div>
        <div class="row pt-5 mt-5">
            <div class="col-lg-4 align-self-center">
                <h1 class="mb-2">We Design
                <br>
                Experiences, Not Ads</h1>
                <p class="small">We're a full service influencer marketing agency producing intent-driven campaigns that merge the needs of brands, audiences & influencers

                </p>
                    <button type="submit" onclick="redirect()" class="btn sharp-corn btn-pink-reverse mt-2">&nbsp; READ MORE &nbsp;</button>
            </div>
            
            <div class="col-lg-7 offset-lg-1">
                <div class="row py-5 mb-lg-5">
                    <div class="col-12">
                        <h2>Services</h2>
                    </div>
                    <div class="col-lg-4">
                        <div class="home-box h-100">
                            <figure><img src="{{ asset('/assets/images/services-01.jpg') }}" alt=""></figure>
                            <h4>Influencers Marketing</h4>
                            <p class="small">Looking for an Influencer within UAE or GCC countries? We have access to +20,000 authentic influencers around the region from different industries. 
                            </p>
                            <hr />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="home-box h-100">
                            <figure><img src="{{ asset('/assets/images/services-02.jpg') }}" alt=""></figure>
                            <h4>Social Media Management</h4>
                            <p class="small">Social media marketing is the most effective way used by companies to advertise for their products and services. 
                            </p>
                            <hr />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="home-box h-100">
                            <figure><img src="{{ asset('/assets/images/services-03.jpg') }}" alt=""></figure>
                            <h4>Content Production</h4>
                            <p class="small">Video marketing can be an important part of your digital marketing strategy, giving a face and voice to your business and providing high SEO value for your website. 
                            </p>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-white">
        	<hr class="white-thin"/>
            <div class="col align-self-center">
                <p class="small m-0">OUR CLIENTS</p>
            </div>
            <div class="col-8"> 
                <div class="slider clients-slider">
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-01.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-02.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-03.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-04.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-05.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-06.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-07.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-01.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/client-logo-02.png') }}" alt="">
                    </div>
                </div>
            </div>
          
            <div class="col align-self-center">
                <p class="small m-0">STAY CONNECTED</p>
            </div>
          
            <div class="col align-self-center">
                <ul class="socialMedia">
                    <li><a href="https://www.instagram.com/ishout.ae/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/ishoutmedia"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC-xeWBY00AgWsx3dgxLTmhA"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
          
        </div>

      <div class="row py-3 footer text-white text-center">
          <div class="col-md-4 text-md-left">
            <a href="#">Terms & Conditions</a> |   <a href="#">Privacy & Policy</a> |   <a href="{{ url('/contact-us') }}">Contact us</a>
          </div>
          
          <div class="col-md-4 text-center">
          @Copyrights | <a href="{{ url('/')}}">iShoutmedia.ae</a>. | All rights reserved. 2020 
          </div>
          
          <div class="col-md-4 text-md-right">
              Email : <a href="mailto:info@ishout.ae">info@ishout.ae</a> |   Contact : <a href="tel:+971 4 227 1710">+971 4 227 1710</a>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('/assets/js/scrollreveal.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('/assets/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
@stop

@section('js')
    <script type="text/javascript">
        function redirect() {
            window.location.href = "{{ url('/about-us') }}"
        }
    </script>
@stop