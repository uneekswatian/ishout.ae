@extends('layouts.website.layout')
@section('title')iShout Media - Content Production Case Studies @stop

    <header class="masthead text-white gradientGreen">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
                <div class="row">
                <div class="col-lg-5 offset-lg-1 offset-sm-0 bannerPic">
                    <img class="w-100" src="{{ asset('/assets/images/cp-case-studies-banner.png') }}" alt="">
                </div>
                <div class="col-lg-4 offset-lg-1 bannerText align-self-center">
                    <h1>Content Production
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
                        <hr class="left green">
                        <br>
                        <i class="fas fa-map-marked-alt fa-lg text-green"> </i>&nbsp;&nbsp;<h3> Contact </h3>
                        <br><br>
                        <p>
                            Office 303<br>
                            Dubai Insurance Building<br>
                            150 Sheikh Zayed Road Road Dubai UAE<br>
                            Email: <a href="mailto:info@ishout.ae" class="text-green">info@ishout.ae</a><br>
                            Phone: <a href="tel:+971 55 779 9440" class="text-green">+971 55 779 9440</a></p>
                    </div>
                    <div class="col-lg-8">
                        <h2 class="d-block text-center">Drop Us a Line</h2>
                        <br>
                        <form>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
                                </div>
                                <div class="form-group col-lg-12 toppadding">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="1"></textarea>
                                </div>
                                <div class="form-group col-lg-12 text-center toppadding">
                                    <button type="submit" class="btn btn-green-reverse">&nbsp;&nbsp; Send &nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div> 
@stop