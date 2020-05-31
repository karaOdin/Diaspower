@extends('layouts.app')
@section('title','Suivi de Projets')
@section('content')
        <link rel="stylesheet" href="/css/magnific-popup.css">

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
  <!--========= PAGE-COVER ==========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Suivi de projets</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active"> Suivi de projets</li>
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
                                    <div><img src="/storage/{{setting('project.admin_image')}}" class="img-responsive" alt="feature-img"/></div>
                                    
                                </div><!-- end feature-slider -->
                               
                            </div>  <!-- end detail-slider -->
                            <div class="content-jurid">
                            	<h2>{{setting('project.admin_title')}}</h2>
                            	{!! setting('project.admin_description') !!}
                            </div>
                            
                            
                            
                            
                            
                        </div><!-- end columns -->
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                                <h2 class="selected-price"> <span></span></h2>
                            
                                <div class="booking-form">
                                    <h3>Demande de projets</h3>
                                    <p>Find solution for your isue</p>
                                    
                                    <form action="{{route('projects.store')}}" method="post">
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
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange">Demander</button>
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
        
          <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="gallery-page" class="innerpage-section-padding" style="padding-top: 0"> 
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="page-heading">
                                <h2>Galerie de projets</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                
                            <div class="row">
                                <div id="gallery">
                        			@foreach($projects as $project)
                                    <div class="gallery-product col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="gallery-block">
                                            <div class="gallery-img ">
                                                <img src="/storage/{{$project->image_after}}" class="img-responsive" alt="gallery-img" >
                                                <div class="gallery-mask">
                                                    <div class="gallery-title">
                                                            <h2>{{$project->name}}</h2>
                                                            <p>2 Pictures</p>
                                                        </div>  <!-- end gallery-title --> 
                                                    <a href="/storage/{{$project->image_after}}" title="{{$project->name}}" class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                                </div><!-- end gallery-mask -->
                                            </div><!-- end gallery-img -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                                    @endforeach
                                    
                                    
                                </div><!-- end gallery -->  
                            </div><!-- end row -->
                          
                    	</div><!-- end columns -->
                	</div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end gallery-page -->
        </section><!-- end innerpage-wrapper -->
        
        

        @include('component.newslater')


        <script src="/js/jquery.magnific-popup.min.js"></script>
       
        <script src="/js/custom-gallery.js"></script>

@endsection