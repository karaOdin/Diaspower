
<!doctype html>
<html lang="fr">
    <head>
        <title>Diaspower | S'inscrire</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
            <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <div id="regist">
            <!--====== LOADER =====-->
            
            
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
                                    <img src="/images/logo-white.png" style="width: 200px; margin-top: -51px" >
                                    <p style="color: white;margin:25px auto">La société se développe quotidiennement et des mises à jour sont apportées régulièrement. Pensez à la Newsletter pour connaître en temps réel les nouveautés et services qui sont ajoutés ! </p>
                                </div><!-- end full-page-title -->
                                
                                <div class="custom-form custom-form-fields">
                                    <h3>S'inscrire</h3>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf       
                                        
                                        <div class="form-group">
                                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Nom') }}" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-user"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}" autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Mot de Passe') }}" autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirmez le mot de passe') }}">
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="{{ __('Téléphone') }}" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-phone"></i></span>
                                        </div>

                                                                      
                                        <div class="form-group">
                                            <city-component></city-component>
                                        </div>
                                        <div class="form-group">
                                            <label>Type de compte</label>
                                            <select class="form-control" name="role_id">
                                                <option value="2">Normal</option>
                                                <option value="3">prestataire</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                             <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" placeholder="{{ __('Adresse') }}" autofocus>

                                            @error('adress')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                             <span><i class="fa fa-map"></i></span>
                                        </div> 
                                        <button class="btn btn-orange btn-block">{{ __('CREER MON Compte') }}</button>
                                    </form>
                                    
                                    <div class="other-links">
                                        <p class="link-line">Vous avez déjà un compte ? <a href="/login">Connectez-vous ici</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <p class="full-page-copyright">© {{ date('Y') }} {{ config('app.name') }}. @lang('Tous les droits sont réservés.')</p>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end full-page-form -->
                <div class="colored-border"></div>
            </section>
        </div>
        


        <!-- Page Scripts Starts -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.colorpanel.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/custom-navigation.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- Page Scripts Ends -->

    </body>
</html>
