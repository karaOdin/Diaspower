@extends('layouts.app')
@section('content')
	<style type="text/css">
		.invalid-feedback
		{
			color: red
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
            	@if(count($errors) > 0)
			        @foreach($errors->all() as $error)
			            toastr.error("{{ $error }}");
			        @endforeach
			    @endif
            	toastr.error("{{Session::get('message')}}");
            }
      </script>
    @endif
    
<!-- Date-Picker Stylesheet -->
        <link rel="stylesheet" href="/css/datepicker.css">
        
        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/slick-theme.css">

       <!--================ PAGE-COVER ===============-->
        <section class="page-cover" id="cover-car-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Car Detail Right Sidebar</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Car Detail Right Sidebar</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="car-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="/storage/{{$car->image}}" class="img-responsive" alt="feature-img"/></div>
                                   <?php $images = json_decode($car->multi_images); ?>
                                    @foreach($images as $image)
                                        <div><img src="/storage/{{$image}}" class="img-responsive" alt="feature-img"/></div>
                                    @endforeach
                                   
                                </div><!-- end feature-slider -->
                            	
                                <div class="feature-slider-nav">
                                    <div><img src="/storage/{{$car->image}}" class="img-responsive" alt="feature-img"/></div>
                                   <?php $images2 = json_decode($car->multi_images); ?>
                                    @foreach($images2 as $image)
                                        <div><img src="/storage/{{$image}}" class="img-responsive" alt="feature-img"/></div>
                                    @endforeach
                                  
                                </div><!-- end feature-slider-nav -->
                                
                                <ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data">{{$car->capacity}}</p></div></li>
                                	@if($car->max)
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">{{$car->max_days}}</p></div></li>
                                    @endif
                                    @if($car->discount)
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">{{$car->discount_value}}% OFF</p></div></li>
                                    @endif
                                </ul>
                            </div>  <!-- end detail-slider -->

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#car-information" data-toggle="tab">CAR INFORMATION</a></li>
                                    <li><a href="#cr-features" data-toggle="tab">Features</a></li>
                                    <li><a href="#rental-info" data-toggle="tab">Rental Info</a></li>
                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="car-information" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="/storage/{{$car->image}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>{{$car->modele}} - {{$car->make->make}}</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end car-information -->
                                	
                                    <div id="cr-features" class="tab-pane">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="/storage/{{$car->image}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>Features</h3>
                                                <ul class="list-unstyled list-inline car-features">
                                                    <li><span><i class="fa fa-user"></i></span>{{$car->capacity}}</li>
                                                    <li style="display: {{$car->gps ? '' : 'none'}}"><span><i class="fa fa-map-marker" ></i></span>Gps</li>
                                                    <li><span><i class="fa fa-music"></i></span>Music</li>
                                                    <li><span><i class="fa fa-tint"></i></span>{{$car->fuel->fuel}}</li>

                                                </ul>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end cr-features -->
                                    
                                    <div id="rental-info" class="tab-pane">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="/storage/{{$car->image}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>Rental Info</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end rental-info -->

                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                            <div class="available-blocks" id="available-cars">
                            	<h2>Other cars for this agency</h2>
                            	@foreach($sameAgencyCar as $agencyCar)
                            	<div class="list-block main-block cr-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img cr-list-img">
                                            <a href="car-detail-right-sidebar.html">
                                                <img src="/storage/{{$agencyCar->image}}" class="img-responsive" alt="car-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">{{ $agencyCar->pricePerDay}}<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end cr-list-img -->
                                        
                                        <div class="list-info cr-list-info">
                                            <h3 class="block-title"><a href="car-detail-right-sidebar.html">{{$agencyCar->type->type}}</a></h3>
                                            <p class="block-minor">{{$agencyCar->modele}} - {{$agencyCar->make->make}}</p>
                                            <ul class="list-unstyled list-inline car-features">
                                                    <li><span><i class="fa fa-user"></i></span>{{$agencyCar->capacity}}</li>
                                                    <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                                    <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                                    <li><span><i class="fa fa-tint"></i></span>{{$agencyCar->fuel->fuel}}</li>
                                                    <li><span><i class="fa fa-music"></i></span>Music</li>
                                                </ul>
                                            <a href="car-detail-right-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end crs-list-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end cr-list-block -->
								@endforeach
                               
                                
                            </div><!-- end available-cars -->
                            
                            
                            
                        </div><!-- end columns -->
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">DZD {{$car->discount ? $car->pricePerDay - ($car->pricePerDay * $car->discount_value)/100 : $car->pricePerDay}} <span>{{$car->make->make}}</span></h2>
                            
                            	<div class="booking-form">
                                	<h3>Book A Car</h3>
                                    <p>Find your dream car today</p>
                                    
                                    <form method="POST" action="{{route('reservation.store')}}">
                                    	{{ csrf_field() }}
                                    	<!--<div class="form-group">
                                    		<input type="text" class="form-control" placeholder="First Name" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Last Name" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="email" class="form-control" placeholder="Email" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Phone" required/>
                                        </div>-->
                                        
                                    		<input type="text" name="car_id" value="{{$car->id}}"  hidden="" />

                                    		<input type="text" name="city_id" value="1"  hidden="" />

                                    		<input type="text" name="pricePerDay" value="{{$car->discount ? $car->pricePerDay - ($car->pricePerDay * $car->discount_value)/100 : $car->pricePerDay}}"  hidden />

                                    		<input type="text" name="agency_id" value="{{$car->agency_id}}"  hidden />

                                        
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control " name="pickupDate" placeholder="Pick-Up Date" required/>                                       		<i class="fa fa-calendar"></i>
                                    		@error('pickupDate')
		                                            <span class="invalid-feedback" role="alert">
		                                                <strong>{{ $message }}</strong>
		                                            </span>
		                                 	@enderror
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control " name="returnDate" placeholder="Drop-Off Date" required/>                                       		<i class="fa fa-calendar"></i>

                                    		@error('returnDate')
		                                            <span class="invalid-feedback" role="alert">
		                                                <strong>{{ $message }}</strong>
		                                            </span>
		                                 	@enderror

                                        </div>

                                      
                                       
                                        
                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange">Confirm Booking</button>
                                    </form>
                                    
                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="#">
                                                <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                                <div class="ad-mask">
                                                    <div class="ad-text">
                                                        <span>Luxury</span>
                                                        <h2>Car</h2>
                                                        <span>Offer</span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->  
                        
                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end car-detail -->
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