@extends('layouts.app')
@section('content')
 <!--===================== PAGE-COVER ====================-->
        <section class="page-cover back-size" id="cover-car-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Car Search Result</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Car Search Result</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="search-result-page" class="innerpage-section-padding">
        		<div class="container">
        			<div class="row">
                        
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                        	<div class="page-search-form">
                            	<h2>Search the <span>Car <i class="fa fa-car"></i></span></h2>
                                
                                <form method="post" action="/filter" class="pg-search-form">
                                	{{ csrf_field() }} 
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label><span><i class="fa fa-map-marker"></i></span>Modele</label>
                                                <input class="form-control" name="modele" placeholder="Modele, Passat,Golf ..."/>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label><span><i class="fa fa-map-marker"></i></span>Agnecies</label>
                                                <?php $agencies = \App\Agency::all() ?>
                                                <select name="agency_id" class="form-control">
                                                	<option value=""> -- Choose Agnecy --</option>
                                                	@foreach($agencies as $agency)
                                                	<option value="{{$agency->id}}">{{$agency->name}}</option>
                                                	@endforeach
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-calendar"></i></span>Cities</label>
                                                        <select class="form-control" name="city_id">
                                                        	<option> -- Choose a City -- </option>
                                                        	<?php $Cities = \App\City::all(); ?>
                                                        	@foreach($Cities as $city)
                                                        		<option value="{{$city->id}}">{{$city->city}}</option>
                                                        	@endforeach
                                                        </select>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label><span><i class="fa fa-calendar"></i></span>Check Out</label>
                                                        <input class="form-control dpd2" placeholder="Date"/>
                                                    </div>
                                                </div><!-- end columns -->
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label><span><i class="fa fa-clock-o"></i></span>Time</label>
                                                <input class="form-control" placeholder="HH:MM"/>                                          	</div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                    
                                    <button class="btn btn-orange">Search</button>
                                </form>
                                    
                            </div><!-- end page-search-form -->
                            
                            
                    		<div class="row">
                            	@forelse($cars as $car)
	                            	<div class="col-sm-6 col-md-4 col-lg-3">
	                                    <div class="grid-block main-block cr-grid-block">
	                                    	<div class="main-img cr-grid-img">
	                                        	<a href="car-detail-left-sidebar.html">
	                                    			<img src="/storage/{{$car->image}}" class="img-responsive" alt="hotel-img" />
	                                            </a>
	                                            <div class="main-mask">
	                                                <ul class="list-unstyled list-inline offer-price-1">
	                                                    <li class="price">@convert($car->pricePerDay)<span class="divider">|</span><span class="pkg">{{$car->max_days}} Days Tour</span></li>
	                                                </ul>
	                                            </div><!-- end main-mask -->
	                                    	</div><!-- end cr-grid-img -->
	                                        
	                                         <div class="block-info cr-grid-info">
	                                         	<div class="rating">
	                                                <span><i class="fa fa-star orange"></i></span>
	                                                <span><i class="fa fa-star orange"></i></span>
	                                                <span><i class="fa fa-star orange"></i></span>
	                                                <span><i class="fa fa-star orange"></i></span>
	                                                <span><i class="fa fa-star lightgrey"></i></span>
	                                            </div><!-- end rating -->
	                                            
	                                         	<h3 class="block-title"><a href="car-detail-left-sidebar.html">{{$car->modele}}</a></h3>
	                                            <p class="block-minor">Bmw</p>
	                                            <ul class="list-unstyled list-inline car-features">
	                                            	<li><span><i class="fa fa-user"></i></span>04</li>
	                                                <li><span><i class="fa fa-briefcase"></i></span>04</li>
	                                                <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
	                                                <li><span><i class="fa fa-tint"></i></span>Fuel</li>
	                                                <li><span><i class="fa fa-music"></i></span>Music</li>
	                                            </ul>
	                                            <div class="grid-btn">
	                                            	<a href="car-detail-left-sidebar.html" class="btn btn-orange btn-block btn-lg">View More</a>
	                                            </div><!-- end grid-btn -->
	                                         </div><!-- end cr-grid-info -->
	                                    </div><!-- end cr-grid-block -->
	                                </div><!-- end columns -->
	                            @empty
	                            	<h1>No Car Found</h1>
                                @endforelse
                                

                            </div><!-- end row -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end search-result-page -->
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-dollar"></i></span>
                        	<h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-lock"></i></span>
                        	<h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-thumbs-up"></i></span>
                        	<h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-bars"></i></span>
                        	<h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>	
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        

@endsection