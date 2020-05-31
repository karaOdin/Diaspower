
<!doctype html>
<html lang="en">
    <head>
        <title>404 introuvable</title>
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
        <link rel="stylesheet" href="/css/egg-blue.css">
        <link rel="stylesheet" href="/css/responsive.css">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="/css/jquery.colorpanel.css">
        <style type="text/css">
            .error-page-2-circle h2{
                background-color: #00cccc;
            }
        </style>
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
        
        
        <!--========== COLOR-PANEL ==========-->
        <div id="colorPanel" class="colorPanel">
            <a id="cpToggle" href="#"></a>
            <ul></ul>
        </div><!-- end colorPanel -->
    
        
        <!--======================== ERROR-PAGE-2 =====================-->
        <section id="error-page-2"  class="full-page-body full-page-back">
            <div class="full-page-wrapper">
                <div class="full-page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="full-page-title visible-xs visible-sm">
                                    <h3 class="company-name"><img src="/storage/{{setting('site.logo')}}"><span>Dias</span>Power</h3>
                                </div><!-- end full-page-title -->
                                        
                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 error-page-2-circle text-center">
                                        <h2>404</h2>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 error-page-2-text">
                                        <div class="full-page-title visible-md visible-lg">
                                            <h3 class="company-name text-left"><img src="/storage/{{setting('site.logo')}}" style="margin-right: 15px"><span>Dias</span>Power</h3>
                                        </div><!-- end full-page-title -->
                                        
                                        <h2>Quelque chose a mal tourné! !</h2>
                                        <p> Nous sommes désolés mais il semble que la page que vous recherchez est introuvable. Nous y travaillons et nous le réparerons dès que possible.</p>
                                        <p>Vous pouvez revenir à la page principale en cliquant sur le bouton.</p>
                                        <a href="{{ url()->previous() }}" class="btn btn-orange">Retourner</a>
                                    </div>
                                </div>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
            	</div><!-- end full-page-content -->
            </div><!-- end full-page-wrapper -->
		</section><!-- end error-page-2 -->


        <!-- Page Scripts Starts -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.colorpanel.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
