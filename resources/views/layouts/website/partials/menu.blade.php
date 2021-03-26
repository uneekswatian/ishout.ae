<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="divFull">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/assets/images/logo.png') }}" border="0" /></a>
        <button class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(strpos(Request::route()->uri, 'about-us') !== false) selected @endif"> 
                    <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                    <hr class="nav-item-hr">
                </li>
                <li class="nav-item @if(strpos(Request::route()->uri, 'influencers-marketing') !== false) selected @endif droplist ">
                    <a class="nav-link " href="{{ url('/influencers-marketing') }}">Influencers Marketing</a>
                    <i class="fas fa-chevron-down text-white"></i>
                    <ul class="dropdown">
                        <li class="@if(strpos(Request::route()->uri, 'influencers-marketing-case-studies') !== false) selected @endif">
                            <a href="{{ url('/influencers-marketing-case-studies') }}">Case Studies</a>
                        </li>
                    </ul>
                    <hr class="sub-nav-item-hr">
                </li>
                <li class="nav-item @if(strpos(Request::route()->uri, 'social-media-management') !== false) selected @endif droplist ">
                    <a class="nav-link " href="{{ url('/social-media-management') }}">Social Media Management</a>
                    <i class="fas fa-chevron-down text-white"></i>
                    <ul class="dropdown">
                        <li class="@if(strpos(Request::route()->uri, 'social-media-management-case-studies') !== false) selected @endif">
                            <a href="{{ url('/social-media-management-case-studies') }}">Case Studies</a>
                        </li>
                    </ul>
                    <hr class="sub-nav-item-hr">
                </li>            
                <li class="nav-item @if(strpos(Request::route()->uri, 'content-production') !== false) selected @endif droplist ">
                    <a class="nav-link" href="{{ url('/content-production') }}">Content Production</a>
                    <i class="fas fa-chevron-down text-white"></i>
                    <ul class="dropdown">
                        <li class="@if(strpos(Request::route()->uri, 'content-production-case-studies') !== false) selected @endif">
                            <a href="{{ url('/content-production-case-studies') }}">Case Studies</a>
                        </li>
                    </ul>
                    <hr class="sub-nav-item-hr">
                </li>
                <li class="nav-item">
                    <img src="{{ asset('/assets/images/icon-contact.png') }}" border="0" />
                    <a class="nav-link" href="{{ url('/contact-us') }}">GET IN TOUCH</a>
                </li>
            </ul>
        </div>
    </div>
</nav>