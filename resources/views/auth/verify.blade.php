
<!doctype html>
<html lang="en">
    <head>
        <title>Diaspower | Vérifier</title>
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
                                <h4>Vérifiez votre adresse e-mail</h4>

                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
                                            </div>
                                        @endif

                                        Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.
                                        Si vous n'avez pas reçu l'e-mail <a href="{{ route('verification.resend') }}">cliquez ici pour en demander un autre</a>.
                                    </div>
                               </div><!-- end custom-form -->
                              <div style="height: 80px"></div>
                            
                            <p class="full-page-copyright">© {{ date('Y') }} {{ config('app.name') }}. @lang('Tous les droits sont réservés.')</p>
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







                
   
