@extends('layouts.app')
@section('title','ASSISTANCE ADMINISTRATIVE & JURIDIQUE')
@section('content')

	
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
                    	<h1 class="page-title">ASSISTANCE ADMINISTRATIVE & JURIDIQUE</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active"> ASSISTANCE ADMINISTRATIVE & JURIDIQUE</li>
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
                                    <div><img src="/storage/{{setting('juridicial.admin_image')}}" class="img-responsive" alt="feature-img"/></div>
                                    
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
                                    <h3>Formulaire de demande</h3>
                                    <p>Trouvez la solution à votre problème</p>
                                    
                                    <form action="{{route('juridicial.store')}}" method="post">
                                    	{{ csrf_field() }}
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre" name="title" required/>                                       
                                        </div>
                                        <div class="form-group">
                                            <select name="assistance" class="form-control">
                                                <option value="notary">Noataire</option>
                                                <option value="lawyer">Avocat</option>
                                                <option value="juridicial">Agent juridique</option>
                                            </select>                                            
                                       </div>
 
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" placeholder="Description"></textarea>                                       
                                        </div>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="file" required/>                                       
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile" name="phone" required/>                                       
                                                                                    
                                        <div class="form-group">
                                        	<select name="city_id" class="form-control">
                                        		<?php $cities = \App\City::all(); ?>
                                        		<option > -- Choisissez votre ville -- </option>
                                        		@foreach($cities as $city)
                                        			<option value="{{$city->id}}">{{$city->city}}</option>
                                        		@endforeach
                                        	</select>
                                        </div>
                                        <city-component></city-component>
                                 
                                        <button class="btn btn-block btn-orange">Demander   </button>
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