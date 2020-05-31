
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Diaspower | Se connecter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->   
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets --> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="css/jquery.colorpanel.css">
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
                                <img src="/images/logo-white.png" style="width: 200px; margin-top: -50px" >
                                <p style="color: white;margin:25px auto">La société se développe quotidiennement et des mises à jour sont apportées régulièrement. Pensez à la Newsletter pour connaître en temps réel les nouveautés et services qui sont ajoutés ! </p>
                            </div><!-- end full-page-title -->
                            
                            
                            <div class="custom-form custom-form-fields">
                                <h3>S'IDENTIFIER</h3>
                                @if(Session::has('warning'))
                                <div class="alert alert-danger">
                                  {{ Session::get('warning')}}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    
                                    <div class="form-group">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Mot de Passe') }}" />
                                             <span><i class="fa fa-lock"></i></span>

                                             @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Se souvenir de moi
                                        </label>
                                    
                                    <button class="btn btn-orange btn-block">{{ __('Se Connecter') }}</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">Nouveau ici ? <a href="/register">S'inscrire</a></p>
                                         @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{__('auth.forgot')}}
                                            </a>
                                        @endif
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                            <p class="full-page-copyright">© {{ date('Y') }} {{ config('app.name') }}. @lang('Tous les droits sont réservés.')</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
            <div class="colored-border"></div>
        </section>
        

        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.colorpanel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
