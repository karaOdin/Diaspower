@extends('layouts.app')

@section('content')
  <!--========= PAGE-COVER ==========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">My Account</li>
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
                                <h2>Travel <span>Profile</span></h2>
                                <p>Hi Lisa, Welcome to Star Travels!</p>
                                <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="dashboard.html"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        	<li><a href="user-profile.html"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li  class="active"><a href="#"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                            <li><a href="wishlist.html"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                            <li><a href="cards.html"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Trips You have Booked!</h2>
                                        <div class="dashboard-listing booking-listing">
                                        	<div class="dash-listing-heading">
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio01" name="radio" checked/>
                                                    <label for="radio01"><span></span>All Types</label>
                                                </div><!-- end custom-radio -->
                                                    
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio02" name="radio" />
                                                    <label for="radio02"><span></span>Hotels</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio03" name="radio" />
                                                    <label for="radio03"><span></span>Flights</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio04" name="radio" />
                                                    <label for="radio04"><span></span>Cars</label>
                                                </div><!-- end custom-radio -->
                                            </div>
                                            
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
                                                                	<li><span>Reservation Date:</span> {{ $reservation->pickupDate }}</li>
                                                                    <li><span>Return Date:</span> {{ $reservation->returnDate }}</li>
                                                                    <li><span>Duration:</span> {{$days}} days<span class="line">|</span>
                                                                    	<span>Price:</span> {{$reservation->price}}<span class="line">|</span><span>Agency:</span> {{$reservation->agency->name}}</li>
                                                                </ul>
                                                            </td>
                                                            <td class="dash-list-btn">
                                                            	<form method="post" action="{{route('reservation.destroy',$reservation->id)}}"  >
                                                            		{{csrf_field()}}
                    												{{method_field('DELETE')}}
                                                            		<button type="submit" class="btn btn-orange">Cancel</button>
                                                            	</form>
                                                            	@if($reservation->isPending == 0)
                                                            		
                                                            		<button style="background-color: red; color: #fff" class="btn">Pending</button></td>
                                                            	@else

                                                            		<button class="btn btn-success">Approve</button></td>

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