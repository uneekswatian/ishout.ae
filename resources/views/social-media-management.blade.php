@extends('layouts.website.animated-pages-layout')
@section('title')iShout Media - Social Media Management @stop

@section('content')
    
    <header class="masthead text-white gradientRed">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="row">
                <div class="col-lg-4 offset-lg-1 bannerPic">
                    <img class="w-100" src="{{ asset('/assets/images/banner_socialMedia.png') }}" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 bannerText align-self-center">
                    <h1>Charismatic Content</h1>
                    <h2>Cutting-edge for a Competitive-edge</h2>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-8 py-3 py-md-5">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <h3 class="mb-4">Take Social Media
                        <br>
                        to the next level</h3>
                        <p class="small">Facebook, SnapChat, Instagram, and Tiktok are the crucial marketing pillars of today's business life. Those channels act as facets to reaching your customers and building your brand's trust. Our expert strategists will work with you towards establishing and developing your social media platforms to become the main point of credible source by your audience.
                        </p>
                        <!-- <button type="submit" class="btn btn-pink-reverse mt-3">&nbsp; READ MORE &nbsp;</button> -->
                    </div>
                    <div class="col-lg-6 offset-lg-1 px-md-5">
                        <img class="w-100" src="{{ asset('/assets/images/pic-next-level.png') }}" alt="">
                    </div>
                </div>         
            </div>
        </div>
        
        <div class="row justify-content-center greyPanel">
            <div class="col-md-8 py-3 py-md-5">
                <div class="row">
                    <div class="col-lg-6  px-md-5">
                        <img class="w-100" src="{{ asset('/assets/images/pic-social-media.png') }}" alt="">
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <h3 class="mb-4">Social Media Marketing</h3>
                        <p class="small">Social media marketing is the most effective way used by companies to advertise their products and services. Through your professional channels, businesses can directly interact with their customers and deliver the needed message.
                        </p>
                        <!-- <button type="submit" class="btn btn-pink-reverse mt-3">&nbsp; READ MORE &nbsp;</button> -->
                    </div>
                </div>         
            </div>
        </div>

        <div class="row justify-content-center position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-8 py-3 py-md-5">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <h3 class="mb-4">Social Media Management</h3>
                        <p class="small">Our creative management team will work with you to spread your message and reflect your brand identity through creative engaging personalized stories. Content from which your audience will share and relate to using up-to-date concepts and marketing tech knowledge. Creating multi-channel integrated campaigns will assure that you get the maximum reach and impact throughout all different social media channels depending on your industry. 
                        </p>
                        <!-- <button type="submit" class="btn btn-pink-reverse mt-3">&nbsp; READ MORE &nbsp;</button> -->
                    </div>
                        <div class="col-lg-6 offset-lg-1 px-md-5">
                            <img class="w-100" src="{{ asset('/assets/images/social-media-mgt.png') }}" alt="">
                        </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center pinkPanel position-relative">
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="col-md-10 text-center py-3 py-md-5">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="text-white">Our Services Include</h2>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-01.png') }}" alt=""></figure>
                            <h4>Fully Managed Service</h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-02.png') }}" alt=""></figure>
                            <h4>Campaign Ideation & Strategy</h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-03.png') }}" alt=""></figure>
                            <h4>Campaign Setup</h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-04.png') }}" alt=""></figure>
                            <h4>Reaching Your Target Audience</h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-05.png') }}" alt=""></figure>
                            <h4>Campaign Insights </h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3">
                        <div class="service-box h-100">
                            <figure><img src="{{ asset('/assets/images/s-icon-06.png') }}" alt=""></figure>
                            <h4>iShout Screening Standard</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center gradientBlue position-relative">
            <div class="whitePattern"></div>
            <div class="col-md-10 py-3 py-md-5 text-center">
                <div class="slider case-studies-slider">                    
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-01.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-02.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-03.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-01.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-02.jpg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/assets/images/casestudy-03.jpg') }}" alt="">
                    </div>
                </div>
                <button type="submit" onclick="redirect()" class="btn btn-pink-reverse mt-4">&nbsp; CASE STUDIES &nbsp;</button>         
            </div>
        </div>

        <div class="row justify-content-center contact position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-8 my-3 my-md-5">
                <div class="row text-left">
                    <div class="col-lg-4">
                        <h1>Start your<br>
                        Project</h1>
                        <hr class="left pink">
                        <br>
                        <i class="fas fa-map-marked-alt fa-lg text-pink"> </i>&nbsp;&nbsp;<h3> Contact </h3>
                        <br><br>
                        <p>
                            Office 303<br>
                            Dubai Insurance Building<br>
                            150 Sheikh Zayed Road Road Dubai UAE<br>
                            Email: <a href="mailto:info@ishout.ae" class="text-pink">info@ishout.ae</a><br>
                            Phone: <a href="tel:+971 55 779 9440" class="text-pink">+971 55 779 9440</a></p>
                    </div>
                    <div class="col-lg-8">
                        <h2 class="d-block text-center">Drop Us a Line</h2>
                        <br>
                        {{ Form::open(['url' => '/send-mail', 'method' => 'post', 'class' => 'form-horizontal' ]) }}
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    {{ Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name', 'required' => true]) }}
                                </div>
                                <div class="form-group col-lg-4">
                                    {{ Form::email('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                                </div>
                                <div class="form-group col-lg-4">
                                    {{ Form::text('subject', old('subject'), ['id' => 'subject', 'class' => 'form-control', 'placeholder' => 'Subject', 'required' => true]) }}
                                </div>
                                <div class="form-group col-lg-12 toppadding">
                                    {{ Form::textarea('message', old('message'), ['id' => 'message', 'class' => 'form-control', 'rows' => 1, 'placeholder' => 'Message', 'required' => true]) }}
                                </div>
                                <div class="form-group col-lg-12 text-center toppadding">
                                    <button type="button" onclick="sendMail()" class="btn btn-green-reverse">&nbsp;&nbsp; Send &nbsp;&nbsp;</button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        function redirect() {
            window.location.href = "{{ url('/social-media-management-case-studies') }}"
        }

        function sendMail(){
            if (validate() !== false){
                var url = "{{ url('send-mail') }}";
                var params = {
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'subject': $("#subject").val(),
                    'message': $("#message").val()
                };
                $.post(url, params, function(response){
                    alert("Thank you for your inquiry, will get back to you shortly.")
                });
            }
        }

        function validate(){

            if ($('#name').val() == ""){
                $('#name').focus();
                alert("Please enter your name");
                return false;
            }

            if ($('#email').val() == ""){
                $('#email').focus();
                alert("Please enter your email");
                return false;
            }

            if ($('#subject').val() == ""){
                $('#subject').focus();
                alert("Please enter your subject");
                return false;
            }

            if ($('#message').val() == ""){
                $('#message').focus();
                alert("Please enter your message");
                return false;
            }
        }
    </script>
@stop