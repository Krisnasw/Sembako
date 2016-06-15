<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Login Page</title>
    <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ProFlex Powerful MultiPurpose Html Template">
    <meta name="author" content="ArtofThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/color/red.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/tools.css">
    <link rel="stylesheet" type="text/css" href="css/footer-dark.css">
    <link rel="stylesheet" type="text/css" href="css/socialmediaicons.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    
    <!-- MegaMenu styles-->
    <link href="css/megamenu.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

        <!--[if lte IE 7]><script src="js/socialmediaicons-lte-ie7.js"></script><![endif]-->

    <!-- LOAD JQUERY LIBRARY -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    
    <!-- Favicons -->
		<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- For Sticky Header -->
    <script type="text/javascript" src="js/custom.js"></script>
    
  <!-- for Animation Elements -->
    <script src="js/wow.js"></script>

    <!-- SweetAlert -->
    {!! Html::style('css/sweetalert.css') !!}
    
  </head>
  <body>
  <!-- Header start -->
  	@include('header')
   <!-- Header end -->
   <!-- Main start -->
   <div class="main" role="main">
      	<!-- Login Header Start -->
        <div class="login-header">
        
            <div class="container">
      
              <div class="row">
                <div class="col-lg-12">
                  <!-- The background image is set in the custom CSS 
                  <h1 class="tagline">Modern &amp; Powerful Site Template</h1>
                  <h4>Everything You Need to Build Your Stunning Website!</h4>-->
                  
                  <!-- Login Form Start -->
                  <div class="row">
                      <div class="col-md-8 wow fadeInLeft">
                          <h2 class="tagline">Modern &amp; Powerful Site Template</h2><br>
                          <h4>Everything You Need to Build Your Stunning Website!</h4>
                      </div>
                      <div class="col-md-4" style="margin-top: 100px">
                          <div class="account-box wow fadeInRight">
                              <div class="logo-for-login">
                                  <img src="images/login-page-logo.png" alt=""/>
                              </div>
                              {!! Form::open(array('action' => 'LoginController@postSignIn', 'method' => 'POST')) !!}
                              <div class="form-group">
                                  <input type="email" name="email" class="form-control" placeholder="Email" required autofocus />
                              </div>
                              <div class="form-group">
                                  <input type="password" name="password" class="form-control" placeholder="Password" required />
                              </div>
                              <label class="checkbox">
                                  <input type="checkbox" value="remember-me" />
                                  Keep me signed in
                              </label>
                              <button class="btn btn-lg btn-block purple-bg" type="submit">
                                  Sign in</button>
                              {!! Form::close() !!}
                              <a class="forgotLnk" href="#">I can't access my account</a>

                              <div class="or-box row-block">
                                  <div class="row">
                                      <div class="col-md-12 row-block">
                                          <a href="{{ url('/daftar') }}" class="btn btn-primary btn-block">Create New Account</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Login Form End -->
                  
                </div>
              </div>
            
            </div>
        
        </div>
    <!-- Login Header End -->
      	<!-- Content start -->
      		<div class="row">
      			<div class="container padding-bottom50 padding-top50">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8 wow fadeInUp">
                          <h2 class="page-header">Terms &amp; Conditions</h2>
                          <p>Maecenas risus orci, fermentum in urna ornare, placerat sodales sem. Mauris condimentum metus sit amet tortor varius venenatis. Integer id purus vitae mi gravida et mauris quis, interdum viverra. </p>
                          <p>Integer sodales faucibus massa condimentum tempor. Donec vitae augue lacinia, tempus lectus in, consequat magna. Curabitur lacus odio, gravida et mauris quis, scelerisque mattis nibh. Sed et diam ac enim malesuada euismod. Morbi venenatis orci non lacus maximus volutpat. Pellentesque id egestas orci.</p>
                          <p class="top20"><a class="btn btn-success btn-large" href="#">HOW IT WORKS &raquo;</a></p>
                          <p>&nbsp;</p>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp">
                          <h2 class="page-header">Contact Us</h2>
                          <address>
                            <strong>Donec Vitae, Inc.</strong><br>
                            795 Curabitur lacus, Suite 600<br>
                            San Francisco, CA 12345<br>
                          </address>
                          <address>
                            <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                            <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@example.com</a>
                          </address>
                        </div>
                    </div>
                </div>
         	</div><!-- Content end -->
 	</div>
    <!-- Main end -->

    @include('footer')


  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster-->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- for Mega Menu -->
    <script src="js/for_megamenu_run_prettify.js"></script>
    
    <!-- for Retina Graphics -->
    <script type="text/javascript" src="js/retina.js"></script>
    {!! Html::script('/js/sweetalert.min.js') !!}

    @include('sweet::alert')
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif
  </body>
</html>