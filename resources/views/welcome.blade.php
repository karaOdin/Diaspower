@extends('layouts.app')
@section('title','Accueil')
@section('content')
        <style type="text/css">
            .innerpage-section-padding{
                padding-top: 0;
            }
            .affix ~ section{
                top: 0;
            }
        </style>

        @if(session()->has('message'))
          <script>

                var type = "{{Session::get('alert-type','success')}}"
                 if(type == 'success')
                {
                    toastr.success("{{ Session::get('message') }}");
                }
                else
                {
                    toastr.error("{{Session::get('message')}}");
                }
            
          </script>
        @endif
        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">

            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    @foreach($sliders as $slider)
                    <li class="item-1" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('{{ Voyager::image($slider->image) }}') 50% 0%; background-size:cover; height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>{{$slider->smaill_text}}</h2>
                                <h1>{{$slider->big_text}}</h1>
                                <a href="{{$slider->link}}" class="btn btn-default">Voir plus</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    @endforeach
                   
                </ul>
            </div><!-- end slider -->
            
            <div id="about-content-2" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="page-heading">
                            <h2>Bienvenue</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                            <div id="abt-cnt-2-img">
                                <img src="/storage/{{setting('about.admin_about_image')}}" class="img-responsive" alt="about-img" />
                            </div><!-- end abt-cnt-2-img -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                            <div id="abt-cnt-2-text">
                                <h2>  <!--<img src="/storage/{{setting('site.logo')}}" style="margin-right: 15px;">--> <img src="/images/diaspower.png" style="width: 60%"> </h2>
                                <p>{{setting('site.description')}}</p>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-diamond"></i></span>
                                            <h4>Meilleurs services</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-clock-o"></i></span>
                                            <h4>24/7 Disponibilité</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-star"></i></span>
                                            <h4>5 Évaluation étoilée</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end abt-cnt-2-text -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end about-content-2 -->



            <div class="search-tabs" id="search-tabs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            <ul class="nav nav-tabs center-tabs">
                                
                                <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hôtels</span></a></li>
                                <li><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Voitures</span></a></li>
                            </ul>
        
                            <div class="tab-content">

                                <div id="flights" class="tab-pane in active">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="From" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="To" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Chercher</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->
                                
                                <div id="hotels" class="tab-pane">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Rooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adults</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Kids</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Chercher</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->

                                <div id="tours" class="tab-pane">
                                    <form>
                                        <div class="row">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="City,Country" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                                <div class="row">
    
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adults</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Kids</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Chercher</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->
                                
                                <div id="cruise" class="tab-pane">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="From" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="To" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Chercher</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end columns -->
                                    </form>
                                </div><!-- end cruises -->

                                <div id="cars" class="tab-pane">
                                    <form method="post" action="/filter">
                                    {{ csrf_field() }}                  
                                        <div class="row">
                                        
                                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                                                <div class="row">
                                                
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="phone" name="phone" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="modele" name="modele" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
    
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Chercher</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->                  
                                    </form>
                                </div><!-- end cars -->
                                
                            </div><!-- end tab-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
        
        
        <!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding" style="top: 120px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading">
                            <h2>Réservez votre hôtel en Algérie</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                            @foreach($hotels as $hotel)
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#">
                                            <img src="/storage/{{$hotel->image}}" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price"> @convert($hotel->pricePerDay) DZD<span class="divider">|</span><span class="pkg">Par Nuitx</span></li>
                                                
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="#">{{$hotel->name}}</a>
                                            <p>From: {{$hotel->city->city}}</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            @endforeach                            
                        </div><!-- end owl-hotel-offers -->
                        
                        <div class="view-all text-center">
                            <a href="{{route('hotels.index')}}" class="btn btn-orange">Voir tout</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-offers -->

         <!--================ houses OFFERS ==============-->
        <section id="vehicle-offers" class="section-padding" style="padding-top: 56px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading">
                            <h2>Logements privés</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                            @foreach($houses as $house)
                            <div class="col-sm-6 col-md-4">
                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="{{route('houses.show',$house->slug)}}">
                                            <img src="/storage/{{$house->image}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                        
                                    </div><!-- end vehicle-img -->
                                    
                                    <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">{{$house->pricePerDay}} DZD <span class="divider">|</span><span class="pkg">Par Nuitx</span></li>
                                                
                                            </ul>
                                        </div><!-- end main-mask -->
                                        
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="{{route('houses.show',$house->slug)}}"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="{{route('houses.show',$house->slug)}}">{{$house->name}}</a>
                                            <p>From: {{$house->city->city}}</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->
                            @endforeach
                                                        
                        </div><!-- end row -->
                        
                        <div class="view-all text-center">
                            <a href="{{route('houses.index')}}" class="btn btn-orange">Voir tout</a>
                        </div><!-- end view-all -->      
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end vehicle-offers --> 
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features" style="padding:35px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Garantie du meilleur prix</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Sûr et sécurisé</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Meilleurs agents automobiles</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Guide de réservation</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->
                
        
      
                     
        
        <!--==================== TESTIMONIALS ====================-->
        <section id="testimonials" class="section-padding back-size">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading white-heading">
                            <h2>Témoignages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                            
                               <?php 
                                    $quotes = \App\Quote::all();
                                    $indx = 0;
                                    $imgIndenx = 0;
                                ?>
                                @foreach($quotes as $quote)
                                <div class="item <?php $indx == 0 ? print('active') : print(''); $indx++; ?>">
                                    <i><blockquote>{{$quote->quote}}</blockquote></i>
                                    
                                    <small>{{$quote->name}}</small>
                                </div><!-- end item -->
                                @endforeach
                            </div><!-- end carousel-inner -->
                            
                            <ol class="carousel-indicators">
                                @foreach($quotes as $image)
                                <li data-target="#quote-carousel" data-slide-to="<?php print($imgIndenx++) ?>" class="active"><img src="/storage/{{$image->image}}" class="img-responsive"  alt="client-img">
                                </li>
                                @endforeach
                            </ol>
        
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 
        
       
        
        
                               
        
        <!--==================== HIGHLIGHTS ====================-->
        <section id="highlights" class="section-padding back-size" style="padding:35px;"> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div id="boxes">
                            
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                                    <div class="highlight-box">
                                        <div class="h-icon">
                                            <span><i class="fa fa-plane"></i></span>
                                        </div><!-- end h-icon -->
                                        
                                        <div class="h-text">
                                            <span class="numbers">2496</span>
                                            <p>Outstanding Tours</p>
                                        </div><!-- end h-text -->                           
                                    </div><!-- end highlight-box -->                       
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                                    <div class="highlight-box">
                                        <div class="h-icon">
                                            <span><i class="fa fa-ship"></i></span>
                                        </div><!-- end h-icon -->
                                        
                                        <div class="h-text cruise">
                                            <span class="numbers">1906</span>
                                            <p>Worldwide Cruise</p> 
                                        </div><!-- end h-text -->                           
                                    </div><!-- end highlight-box -->                       
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                                    <div class="highlight-box">
                                        <div class="h-icon">
                                            <span><i class="fa fa-taxi"></i></span>
                                        </div><!-- end h-icon -->
                                        
                                        <div class="h-text taxi">
                                            <span class="numbers">2033</span>
                                            <p>Luxury Car Booking</p>   
                                        </div><!-- end h-text -->                           
                                    </div><!-- end highlight-box -->                       
                                </div><!-- end columns -->
                                
                            </div><!-- end boxes -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->
        
             
        <!--================ VEHICLE OFFERS ==============-->
        <section id="vehicle-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading">
                            <h2>Offres de véhicules</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                            @foreach($cars as $car)
                            <div class="col-sm-6 col-md-4">
                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="#">
                                            <img src="/storage/{{$car->image}}" class="img-responsive" alt="tour-img" />
                                        </a>
                                        
                                    </div><!-- end vehicle-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">DZD @convert($car->pricePerDay)<a href="{{route('cars.show',$car->slug)}}" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info vehicle-info">
                                        <div class="main-title vehicle-title">
                                            <a href="{{route('cars.show',$car->id)}}">{{$car->modele}} - {{$car->make->make}}</a>
                                            <p>PAR JOUR</p>
                                            
                                        </div><!-- end vehicle-title -->
                                    </div><!-- end vehicle-info -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->
                            @endforeach
                                                        
                        </div><!-- end row -->
                        
                        <div class="view-all text-center">
                            <a href="{{route('cars.index')}}" class="btn btn-orange">Voir tout</a>
                        </div><!-- end view-all -->      
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end vehicle-offers --> 
        
        
        
                
         <!--==================== VIDEO BANNER ===================-->
        <section id="video-banner" class="banner-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>{{setting('site.admin_video_title')}}</h2>
                        <p>{{setting('site.admin_video_description')}}</p>
                        
                        <a href="{{setting('site.admin_video')}}" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end video-banner -->
               
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>INSCRIVEZ-VOUS A NOTRE NEWSLETTER</h2>
                        <p>Abonnez-vous pour recevoir nos mises à jour intéressantes</p>  
                        <form method="post" action="{{route('newsletter.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control input-lg" placeholder="Entrez votre adresse email" required/>
                                    <span class="input-group-btn"><button type="submit" class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->

@endsection