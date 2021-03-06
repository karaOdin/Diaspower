@extends('layouts.app')
@section('title',$car->modele)
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
                        <h1 class="page-title">Voitures</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Voitures</li>
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
                                    <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Des places</p><p class="f-data">{{$car->capacity}}</p></div></li>
                                    @if($car->max)
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Durée</p><p class="f-data">{{$car->max_days}}</p></div></li>
                                    @endif
                                    @if($car->discount)
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Remise</p><p class="f-data">{{$car->discount_value}}% OFF</p></div></li>
                                    @endif
                                </ul>
                            </div>  <!-- end detail-slider -->

                            <div class="detail-tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#car-information" data-toggle="tab">INFORMATIONS SUR LA VOITURE </a></li>
                                    <li><a href="#cr-features" data-toggle="tab">fonctionnalités</a></li>
                                    <li><a href="#rental-info" data-toggle="tab">Infos sur la location </a></li>
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
                                                <h3>fonctionnalités</h3>
                                                <ul class="list-unstyled list-inline car-features">
                                                    <li><span><i class="fa fa-user"></i></span>{{$car->capacity}}</li>
                                                    <li style="display: {{$car->gps ? '' : 'none'}}"><span><i class="fa fa-map-marker" ></i></span>Gps</li>
                                                    <li><span><i class="fa fa-music"></i></span>La musique</li>
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
                                                <h3>Infos sur la location</h3>
                                                <p>{{$car->description}}</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end rental-info -->

                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                            <div class="available-blocks" id="available-cars">
                                <h2>Autres voitures pour cette agence</h2>
                                @foreach($sameAgencyCar as $agencyCar)
                                <div class="list-block main-block cr-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img cr-list-img">
                                            <a href="{{route('cars.show',$agencyCar->slug)}}">
                                                <img src="/storage/{{$agencyCar->image}}" class="img-responsive" alt="car-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">@if($car->discount) @discount($car->pricePerDay, $car->discount_value) @else @convert($car->pricePerDay)
                                                        @endif<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
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
                                            <a href="{{route('cars.show',$agencyCar->slug)}}" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end crs-list-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end cr-list-block -->
                                @endforeach
                               
                                
                            </div><!-- end available-cars -->
                            
                            
                            
                        </div><!-- end columns -->
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                                <h2 class="selected-price">DZD @discount($car->pricePerDay, $car->discount_value) <span>{{$car->make->make}}</span></h2>
                            
                                <div class="booking-form">
                                    <h3>Réservez une voiture</h3>
                                    <p>réservez votre voiture aujourd'hui</p>
                                    
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
                                            <input type="date" class="form-control " name="pickupDate" placeholder="Pick-Up Date" required/>                                            <i class="fa fa-calendar"></i>
                                            @error('pickupDate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="date" class="form-control " name="returnDate" placeholder="Drop-Off Date" required/>                                               <i class="fa fa-calendar"></i>

                                            @error('returnDate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                        </div>

                                      
                                       
                                        
                                        
                                        
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
            </div><!-- end car-detail -->
        </section><!-- end innerpage-wrapper -->
        
        
        @include('component.newslater')
        

        
@endsection