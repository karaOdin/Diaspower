
<!doctype html>
<html lang="en">
    <head>
        <title>Forgot Password 2</title>
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
                                <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere ultricies. </p>
                            </div><!-- end full-page-title -->
                            
                            <div id="forgot-password">
                                <div class="custom-form custom-form-fields">
                                    <h3>Forgot Password</h3>
                                    <div class="card-body">

                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        
                                        <button class="btn btn-orange btn-block">{{ __('Send Password Reset Link') }}</button>
                                    </form>
                                        
                                    <div class="other-links">
                                        <p class="link-line">Already Have An Account ? <a href="/login">Login Here</a></p>
                                        <p class="link-line">New Here ? <a href="/register">Join Us</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                            </div><!-- end forgot-password -->
                            
                            <p class="full-page-copyright">© 2017 StarTravel. All rights reserved.</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
           </div>
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
