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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <!-- Styles -->
        
        @include('css-js-declaration.css')

        <!--Toastr css-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <!--Toastr js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <style type="text/css">
            @media only screen and (max-width: 600px) {
                .logo-dias{
                        margin: -10px 0;
                        width: 65%;
                }

            }
            @media (min-width: 1200px){
                .main-navbar .nav > li > a
                {
                    font-size : 12px;
                    margin: 0 8px;
                }
            }

            @media only screen and (min-width: 1080px) {
                .logo-dias{
                    width: 80%;
                }
                .navbar-brand>img{
                    max-width: 80%
                }

            }

            .side-bar .support-contact p{
                font-size: 18px;
            }
                
        </style>
             

            <script type="text/javascript">
        
                $(document).ready(function() {
                    var isshow = localStorage.getItem('isshow');
                    if (isshow== null) {
                        localStorage.setItem('isshow', 1);

                        // Show popup here
                        $(document).ready(setTimeout(function(){
                            $("#popup-ad").modal('show');
                        },3000));
                    }
                });
            </script>
</head>
<body>
    <div id="#">
            <div id="popup-ad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">                   
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="popup-ad-text">
                                        <h4>Get</h4>
                                        <h2><span>20%</span> off</h2>
                                        <h4>on all flights booking</h4>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, inlucilius prodesset pri.</p>
                                        <a href="#" class="btn btn-orange">Book Now</a>
                                    </div><!-- end popup-ad-text -->
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="popup-ad-img">
                                        <img src="images/about-content-2.png" class="img-responsive" /> 
                                    </div><!-- end popup-ad-img -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                                               
                        </div><!-- end modal-bpdy -->
                    </div><!-- end modal-content -->
                </div><!-- end modal-dialog -->
            </div><!-- end popup-ad -->
            <!--====== LOADER =====-->
            <div class="loader"></div>
        
            <!--========== COLOR-PANEL ==========-->
            <div id="colorPanel" class="colorPanel">
                <a id="cpToggle" href="#"></a>
                <ul></ul>
            </div><!-- end colorPanel -->
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
                                    <li><span><i class="fa fa-phone"></i></span><a href="tel:{{setting('general-info.admin_tel')}}">{{setting('general-info.admin_tel')}}</a></li>
                                </ul>
                            </div><!-- end info -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div id="links">
                                <ul class="list-unstyled list-inline">
                                    @guest
                                    <li><a href="{{route('login')}}"><span><i class="fa fa-lock"></i></span>Mon compte</a></li>
                                    <li><a href="{{route('register')}}"><span><i class="fa fa-plus"></i></span> Créer un compte Diaspower</a></li>
                                    @else
                                    <li><a href="{{route('profile.show')}}"><span><i class="fa fa-user"></i></span>Profil</a></li>
                                     <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                             <i class="fa fa-sign-out"></i> se déconnecter
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                      </form>
                                    </li>
                                    @endguest
                                    <li>
                                       
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
                        <a href="/" class="navbar-brand"><img src="/storage/{{setting('site.logo')}}" class="logo-dias"></a>
                    </div><!-- end navbar-header -->
                    
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                            <li class="{{ request()->is('/') ? 'active' : ''}}" ><a href="/">Accueil</a></li>
                            
                            <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services logistiques<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ request()->is('/hotels') ? 'active' : ''}}"><a href="{{route('hotels.index')}}">Réservation d'hôtels</a></li>
                                    <li><a href="/cars">Location de véhicules</a></li>
                                    <li><a href="{{route('houses.index')}}">Appartements et villas</a></li>
                                    
                                </ul>           
                            </li>
                           
                           
                            <li class="{{ request()->is('juridicial') ? 'active' : ''}}"><a href="/juridicial">Assistance administrative & juridique</a>
                                
                            </li>
                            <li class="{{ request()->is('projects') ? 'active' : ''}}"><a href="/projects"> Suivi de projets</a></li>
                            <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">A Propos<span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="/about">A Propos</a>
                                    <li class="{{ request()->is('faq') ? 'active' : ''}}" ><a href="/faq">FAQ</a></li>                                    
                                </ul>           
                            </li>
                            
                            
                            <li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="/contact">Contactez-nous</a>

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
                            
                         
                            
                            <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Services logistiques<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="hotels-links">
                                <a href="/hotels" class="list-group-item"><span><i class="fa fa-building link-icon"></i></span> Réservation d'hôtels</a>
                                <a href="/cars" class="list-group-item"><i class="fa fa-car link-icon"></i></span> Location de véhicules </a>
                                <a href="{{route('houses.index')}}" class="list-group-item"><i class="fa fa-car link-icon"></i></span> Appartements et villas</a>
                              
                            </div><!-- end sub-menu -->
                            

                           
                            
                            <a href="/juridicial" class="list-group-item active" data-parent="#main-menu"><span><i class="fa fa-gavel link-icon
                            "></i></span>Assistance administrative & juridique </a>
                            
                            <a href="/projects"  class="list-group-item active"> <span><i class="fa fa-building link-icon"></i></span>Suivi de projets</a>

                           
                            <a href="#hotels-links1" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>A Propos<span><i class="fa fa-chevron-down arrow"></i></span></a>
                            <div class="collapse sub-menu" id="hotels-links1">
                                <a href="/about" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>A Propos</a>                                
                                <a href="/faq" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>FAQ</a>
                              
                            </div><!-- end sub-menu -->

                           <a href="/contact" class="list-group-item active"  data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Contactez-Nous</a> 
                            
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
                                <h3 class="footer-heading">CONTACTEZ-NOUS</h3>
                                <ul class="list-unstyled">
                                    <li><span><i class="fa fa-map-marker"></i></span>{{setting('general-info.admin_adress')}}</li>
                                    <li><span><i class="fa fa-phone"></i></span><a href="tel:{{setting('general-info.admin_tel')}}">{{setting('general-info.admin_tel')}}</a></li>
                                    <li ><span><i class="fa fa-envelope"></i></span><a href="mailto:{{setting('general-info.admin_email')}}">{{setting('general-info.admin_email')}}</a></li>
                                </ul>
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                                <h3 class="footer-heading">ENTREPRISE</h3>
                                <ul class="list-unstyled">
                                    <li><a href="/">Accueil</a></li>
                                    <li><a href="{{route('hotels.index')}}">Réservation d'hôtels</a></li>
                                    <li><a href="/cars">LOCATION DE Véhicule</a></li>
                                    <li><a href="/juridicial">Assistance administrative & juridique</a></li>
                                    <li><a href="/projects">Suivi de projets</a></li>
                                    
                                </ul>
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                                <h3 class="footer-heading">RESSOURCES</h3>
                                <ul class="list-unstyled">
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/about">A Propos</a></li>
                                    <li><a href="/contact">Contactez Nous</a></li>
                                    <li><a href="/login"> Se Connecter</a></li>
                                    <li><a href="/register">Inscription</a></li>
                                </ul>
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                                <h3 class="footer-heading">A PROPOS</h3>
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
                                <p>© {{ date('Y') }} {{ config('app.name') }}. @lang('Tous les droits sont réservés')</p>
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                                <ul class="list-unstyled list-inline">
                                    
                                </ul>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end footer-bottom -->
                
            </section><!-- end footer -->
    </div><!-- end root div -->
    <!-- js -->
    @include('css-js-declaration.js')
    <script src="/js/popup-ad.js"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
