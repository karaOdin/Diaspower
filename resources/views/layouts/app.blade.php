<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{setting('site.title')}} | @yield('title')</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
        @switch(request())

            @case(request()->is('faq'))
                @include('css_component.faqcss')
            @break

            @case(request()->is('/'))
                @include('css_component.welcomecss')
            @break

            @case(request()->is('cars'))
                @include('css_component.carscss')
            @break

            @case(request()->is('cars/*'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('about'))
                @include('css_component.aboutcss')
            @break

            @default
                @include('css_component.welcomecss')

        @endswitch
        <!--Toastr css-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <!--Toastr js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>

        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
        <!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." required />
                                <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>{{setting('general-info.admin_adress')}}</li>
                                <li><span><i class="fa fa-phone"></i></span>{{setting('general-info.admin_tel')}}</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                @guest
                                <li><a href="{{route('login')}}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li><a href="{{route('register')}}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                @else
                                <li><a href="{{route('profile.show')}}"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                 <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                         <i class="fa fa-sign-out"></i> Logout
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                  </form>
                                </li>
                                @endguest
                                <li>
                                    <form>
                                        <ul class="list-inline">
                                            <li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            
                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->              
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>Dias</span>Power</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="{{ request()->is('/') ? 'active' : ''}}" ><a href="/">Accueil</a></li>
                        <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="/about">A Propos</a>
                        <li class="{{ request()->is('faq') ? 'active' : ''}}" ><a href="/faq">FAQ</a></li>
                        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">logistic services<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ request()->is('/hotels') ? 'active' : ''}}"><a href="/hotels">Hotels</a></li>
                                <li><a href="/cars">Cars</a></li>
                                <li><a href="#">Machinery</a></li>
                                
                            </ul>           
                        </li>
                       
                       
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Legal Department<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/#">Lawyer</a></li>
                                <li><a href="/#">Notary</a></li>
                                <li><a href="/#">The judicial officer</a></li>
                                
                               
                            </ul>           
                        </li>
                       <li><a href="#">Real Estate</a></li>
                        <li class=""><a href="/contact">Contactez Nous</a>

                        <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->        
        
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>DiasPower</h2>

                <div id="main-menu">
                    <div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="/" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Acceuil</a>
                        
                     
                        
                        <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="/hotels" class="list-group-item">Hotels</a>
                          
                        </div><!-- end sub-menu -->
                        
                       
                        
                        <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a href="/cars" class="list-group-item">Cars</a>
                            
                        </div><!-- end sub-menu -->
                       
                       <a href="/about" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>A Propos</a>

                       <a href="/contact" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Contactez Nous</a> 
                        
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->

        @yield('content')
        
                <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">CONTACT US</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>{{setting('general-info.admin_adress')}}</li>
                                <li><span><i class="fa fa-phone"></i></span>{{setting('general-info.admin_tel')}}</li>
                                <li><span><i class="fa fa-envelope"></i></span>{{setting('general-info.admin_email')}}</li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li><a href="hotels">Hotels</a></li>
                                <li><a href="/cars">Cars</a></li>
                                <li><a href="/about">A Prpos</a></li>
                                <li><a href="/contact">Contactez Nous</a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
                            <p>{{setting('site.about')}}</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li><a href="{{setting('social-media.admin_facebook')}}"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_twitter')}}"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_google')}}"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_pinterest')}}"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_instagram')}}"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_linkedin')}}"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href="{{setting('social-media.admin_youtube')}}"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
       <!-- Styles -->
        @switch(request())

            @case(request()->is('faq'))
                @include('js_component.faqjs')
            @break

            @case(request()->is('/'))
                @include('js_component.welcomejs')
            @break

            @case(request()->is('cars'))
                @include('js_component.carsjs')
            @break

            @case(request()->is('cars/*'))
                @include('js_component.cars_detailjs')
            @break

            @case(request()->is('about'))
                @include('js_component.aboutjs')
            @break

            @default
                @include('js_component.welcomejs')
           
        @endswitch
</body>
</html>
