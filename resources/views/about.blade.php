@extends('layouts.website.layout')
@section('title')iShout Media - About @stop

@section('content')

    <header class="masthead text-white gradientBrown">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="row">
                <div class="col-lg-4 pl-5 bannerText align-self-center">
                    <h3>The Greatest Ideas
                        <br>
                        Are The Simplest
                    </h3>
                    <p class="small">Archive your brand objectives through iShout Media, a highly experienced local team with regional and internal expertise in Social Media, Content, and Impactful Creativity. iShout Media work with a client-focused, results-oriented mindset.</p>
                </div>
                <div class="col-lg-6 offset-lg-1 offset-sm-0 bannerPic">
                    <img class="img-fluid" src="{{ asset('/assets/images/banner_about.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center contact position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-8 my-3 my-md-5">
                <div class="row text-left">
                    <div class="col-lg-4">
                        <h1>
                            Start your<br>
                            Project
                        </h1>
                        <hr class="left brown">
                        <p>Achieve your brand objectives through I Shout Tech, a highly intelligent platform.</p>
                        <br>
                        <i class="fas fa-map-marked-alt fa-lg text-brown"> </i>&nbsp;&nbsp;<h3> Contact </h3>
                        <br><br>
                        <p>
                            Office 303<br>
                            Dubai Insurance Building<br>
                            150 Sheikh Zayed Road Road Dubai UAE<br>
                            Email: <a href="mailto:info@ishout.ae" class="text-brown">info@ishout.ae</a><br>
                            Phone: <a href="tel:+971 55 779 9440" class="text-brown">+971 55 779 9440</a>
                        </p>
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
                                    <button type="submit" class="btn btn-brown-reverse">&nbsp;&nbsp; Send &nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop