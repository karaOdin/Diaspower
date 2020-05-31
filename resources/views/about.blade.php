@extends('layouts.app')
@section('title','About')
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
        <!--================ PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">A Propos</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">A Propos</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="about-content-2" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="page-heading">
                            <h2>Bienvenue</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                            <div id="abt-cnt-2-img">
                                <img src="/storage/{{setting('about.admin_about_image')}}" class="img-responsive" alt="about-img" />
                            </div><!-- end abt-cnt-2-img -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                            <div id="abt-cnt-2-text">
                                <h2>  <!--<img src="/storage/{{setting('site.logo')}}" style="margin-right: 15px;">--> <img src="/images/diaspower.png" style="width: 60%"> </h2>
                                <p>{{setting('site.description')}}</p>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-diamond"></i></span>
                                            <h4>Meilleurs services</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-clock-o"></i></span>
                                            <h4>24/7 Disponibilité</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-star"></i></span>
                                            <h4>5 Évaluation étoilée</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end abt-cnt-2-text -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end about-content-2 -->
            
            <!--==================== VIDEO BANNER ===================-->
            <section id="video-banner" class="banner-padding back-size"> 
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>{{setting('site.admin_video_title')}}</h2>
                            <p>{{setting('site.admin_video_description')}}</p>
                            
                            <a href="{{setting('site.admin_video')}}" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end video-banner -->
            
            <div id="why-us" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="page-heading innerpage-heading">
                                <h2>Pourquoi nous choisir</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            
                            <div class="row">
                            
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" id="why-us-tabs">
                            
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tb-happy-client" data-toggle="tab"><span><i class="fa fa-smile-o"></i></span>Clients heureux</a></li>
                                        <li><a href="#tb-satisfaction" data-toggle="tab"><span><i class="fa fa-thumbs-o-up"></i></span>la satisfaction</a></li>
                                        <li><a href="#tb-daily-tours" data-toggle="tab"><span><i class="fa fa-plane"></i></span> Tours quotidiens</a></li>
                                    </ul><!-- end nav-tabs -->
                                    
                                    <div class="tab-content">
                                        
                                        <div id="tb-happy-client" class="tab-pane fade in active">
                                            <p>Lorem ipsum dolor sit amet, ad duo ea, ut virtute per. Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>									fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.  Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper.</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper. Iuvaret detraxit disputando vel 		
                                        </div><!-- end tb-happy-client -->
                                        
                                        <div id="tb-satisfaction" class="tab-pane fade">
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                            <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>											
                                        </div><!-- end tb-satisfaction -->
                                        
                                        <div id="tb-daily-tours" class="tab-pane fade">
                                            <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                            <p>Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>											
                                        </div><!-- end b-daily-tours -->
                                        
                                    </div><!-- end tab-content -->
                                </div><!-- end columns -->
                               
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" id="progress-bars">
                                
                                    <div class="bar">
                                        <h4>Clients heureux</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span>90%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Service Clients</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width:86%"><span>86%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Hébergement</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"><span>75%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Garantie de prix</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width:83%"><span>83%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                </div><!-- end columns -->
                                
                                
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                   </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end why-us -->
            
        </section><!-- end innerpage-wrapper -->
        
        
        @include('component.newslater')
        
        
@endsection