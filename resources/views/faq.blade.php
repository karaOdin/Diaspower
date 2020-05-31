@extends('layouts.app')
@section('title','FAQ')
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

         <!--============ PAGE-COVER ============-->
        <section class="page-cover" id="cover-faq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">FAQ</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">FAQ</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="faq-page" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12 col-md-4 side-bar left-side-bar">
                        	<div class="side-bar-block booking-form-block text-center">
                            
                            	<div class="booking-form">
                                	<h3>LAISSEZ-NOUS VOUS AIDER</h3>
                                    <p>Vous ne trouvez pas votre réponse. Demandez nous.</p>
                                    
                                    <form  action="{{url('contact')}}" method="post"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    	
                                        <div class="form-group">
                                    		<input type="text" class="form-control" name="name" placeholder="Nom" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="email" class="form-control" name="email" placeholder="Email" required/></div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Tel" required/></div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" name="subject" placeholder="Sujet" required/></div>
                                        
                                        <div class="form-group">
                                    		<textarea class="form-control" rows="5" name="message" placeholder="Votre Question"></textarea>                                       
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange">Envoyer le message</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                        
                        <div class="col-sm-12 col-md-8 content-side">
                            @foreach($faqs as $faq)
                            <div class="faq-block">
                                <h3 class="faq-heading">{{$faq->category}}</h3>
                                @foreach($faq->faqs as $faqChild)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse{{$faqChild->id}}" data-parent="#accordion"><h4 class="panel-title"></h4>{{$faqChild->question}}</a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse{{$faqChild->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>{{$faqChild->response}}</p>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                               
                                
                                
                                @endforeach
                            </div><!-- end faq-block -->
                            @endforeach
                            
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end faq-page -->
        </section><!-- end innerpage-wrapper -->
        
        
       @include('component.newslater')
        
@endsection