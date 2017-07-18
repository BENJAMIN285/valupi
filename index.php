<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flexor Bootstrap Theme</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    
    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="css/colour-blue.css" rel="stylesheet">
  </head>
  
  <body class="page-index has-hero">
    <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
      
      <!-- ======== @Region: #navigation ======== -->
      <div id="navigation" class="wrapper">
        <!--Header & navbar-branding region-->
        <div class="header">
          <div class="header-inner container-fluid">
            <div class="row">
              <div class="col-md-8">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand" href="index.html" title="Home">
                  <h1 class="hidden">
                    <img src="img/logo.png" alt="Flexor Logo">
                    Flexor
                  </h1>
                </a>
                <div class="navbar-slogan">
                  Responsive HTML Theme
                  <br>
                  By BootstrapMade.com
                </div>
              </div>
              <!--header rightside-->
              <div class="col-md-4">
                <!--user menu-->
                <ul class="list-inline user-menu pull-right">
                    <li><button type="button" id="btnRegistrar" class="btn btn-more btn-xs text-uppercase"><i class="fa fa-edit text-primary"></i> Registrar</button></li>
                    <li><button type="button" id="btnAcceder" class="btn btn-more btn-xs text-uppercase"><i class="fa fa-sign-in text-primary"></i> Ingresar</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="navbar navbar-default">
            <!--mobile collapse menu button-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!--social media icons-->
            <div class="navbar-text social-media social-media-inline pull-right">
              <!--@todo: replace with company social media details-->
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="main-menu">
                <li class="icon-link">
                  <a href="index.html"><i class="fa fa-home"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Flexor Version Pages</li>
                    <li><a href="elements.html" tabindex="-1" class="menu-item">Elements</a></li>
                    <li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>
                    <li><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>
                    <li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>
                    <li class="dropdown-footer">Dropdown footer</li>
                  </ul>
                </li>
                <li><a href="#">Menu Link</a></li>
                <li class="dropdown dropdown-mm">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                    <li class="row">
                      <ul class="col-md-6">
                        <li class="dropdown-header">Websites and Apps</li>
                        <li><a href="#">Analysis and Planning</a></li>
                        <li><a href="#">User Experience / Information Architecture</a></li>
                        <li><a href="#">User Interface Design / UI Design</a></li>
                        <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                      </ul>
                      <ul class="col-md-6">
                        <li class="dropdown-header">Enterprise solutions</li>
                        <li><a href="#">Business Analysis</a></li>
                        <li><a href="#">Custom UX Consulting</a></li>
                        <li><a href="#">Quality Assurance</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-footer">
                      <div class="row">
                        <div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>
                        <div class="col-md-5">
                          <a href="https://bootstrapmade.com" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--/.navbar-collapse -->
          </div>
        </div>
      </div>
      <div class="hero" id="highlighted">
        <div class="inner">
          <!--Slideshow-->
          <div id="highlighted-slider" class="container-fluid">
            <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
              <!--Slideshow content-->
              <!--Slide 1-->
              <div class="item">
                <div class="row">
                  <div class="col-md-6 col-md-push-6 item-caption">
                    <h2 class="h1 text-weight-light">
                      Welcome to <span class="text-primary">Flexor</span>
                    </h2>
                    <h4>
                      Super flexible responsive theme with a modest design touch.
                    </h4>
                    <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                    <a href="https://bootstrapmade.com" class="btn btn-more btn-lg i-right">Buy Now <i class="fa fa-plus"></i></a>
                  </div>
                  <div class="col-md-6 col-md-pull-6 hidden-xs">
                    <img src="img/slides/slide1.png" alt="Slide 1" class="center-block img-responsive">
                  </div>
                </div>
              </div>
              <!--Slide 2-->
              <div class="item">
                <div class="row">
                  <div class="col-md-6 text-right-md item-caption">
                    <h2 class="h1 text-weight-light">
                      <span class="text-primary">Flexor</span> Bootstrap Theme
                    </h2>
                    <h4>
                      High quality, responsive theme!
                    </h4>
                    <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                    <a href="https://bootstrapmade.com" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="img/slides/slide2.png" alt="Slide 2" class="center-block img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <!-- Mission Statement -->
      <div class="text-center block block-pd-sm block-bg-noise block-border-bottom">
        <div class="container-fluid"></div>
      </div>
      <!--Showcase-->
      <div class="block block-border-bottom-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="block-title">Búsqueda</h2>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h3 class="panel-title">
                                    <a class="panel-heading-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Filtro #1
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h3 class="panel-title">
                                    <a class="panel-heading-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                        Filtro #2
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h3 class="panel-title">
                                    <a class="panel-heading-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                        Filtro #3
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Services -->
      <div class="text-center block block-pd-sm block-bg-noise block-border-top block-border-bottom">
        <div class="container-fluid"></div>
      </div>
      <!-- Pricing -->
      <div class="block-contained">
        <h2 class="block-title">
          Nuestros Planes
        </h2>
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default panel-pricing text-center">
              <div class="panel-heading">
                <h4 class="panel-title">
                  Flex<em>Starter</em>
                </h4>
              </div>
              <div class="panel-pricing-price">$ <span class="digits">19.95</span> /mo.</div>
              <div class="panel-body">
                <ul class="list-dotted">
                  <li>3 User Accounts</li>
                  <li>3 Private Projects</li>
                  <li>Umlimited Projects</li>
                  <li>5GB of space</li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-default panel-pricing panel-pricing-highlighted text-center">
              <div class="panel-heading">
                <h4 class="panel-title">
                  Team<em>Starter</em>
                </h4>
              </div>
              <div class="panel-pricing-price">$ <span class="digits">49.95</span> /mo.</div>
              <div class="panel-body">
                <ul class="list-dotted">
                  <li>50 User Accounts</li>
                  <li>50 Private Projects</li>
                  <li>Umlimited Projects</li>
                  <li>Unlimited space</li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="panel panel-default panel-pricing panel-pricing-highlighted text-center">
              <div class="panel-heading">
                <h4 class="panel-title">
                  Enterprise 
                  <span class="panel-pricing-popular"><i class="fa fa-thumbs-up"></i> Popular</span>
                </h4>
              </div>
              <div class="panel-pricing-price">$ <span class="digits">199.95</span> /mo.</div>
              <div class="panel-body">
                <ul class="list-dotted">
                  <li>100 User Accounts</li>
                  <li>100 Private Projects</li>
                  <li>Umlimited Projects</li>
                  <li>Unlimited space</li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="panel panel-default panel-pricing text-center">
              <div class="panel-heading">
                <h4 class="panel-title">
                  Corporate
                </h4>
              </div>
              <div class="panel-pricing-price">$ <span class="digits">299.95</span> /mo.</div>
              <div class="panel-body">
                <ul class="list-dotted">
                  <li>1000 User Accounts</li>
                  <li>1000 Private Projects</li>
                  <li>Umlimited Projects</li>
                  <li>Unlimited space</li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Customer testimonial & Latest Blog posts-->
      <div class="testimonials block block-bg-noise block-border-top">
        <div class="container-fluid">
          <!--Customer testimonial-->
          <div class="col-md-6 m-b-lg">
            <h3 class="block-title">
              Testimonials
            </h3>
            <blockquote>
              <p>Our productivity &amp; sales are up! Customers are happy &amp; we couldn't be happier with this product!</p>
              <img src="img/misc/charles-quote.png" alt="Charles Spencer Chaplin">
              <small>
                <strong>Charles Chaplin</strong>
                <br>
                British comic actor
              </small>
            </blockquote>
          </div>
          <!--Latest Blog posts-->
          <div class="col-md-6 blog-roll">
            <h3 class="block-title">
              Latest From Our Blog
            </h3>
            <!-- Blog post 1-->
            <div class="media">
              <div class="media-left hidden-xs">
                <!-- Date desktop -->
                <div class="date-wrapper"> <span class="date-m">Feb</span> <span class="date-d">01</span> </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#" class="text-weight-strong">amet urna integer urna enim, sit arcu pid in nec?</a>
                </h4>
                <!-- Meta details mobile -->
                <ul class="list-inline meta text-muted visible-xs">
                  <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span> Fri 1st Feb 2013</li>
                  <li><i class="fa fa-user"></i> <a href="#">Joe</a></li>
                </ul>
                <p>
                  Ut <strong>commodo ullamcorper risus nec</strong> mattis. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu. 
                  <a href="#">Read more <i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
            <!-- Blog post 2 -->
            <div class="media">
              <div class="media-left hidden-xs">
                <!-- Date desktop -->
                <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">17</span> </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#" class="text-weight-strong">a nec in sed hac ultrices cursus</a>
                </h4>
                <!-- Meta details mobile -->
                <ul class="list-inline meta text-muted visible-xs">
                  <li><i class="fa fa-calendar"></i> <span class="visible-md">Created:</span> Thu 17th Jan 2013</li>
                  <li><i class="fa fa-user"></i> <a href="#">Joe</a></li>
                </ul>
                <p>
                  Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Aenean at massa leo. Vestibulum in varius arcu. 
                  <a href="#">Read more <i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /content -->
    <!-- Call out block -->
    <div class="block block-pd-sm block-bg-primary">
      <div class="container-fluid"></div>
    </div>
    
    <!-- ======== @Region: #footer ======== -->
    <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
      <div class="container-fluid">
        
        <div class="row" id="contact">
          
          <div class="col-md-3">
            <address>
              <strong>Flexor Bootstrap Theme Inc</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Sunshine House, Sunville. SUN12
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 019223 8092344
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@flexorinc.com
              <br>
            </address>
          </div>
          
          <div class="col-md-6">
            <h4 class="text-uppercase">Contactanos</h4>
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombres y Apellidos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>
          
          <div class="col-md-3">
            <h4 class="text-uppercase">Siguenos</h4>
            <!--social media icons-->
            <div class="social-media social-media-stacked">
              <!--@todo: replace with company social media details-->
              <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
              <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
              <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
              <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
            </div>
          </div>
          
        </div>
        
        <div class="row subfooter">
          <!--@todo: replace with company copyright details-->
          <div class="col-md-7">
            <p>Copyright © <?php echo date("Y"); ?></p>
            <div class="credits">
              <a href="#">Valupi.com</a> por BGMB
            </div>
          </div>
          <div class="col-md-5">
            <ul class="list-inline pull-right">
              <li><a href="#">Términos</a></li>
              <li><a href="#">Privacidad</a></li>
              <li><a href="#">Contactanos</a></li>
            </ul>
          </div>
        </div>
        
        <a href="#top" class="scrolltop">Top</a> 
        
      </div>
    </footer>
    
    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    <script src="js/bootbox.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $('#btnRegistrar').click(function(){
                $.get('registrar.php',function(data){
                    bootbox.dialog({
                        message: data,
                        closeButton: false,
                        onEscape: true
                    });
                });
            });
            
            $('#btnAcceder').click(function(){
                $.get('acceder.php',function(data){
                    bootbox.dialog({
                        message: data,
                        closeButton: false,
                        onEscape: true
                    });
                });
            });
            
        });
        
    </script>
  </body>
</html>