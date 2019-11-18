@extends('layouts.app')
@section('title','Juridicial')
@section('content')
@if(session()->has('message'))
      <script>

            var type = "{{Session::get('alert-type','success')}}"
            toastr.success("{{ Session::get('message') }}");
          
      </script>
    @endif
  <!--========= PAGE-COVER ==========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Juridicial</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"> Juridicial</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
    <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="hotel-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">           
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="images/h-feature-1.jpg" class="img-responsive" alt="feature-img"/></div>
                                    
                                </div><!-- end feature-slider -->
                               
                            </div>  <!-- end detail-slider -->
                            <div class="content-jurid">
                            	<h2>{{setting('juridicial.admin_title')}}</h2>
                            	{!! setting('juridicial.admin_description') !!}
                            </div>
                            
                            
                            
                            
                            
                        </div><!-- end columns -->
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                                <h2 class="selected-price"> <span></span></h2>
                            
                                <div class="booking-form">
                                    <h3>Jridicial Form</h3>
                                    <p>Find solution for your isue</p>
                                    
                                    <form action="{{route('juridicial.store')}}" method="post">
                                    	{{ csrf_field() }}
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="title" name="title" required/>                                       
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="description" placeholder="Description"></textarea>                                       
                                        </div>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="file" required/>                                       
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                        	<select name="city_id" class="form-control">
                                        		<?php $cities = \App\City::all(); ?>
                                        		<option > -- Choose your city -- </option>
                                        		@foreach($cities as $city)
                                        			<option value="{{$city->id}}">{{$city->city}}</option>
                                        		@endforeach
                                        	</select>
                                        </div>
                                        
                                       
                                        
                                        
                                        
                                        <div class="checkbox custom-check">
                                            <input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange">Submit</button>
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
            </div><!-- end hotel-details -->
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