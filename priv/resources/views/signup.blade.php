<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Registrasi</title>
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

    <!-- Sweet Alert -->
    {!! Html::style('css/sweetalert.css') !!}
    
  </head>
  <body>
  <!-- Header start -->
  	@include('header')
   <!-- Header end -->
   <!-- Main start -->
   <div class="main" role="main">
      	<!-- subheader start -->
      		<div class="row business-header">
      			<div class="container">

    			</div>
      		</div>
     	<!-- subheader end -->
      	<!-- Content start -->
      		<div class="row content">
      			<div class="container">
                    <!-- Sign Up Module Start -->
        <div class="row" id="signup">
          <div class="col-md-6 col-md-offset-3">
          <h2 class="page-header">Sign up </h2>
            <fieldset class="form">
              {!! Form::open(array('action' => 'LoginController@Register', 'method' => 'POST')) !!}
              <input type="text" name="rumkit" value="" class="form-control input" placeholder="Asal Rumkit"  />
              <input type="text" name="email" value="" class="form-control input" placeholder="Your Email"  />
              <input type="password" name="password" value="" class="form-control input" placeholder="Password"  />
              <input type="password" name="confirm_password" value="" class="form-control input" placeholder="Confirm Password"  />
              <br />
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
              <button class="btn btn-success btn-block signup-btn" type="submit"> Create my account</button>
              {!! Form::close() !!}
            </fieldset>
          </div>
        </div>
      	<!-- Sign Up Module End -->   
                </div>
      		</div>
     	<!-- Content end -->
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
    {!! Html::script('js/sweetalert.min.js') !!}

    @include('sweet::alert')
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif
  </body>
</html>