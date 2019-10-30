
<!doctype html>
<html lang="en">
    <head>
        <title>Diaspower | Verify</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->   
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->   
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
            
        <!-- Custom Stylesheets --> 
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="/css/orange.css">
        <link rel="stylesheet" href="/css/responsive.css">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="/css/jquery.colorpanel.css">
    </head>

    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
        
        
        <!--========== COLOR-PANEL ==========-->
        <div id="colorPanel" class="colorPanel">
            <a id="cpToggle" href="#"></a>
            <ul></ul>
        </div><!-- end colorPanel -->
    
        
        <!--===== FULL-PAGE-FORM ====-->
        <section>
            <div class="colored-border"></div>
            <div id="full-page-form">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="full-page-title">
                                <h3 class="company-name"><span><i class="fa fa-plane"></i>Dias</span>Power</h3>
                                
                            </div><!-- end full-page-title -->
                            
                            <div class="custom-form custom-form-fields">
                                <h4>{{ __('Verify Your Email Address') }}</h4>

                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif

                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                    </div>
                               </div><!-- end custom-form -->
                               <div class="full-page-title">
                                   <p style="color: #fff">Lorem ipsum dolor sit amet, conse adipiscing elit. Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere ultricies. </p>
                               </div>
                            
                            <p class="full-page-copyright">© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
            <div class="colored-border"></div>
        </section>
        

        <!-- Page Scripts Starts -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.colorpanel.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>







                
   
