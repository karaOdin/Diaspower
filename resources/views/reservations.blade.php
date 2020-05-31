@extends('layouts.app')
@section('title','Reservation')
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
                    toastr.error("{{Session::get('message')}}");
                }
            
          </script>
        @endif
  <!--========= PAGE-COVER ==========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Mes réservations</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Mes réservations</li>
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
                                <p>salut <strong style="text-transform: uppercase;">{{Auth::user()->name}}</strong>, Bienvenue chez Diaspower!</p>
                                <p>Tous vos voyages réservés avec nous apparaîtront ici et vous pourrez tout gérer!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="{{route('profile.show')}}"><span><i class="fa fa-user"></i></span>Profil</a></li>
                                            <li class="active"><a href="{{route('reservation.index')}}"><span><i class="fa fa-briefcase"></i></span>Mes réservations</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Vous avez réservé!</h2>
                                        <div class="dashboard-listing booking-listing">
                                        	                                            
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    	@foreach($reservations as $reservation)
                                                        <tr>

                                                        	@php
                                                        		$pickup = $reservation->pickupDate;
														        $return = $reservation->returnDate;
														        $datetime1 = new DateTime($pickup);
														        $datetime2 = new DateTime($return);
														        $interval = $datetime1->diff($datetime2);
														        $days = $interval->format('%a');
                                                        	@endphp
                                                            <td class="dash-list-icon booking-list-date">
                                                            	<img src="/storage/{{$reservation->car->image}}" style="width: 170px; height: auto">
                                                            </td>
                                                            <td class="dash-list-text booking-list-detail">
                                                            	<h3>{{$reservation->car->modele}}</h3>
                                                                <ul class="list-unstyled booking-info">
                                                                	<li><span>Date de réservation:</span> {{ $reservation->pickupDate }}</li>
                                                                    <li><span>Date de retour:</span> {{ $reservation->returnDate }}</li>
                                                                    <li><span>Durée:</span> {{$days}} days<span class="line">|</span>
                                                                    	<span>Prix:</span> {{$reservation->price}}<span class="line">|</span><span>Agency:</span> {{$reservation->agency->name}}</li>
                                                                </ul>
                                                            </td>
                                                            <td class="dash-list-btn">
                                                            	<form method="post" action="{{route('reservation.destroy',$reservation->id)}}"  >
                                                            		{{csrf_field()}}
                    												{{method_field('DELETE')}}
                                                            		<button type="submit" class="btn btn-orange">Annuler</button>
                                                            	</form>
                                                            	@if($reservation->isPending == 0)
                                                            		
                                                            		<button style="background-color: red; color: #fff" class="btn">Pending</button></td>
                                                            	@else

                                                            		<button class="btn btn-success">Approuver</button></td>

                                                            	@endif
                                                        </tr>
                                                       @endforeach 
                                                       
                                                    </tbody>
                                                </table>
                                            </div><!-- end table-responsive -->
                                        </div><!-- end booking-listings -->
                                        
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

        
        @include('component.newslater')
        
@endsection