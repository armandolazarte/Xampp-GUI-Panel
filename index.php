<?php


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Xampp Domain Adder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
    <!-- Plugin: animate.css (animated effects) - http://daneden.github.io/animate.css/ -->
    <link href="plugins/animate/animate.css" rel="stylesheet">
    <!-- @LINEBREAK -- <!-- Plugin: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    
    <!-- Theme style -->
    <link href="css/theme-style.min.css" rel="stylesheet">
    
    <!--Your custom colour override-->
    <link href="#" id="colour-scheme" rel="stylesheet">
    
    <!-- Your custom override -->
    <link href="css/custom-style.css" rel="stylesheet">
    
    <!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
    <!--[if lt IE 9]>
    <script src="plugins/html5shiv/dist/html5shiv.js"></script>
    <script src="plugins/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    
    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="plugins/retina/js/retina-1.1.0.min.js"></script>
  </head>
  
  <!-- ======== @Region: body ======== -->
  <body class="page page-header-old-full header-old">
    <a href="#content" class="sr-only">Skip to content</a> 
    
    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <div class="navbar-static-top navbar-full-width">
        
        <!--Hidden Header Region-->
        <div class="header-hidden">
          <div class="header-hidden-inner container">
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <h3>
                  About Us
                </h3>
                <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                <a href="about.htm" class="btn btn-sm btn-primary">Find out more</a> 
              </div>
              <div class="col-sm-4 col-md-4">
                <!--@todo: replace with company contact details-->
                <h3>
                  Contact Us
                </h3>
                <address>
                  <p>
                    <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                    019223 8092344
                  </p>
                  <p>
                    <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                    info@themelize.me
                  </p>
                  <p>
                    <abbr title="Address"><i class="fa fa-home"></i></abbr>
                    Sunshine House, Sunville. SUN12 8LU.
                  </p>
                </address>
              </div>
              <div class="col-sm-4 col-md-4">
                <!--Colour Switch for demo - @todo: remove in production-->
                <div class="colour-switcher">
                  <h3>
                    Theme Colours
                  </h3>
                  <a href="#green" class="green active" data-toggle="tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="bottom" data-original-title="Blue">Blue</a> 
                  <p>Cookies are NOT enabled so colour selection is not persistent.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Header & Branding region-->
        <div class="header">
          <div class="header-inner container">
            <div class="row">
              <div class="col-md-8">
                <!--branding/logo-->
                <a class="navbar-brand" href="index.php" title="Home">
                  <h1>
                    <span>Xampp</span>DomainAdder<span>.</span>
                  </h1>
                </a>
                <div class="slogan">Easy Xampp</div>
              </div>
              
              <!--header rightside-->
              <div class="col-md-4">
                <!--social media icons-->
                <div class="social-media">
                  <!--@todo: replace with company social media details-->
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <div id="header-hidden-link">
              <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a>
            </div>
          </div>
        </div>
        
        <div class="navbar">
          <div class="container" data-toggle="clingify">
            <!-- mobile collapse menu button - data-toggle="toggle" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu -->
            <a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a>
            
            <!--user menu-->
            <div class="btn-group user-menu pull-right"> <a href="#signup-modal" class="btn btn-primary signup" data-toggle="modal">Sign Up</a> <a href="#login-modal" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Login</a> </div>
            
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-collapse collapse">
              <!--main navigation-->
              <ul class="nav navbar-nav">
                <li class="home-link">
                  <a href="index.php"><i class="fa fa-home"></i><span class="hidden">Home</span></a>
                </li>
                
               
                </li>
              </ul>
            </div>
            <!--/.navbar-collapse -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #highlighted ======== -->
    <div id="highlighted">
      <div class="inner">
       
    
    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container">
        <div class="block features">
          <h2 class="title-divider">
            <span>Add <span class="de-em">Domain</span></span>
            <small>Add Domain Name</small>
          </h2>
          <div class="row">
            <form action="login.htm" role="form">
                <div class="form-group">
                  <label class="sr-only" for="login-email">Virtual Domain Name</label>
                  <input type="email" id="domain" class="form-control email" placeholder="Virtual Domain Name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="login-password">IP</label>
                  <input type="text" id="ip" class="form-control password" placeholder="Internet Protocol">
                </div>


                <button type="button" class="btn btn-primary">Add</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- FOOTER -->
    
    <!-- ======== @Region: #footer ======== -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col">
            <div class="block contact-block">
              <!--@todo: replace with company contact details-->
              <h3>
                Contact Us
              </h3>
              <address>
                <ul class="fa-ul">
                  <li>
                    <abbr title="Phone"><i class="fa fa-li fa-phone"></i></abbr>
                    +639264227035
                  </li>
                  <li>
                    <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
                    adrivanrex@gmail.com
                  </li>
                  <li>
                    <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
                    PH
                  </li>
                </ul>
              </address>
            </div>
          </div>
          
          <div class="col-md-5 col">
            <div class="block">
              <h3>
                About Us
              </h3>
              <p>Making XAMPP easier</p>
            </div>
          </div>
          
          <div class="col-md-4 col">
            <div class="block newsletter">
              <h3>
                Newsletter
              </h3>
              <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
              <!--@todo: replace with mailchimp code-->
              <form role="form">
                <div class="input-group input-group-sm">
                  <label class="sr-only" for="email-field">Email</label>
                  <input type="text" class="form-control" id="email-field" placeholder="Email">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Go!</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div id="toplink">
            <a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
          </div>
          <!--@todo: replace with company copyright details-->
          <div class="subfooter">
            <div class="col-md-6">
              <p>Copyright 2012 &copy; Rex Adrivan</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline footer-menu">
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Hidden elements - excluded from jPanel Menu on mobile-->
    <div class="hidden-elements jpanel-menu-exclude">
      <!--@modal - signup modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">
                Sign Up
              </h4>
            </div>
            <div class="modal-body">
              <form action="signup.htm" role="form">
                <h5>
                  Price Plan
                </h5>
                <select class="form-control">
                  <option>Basic</option>
                  <option>Pro</option>
                  <option>Pro +</option>
                </select>
                
                <h5>
                  Account Information
                </h5>
                <div class="form-group">
                  <label class="sr-only" for="signup-first-name">First Name</label>
                  <input type="text" class="form-control" id="signup-first-name" placeholder="First name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-last-name">Last Name</label>
                  <input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-username">Userame</label>
                  <input type="text" class="form-control" id="signup-username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-email">Email address</label>
                  <input type="email" class="form-control" id="signup-email" placeholder="Email address">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-password">Password</label>
                  <input type="password" class="form-control" id="signup-password" placeholder="Password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="term">
                    I agree with the Terms and Conditions. 
                  </label>
                </div>
                <button class="btn btn-primary" type="submit">Sign up</button>
              </form>
            </div>
            <div class="modal-footer">
              <small>Already signed up? <a href="login.htm">Login here</a>.</small>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
      <!--@modal - login modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">
                Login
              </h4>
            </div>
            <div class="modal-body">
              <form action="login.htm" role="form">
                <div class="form-group">
                  <label class="sr-only" for="login-email">Email</label>
                  <input type="email" id="login-email" class="form-control email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="login-password">Password</label>
                  <input type="password" id="login-password" class="form-control password" placeholder="Password">
                </div>
                <button type="button" class="btn btn-primary">Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <small>Not a member? <a href="#" class="signup">Sign up now!</a></small>
              <br />
              <small><a href="#">Forgotten password?</a></small>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
    
    
    <!--Scripts -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
    
    <!--Custom scripts mainly used to trigger libraries/plugins -->
    <script src="js/script.min.js"></script>
  </body>
</html>