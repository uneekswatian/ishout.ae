@extends('layouts.website.layout')
@section('title')iShout Media - Social Media Management Case Studies @stop

@section('content')
    
    <header class="masthead text-white gradientPink">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="row">
                <div class="col-lg-4 offset-lg-2 offset-sm-0 bannerPic">
                    <img class="w-100" src="{{ asset('/assets/images/sm-case-studies-banner.png') }}" alt="">
                </div>
                <div class="col-lg-4 offset-lg-1 bannerText align-self-center">
                    <h1>Social Media
                    <br>
                    Case Studies</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center greyPanel">
            <div class="col-md-10 text-center">
                <div class="row">
                    <div class="col-12 my-3 my-md-5">
                        <h1>Case Studies</h1>
                    </div>                        
                    <div class="col-md-7 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-01.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-5 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-02.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-5 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-03.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-7 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-04.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-7 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-05.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-5 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-06.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-5 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-07.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-7 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-08.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                </div>
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