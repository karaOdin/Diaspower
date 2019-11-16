@extends('layouts.app')
@section('content')
    <style type="text/css">
        .side-bar .support-contact p
        {
            font-size: 20px;
        }
    </style>
	 <!--================= PAGE-COVER =================-->
        <section class="page-cover" id="cover-car-grid-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Car Grid Left Sidebar</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Car Grid Left Sidebar</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
  <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="car-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                                        
                            <div class="side-bar-block filter-block">
                                <h3>Sort By Filter</h3>
                                <p>Find your dream flights today</p>
                                
                                <div class="panels-group">
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">					
                                            <a href="#panel-1" data-toggle="collapse" >Select Category <span><i class="fa fa-angle-down"></i></span></a>
                                        </div><!-- end panel-heading -->
                                        
                                        <div id="panel-1" class="panel-collapse collapse">
                                            <div class="panel-body text-left">
                                                <ul class="list-unstyled">
                                                    <li class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>All</label></li>
                                                    
                                                    @foreach($types as $type)
                                                    <li class="custom-check"><input type="checkbox" id="check0{{$type->id + 1}}" value="{{$type->id}}" name="checkbox"/>
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>{{$type->type}} ({{$type->cars->count()}})</label></li>	
                                                    @endforeach
                                                </ul>
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">					
                                            <a href="#panel-2" data-toggle="collapse" >Facility <span><i class="fa fa-angle-down"></i></span></a>
                                        </div><!-- end panel-heading -->
                                        
                                        <div id="panel-2" class="panel-collapse collapse">
                                            <div class="panel-body text-left">
                                                <ul class="list-unstyled">
                                                    <li class="custom-check"><input type="checkbox" id="check09" name="checkbox"/>
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Air Conditioning</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check10" name="checkbox"/>
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Doors</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check11" name="checkbox"/>
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Pessanger Quantity</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check12" name="checkbox"/>
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>Navigation</label></li>
                                                </ul>
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">					
                                            <a href="#panel-3" data-toggle="collapse" >Rating <span><i class="fa fa-angle-down"></i></span></a>
                                        </div><!-- end panel-heading -->
                                        
                                        <div id="panel-3" class="panel-collapse collapse">
                                            <div class="panel-body text-left">
                                                <ul class="list-unstyled">
                                                    <li class="custom-check"><input type="checkbox" id="check13" name="checkbox"/>
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                                </ul>
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
                                    
                                </div><!-- end panel-group -->
                                
                                <div class="price-slider">
                                    <p><input type="text" id="amount" readonly></p>
                                    <div id="slider-range"></div>
                                </div><!-- end price-slider -->
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
                                            <p>{{setting('general-info.admin_tel')}}</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns --> 
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            <div class="row">
                                @foreach($cars as $car)
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block cr-grid-block">
                                    	<div class="main-img cr-grid-img">
                                        	<a href="car-detail-left-sidebar.html">
                                    			<img src="/storage/{{$car->image}}" class="img-responsive" alt="hotel-img" />
                                                @if($car->discount)
                                                <div class="offer-tag">
                                                    <span>{{$car->discount_value}}% Off</span>
                                                </div><!-- end offer-tag -->
                                                @endif
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">DZD @if($car->discount) @discount($car->pricePerDay, $car->discount_value) @else @convert($car->pricePerDay) @endif
                                                        <span class="divider">|</span><span class="pkg">{{$car->agency->name}}</span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                    	</div><!-- end cr-grid-img -->
                                        
                                         <div class="block-info cr-grid-info">
                                         	
                                         	<h3 class="block-title"><a href="{{route('cars.show',$car->slug)}}">{{$car->type->type}}</a></h3>
                                            <p class="block-minor">{{$car->modele}}</p>
                                            <ul class="list-unstyled list-inline car-features">
                                            	<li><span><i class="fa fa-user"></i></span>{{$car->capacity}}</li>
                                                <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                                <li><span><i class="fa fa-music"></i></span>Music</li>
                                                <li><span><i class="fa fa-tint"></i></span>{{$car->fuel->fuel}}</li>
                                            </ul>
                                            <div class="grid-btn">
                                            	<a href="{{route('cars.show',$car->slug)}}" class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                         </div><!-- end cr-grid-info -->
                                    </div><!-- end cr-grid-block -->
                                </div><!-- end columns -->
                                @endforeach
                                
                                
                            </div><!-- end row -->
                            
                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->

                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end car-grid -->
        </section><!-- end innerpage-wrapper -->
        
        
        @include('component.newslater')


        <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
        <script type="text/javascript">
            $(document).ready(function() { 
            
                $('check01').click(function () {
                    alert('hardddd');
                });
            });
            
        </script>
@endsection