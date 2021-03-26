@extends('layouts.website.animated-pages-layout')
@section('title')iShout Media - Video Content Production @stop

@section('content')
        
    <header class="masthead text-white gradientGreen">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="row">
                <div class="col-lg-4 py-lg-4 offset-lg-1 bannerPic">
                    <img class="w-100 m-lg-5" src="{{ asset('/assets/images/banner-video.png') }}" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 bannerText align-self-center">
                    <h1>Leverage the power
                    <br>
                    of  Video Marketing</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-9 py-3 py-md-5">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h3 class="mb-4">Our agency provides a whole 360° video solutions to match your business requirements. Each member is specialized in one area of video production services. 
                        </h3>
                    </div>
                    <div class="col-lg-6">
                        <img class="w-100" src="{{ asset('/assets/images/cp-case-studies-banner.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center greyPanel">
            <div class="col-lg-10 py-3 py-md-5">
                <div class="row">
                    <div class="col-md-12 gallery-tabs">
                        <ul class="nav nav-tabs justify-content-center mb-5" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">2D Animation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Infographics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Video Shooting and Editing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Character Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-6" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">Corporate Videos</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-01.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-02.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-03.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-04.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-05.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-06.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-07.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-08.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-04.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-05.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-03.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-08.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-05.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-06.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-01.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-08.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-03.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-04.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-05.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-06.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-07.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-08.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab-5">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-02.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-03.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-04.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-05.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-01.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-02.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-03.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-04.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-08.jpg') }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-sm-6 col-md-4 pb-4 mb-2">
                                        <img src="{{ asset('/assets/images/video-gal-09.jpg') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
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