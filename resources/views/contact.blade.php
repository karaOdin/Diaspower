@extends('layouts.app')
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
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="contact-us-2">

                <div class="map">
                    <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                </div><!-- end map -->
        
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            
                            <div class="row">
                            	<div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">  
                                    	<span class="border-shape-top"></span>                       
 						        		<span><i class="fa fa-map-marker"></i></span>
                                        <h4>Nous trouver à</h4>
                                        <p>{{setting('general-info.admin_adress')}}.</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">   
                                    	<span class="border-shape-top"></span>                      
 						        		<span><i class="fa fa-envelope"></i></span>
                                        <h4>Écrivez-nous à</h4>
                                        <p>{{setting('general-info.admin_email')}}</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">          
                                    	<span class="border-shape-top"></span>               
 						        		<span><i class="fa fa-phone"></i></span>
                                        <h4>Appelez-nous au</h4>
                                        <p>{{setting('general-info.admin_tel')}}</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                            
                            <div id="contact-form-2" class="innerpage-section-padding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1">
                                        <div class="page-heading">
                                            <h2>Contactez-nous</h2>
                                            <hr class="heading-line" />
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 contact-form-2-text">
                                                <p><strong>Important:</strong> {{setting('contact.admin_contact_tip')}}.</p>
                                                <ul class="social-links list-inline list-unstyled">
                                                    <li><a href="{{setting('social-media.admin_facebook')}}"><span><i class="fa fa-facebook"></i></span></a></li>
                                                    <li><a href="{{setting('social-media.admin_twitter')}}"><span><i class="fa fa-twitter"></i></span></a></li>
                                                    <li><a href="{{setting('social-media.admin_google')}}"><span><i class="fa fa-google-plus"></i></span></a></li>
                                                    <li><a href="{{setting('social-media.admin_pinterest')}}"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                                    <li><a href="{{setting('social-media.admin_instagram')}}"><span><i class="fa fa-instagram"></i></span></a></li>
                                                </ul>
                                            
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6">
                                            
                                                <form  action="{{url('contact')}}" method="post"  enctype="multipart/form-data">
                                                     {{ csrf_field() }}
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                 <input type="text" class="form-control" name="name" placeholder="Name"  required/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                 <input type="email" class="form-control" name="email" placeholder="Email"  required/>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                         <input type="text" class="form-control" name="subject" placeholder="Subject"  required/>
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4" name="message" placeholder="Your Message"></textarea>
                                                    </div>
                                                    
                                                    <div class="text-center">
                                                        <button class="btn btn-orange">Send</button>
                                                    </div>
                                                </form>
                                            
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
								</div>
                            </div>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end contact-us -->
        </section><!-- end innerpage-wrapper -->

@endsection