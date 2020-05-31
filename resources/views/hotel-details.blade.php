@extends('layouts.app')
@section('title',$hotel->name)
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
    

   <!--================== PAGE-COVER ===============-->
        <section class="page-cover" id="cover-hotel-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">{{$hotel->name}}</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">{{$hotel->name}}</li>
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
                                    <div><img src="/storage/{{$hotel->image}}"/></div>
                                    <?php $images = json_decode($hotel->mult_image) ?>
                                    @foreach($images as $image)
                                    <div><img src="/storage/{{$image}}" class="img-responsive" alt="feature-img"/></div>
                                    @endforeach
                                    
                                </div><!-- end feature-slider -->
                            	
                                <div class="feature-slider-nav">
                                    <div><img src="/storage/{{$hotel->image}}" class="img-responsive" alt="feature-thumb"/></div>
                                    @foreach($images as $image)
                                    <div><img src="/storage/{{$image}}" class="img-responsive" alt="feature-img"/></div>
                                    @endforeach
                                </div><!-- end feature-slider-nav -->
                            </div>  <!-- end detail-slider -->

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#hotel-overview" data-toggle="tab">APERÇU DE L'HÔTEL</a></li>
                                   
                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="hotel-overview" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="/storage/{{$hotel->image}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>APERÇU DE L'HÔTEL</h3>
                                                {!! $hotel->description !!}
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->
                                	
                                    
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                            
                            
                            
                            
                        </div><!-- end columns -->
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">{{$hotel->pricePerDay}} <span>Par Nuit</span></h2>
                            
                            	<div class="booking-form">
                                	<h3>Réserver un hôtel</h3>
                                    <p>Réservez votre hôtel aujourd'hui</p>
                                    
                                    <form method="post" action="{{route('hotel-reservation.store')}}">
                                    	{{ csrf_field() }}
                                        
                                       
                                        
                                        
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control dpd1" name="pickupDate" placeholder="Arrival Date" required/>                                       		<i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control dpd2" name="returnDate" placeholder="Departure Date" required/>                                       		<i class="fa fa-calendar"></i>
                                        </div>
                                        
                                       
                                        
                                        <input type="text" name="price" value="{{$hotel->pricePerDay}}" hidden>
                                        <input type="text" name="hotel_id" value="{{$hotel->id}}" hidden>
                                        
                                        
                                        
                                        <button class="btn btn-block btn-orange">Confirmer la réservation</button>
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
                                
                                @include('component.help')
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->  
                        
                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-details -->
        </section><!-- end innerpage-wrapper -->
        
        
  		@include('component.newslater')



@endsection

