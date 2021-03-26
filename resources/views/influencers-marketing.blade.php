@extends('layouts.website.layout')
@section('title')iShout Media - Influencers Marketing @stop

@section('content')
    <header class="masthead text-white gradientPink">
        <div class="container">
            <div class="whitePattern"></div>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
            <div class="row">
                <div class="col-lg-7 offset-sm-0 bannerPic">
                    <img class="w-100" src="{{ asset('/assets/images/i-marketing-banner.png') }}" alt="">
                </div>
                    <div class="col-lg-5 bannerText align-self-center">
                        <h1>Powerful Platform</h1>
                        <p class="large">20,000 Key Influencers & Beyond</p>
                    </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center position-relative">
            <div class="blackPattern"></div>
            <div class="col-md-8 text-center py-3 py-md-5">
                <h1>Creative Influencers 
                <br>
                Marketing Agency & Exclusive Dashboard
                </h1>
                <p class="my-4">Looking for an Influencers Marketing Agency? We have access to +20,000 authentic influencers around the region from different industries. Our in-house specialized team focus on creating a comprehensive 360° creative content strategy that will match your marketing KPIs and campaign goals.
                </p>
                <button type="submit" onclick="redirect()" class="btn btn-pink-reverse">&nbsp;&nbsp; LOGIN NOW &nbsp;&nbsp;</button>
            </div>
        </div>

        <div class="row justify-content-center greyPanel">
            <div class="col-md-10 text-center py-3 py-md-5">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2>How we do it?</h2>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                                <figure><img src="{{ asset('/assets/images/p-icon-01.png') }}" alt=""></figure>
                            <h4>Fully Managed Service</h4>
                            <p>Dedicated team of influencer marketing experts assigned to plan, analyze, recruit, manage & execute your campaign.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                            <figure><img src="{{ asset('/assets/images/p-icon-02.png') }}" alt=""></figure>
                            <h4>Campaign Ideation & Strategy</h4>
                            <p>based on your objectives, our expert creative team will create, develop, and plan your influencers marketing campaign based on the campaign objectives and branding goals

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                            <figure><img src="{{ asset('/assets/images/p-icon-03.png') }}" alt=""></figure>
                            <h4>Campaign Setup</h4>
                            <p>All you have to do is share with us your campaign brief, it's that simple! 

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                            <figure><img src="{{ asset('/assets/images/p-icon-04.png') }}" alt=""></figure>
                            <h4>Reaching Your Target Audience</h4>
                            <p>Through our exclusive dashboard, our auditing technology will filter the matching authentic profiles for your brand and campaign objectives
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                            <figure><img src="{{ asset('/assets/images/p-icon-05.png') }}" alt=""></figure>
                            <h4>Campaign Insights </h4>
                            <p>iShout exclusive Platform will track your campaign on a real time basis. Through monitoring the engagement level, and constant campaign tracking, reports shall be provided
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 my-5">
                        <div class="process-box h-100">
                            <figure><img src="{{ asset('/assets/images/p-icon-06.png') }}" alt=""></figure>
                            <h4>iShout Screening Standard</h4>
                            <p> Profiles are double screened by our technology & content team for fake followers, low engagement, illegal or abusive content, demographics & psycho-graphics
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-10 text-center py-3 py-md-5">
                <div class="row">
                    <div class="col-lg-6 px-md-5">
                        <img class="w-100" src="{{ asset('/assets/images/loud-influencing.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 text-left">
                        <h2>Loud Influencing</h2>
                        <ul class="number">
                            <li><span>1</span>An influencers talent agency (macro, micro, and celebrity) for top-notch marketing</li>
                            <li><span>2</span>Intelligent influencer database analysis based on your brand requirements</li>
                            <li><span>3</span>Accurate view of influencer performance, audience, impact, and credibility</li>
                            <li><span>4</span>Guiding insights from millions of profile followers</li>
                            <li><span>5</span>Filter influencers based on brand criteria</li>
                            <li><span>6</span>Choose and book through the Tech platform</li>
                            <li><span>7</span>Local team to run your campaign</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center greyPanel">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-12 my-3 my-md-5">
                        <h2>Case Studies</h2>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-06.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-01.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-02.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-03.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-04.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    <div class="col-md-4 case-study-img">
                        <figure>
                            <img src="{{ asset('/assets/images/cpcs-05.jpg') }}" alt="iShout Media">
                        </figure>
                    </div>
                    
                    <div class="col-12 pb-5 pt-3" >
                        <a href="{{ url('/influencers-marketing-case-studies') }}" class="text-dark">View All Case Studies &nbsp;<i class="fas fa-arrow-right"></i></a>
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
                                    <button type="submit" class="btn btn-pink-reverse">&nbsp;&nbsp; Send &nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>      
@stop

@section('js')
    <script type="text/javascript">
        function redirect() {
            // window.location.href = "{{ url('/login') }}"
            window.location.href = "#"
        }
    </script>
@stop