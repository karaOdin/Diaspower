@extends('layouts.app')
@section('title','Profile')
@section('content')
	<style type="text/css">
		.invalid-feedback
		{
			color: red
		}
	</style>
	<!--========== PAGE-COVER =========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Mon compte</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Mon compte</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
    	</section><!-- end page-cover -->
        
        
   <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="dashboard-heading">
                                <h2>Dias <span>Power</span></h2>
                                <p><strong style="text-transform: uppercase;">{{Auth::user()->name}}</strong>, Bienvenue chez Diaspower!</p>
                                <p>Tous vos voyages réservés avec nous apparaîtront ici et vous pourrez tout gérer!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		
                                        	<li class="active"><a href="{{route('profile.show')}}"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li><a href="{{route('reservation.index')}}"><span><i class="fa fa-briefcase"></i></span>Mes réservations</a></li>
                                            
                                           
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                		<h2 class="dash-content-title">Mon compte</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Détails du profil</h4></div>
                                            <div class="panel-body">
                                            	<div class="row">
                                                	<div class="col-sm-5 col-md-4 user-img">
                                                        <img src="/storage/{{Auth::user()->avatar}}" class="img-responsive" alt="user-img" />
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-7 col-md-8  user-detail">
                                                        <ul class="list-unstyled">
                                                            <li><span>Nom:</span> {{Auth::user()->name}}</li>
                                                            <li><span>Email:</span> {{Auth::user()->email}}</li>
                                                            <li><span>Phone:</span> {{Auth::user()->phone}}</li>
                                                            <li><span>Adresse:</span> {{Auth::user()->adress}}</li>
                                                            <li><span>Ville:</span> {{Auth::user()->city}}</li>
                                                        </ul>
                                                        <button class="btn" data-toggle="modal" data-target="#edit-profile">Editer le profil</button>
                                                   	</div><!-- end columns -->
                                                    
                                                    
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Abonnez-vous à notre newsletter</h2>
                        <p>Abonnez-vous pour recevoir nos mises à jour intéressantes</p>	
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
        
            <div id="edit-profile" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Editer le profil</h3>
                    </div><!-- end modal-header -->
                    
                    <div class="modal-body">
                        <form action="{{route('profile.edit',Auth::user())}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        	
                            <div class="form-group">
                        		<label>Votre nom</label>
                            	<input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" value="{{Auth::user()->name}}" placeholder="Votre nom" />

                            		@error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                 	@enderror
                            </div><!-- end form-group -->  
                                                  
                            <div class="form-group">
                        		<label>Votre email</label>
                            	<input type="email" class="form-control  @error('email') is-invalid @enderror"  name="email" value="{{Auth::user()->email}}"  placeholder="Votre email" />

                            			@error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div><!-- end form-group -->
                          
                            <div class="form-group">
                        		<label>Votres Phone</label>
                            	<input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{Auth::user()->phone}}"  placeholder="Phone Number" />

                            			@error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div><!-- end form-group -->
							
                            <div class="form-group">
                        		<label>Votre ville</label>
                                <?php $cities = \App\City::all(); ?>
                                <select class="form-control" name="city_id">
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->city}}</option>
                                    @endforeach
                                </select>
                            	
                            			@error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                        		<label>Votre adresse</label>
                            	<input type="text" class="form-control  @error('adress') is-invalid @enderror" name="adress" value="{{Auth::user()->adress}}"  placeholder="Address" />

                            			@error('adress')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div><!-- end form-group -->
                            
                            <button type="submit" class="btn btn-orange">Sauvegarder</button>
                        </form>
                    </div><!-- end modal-bpdy -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end edit-profile -->
        
@endsection