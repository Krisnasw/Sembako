
<!DOCTYPE html>
<html lang="en"><head>
    <title>404 Page Not Found</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ProFlex Powerful MultiPurpose Html Template">
    <meta name="author" content="ArtofThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    {!! Html::style('css/bootstrap.min.css') !!}
    
    <!-- Custom styles for this template -->
    {!! Html::style('css/navbar.css') !!}
    {!! Html::style('css/color/blue.css') !!}
    {!! Html::style('css/styles.css') !!}
    {!! Html::style('css/header-fullwidth.css') !!}
    {!! Html::style('css/tools.css') !!}
    {!! Html::style('css/footer-dark.css') !!}
    {!! Html::style('css/responsive.css') !!}
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    
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
    
  </head>
  <body>
  
   <!-- Main start -->
   <div class="main" role="main">

      	<!-- Content start -->
      		<div class="row content">
      			<div class="container">
                    <div class="col-md-12">

                    <!-- Error Template Start -->
                        <div class="error-template">
                            <p class="error-404 wow fadeInUp"><i class="fa fa-chain-broken fa-2x"></i></p>
                            <p class="lead wow fadeInUp">The page you're looking for could not be found.</p>
                            <p class="wow fadeInUp">Here are some helpful links to help you find what you're looking for:</p>
                            <div class="error-actions top40">
                                <a href="{{ url('/') }}" class="btn btn-primary btn-lg wow fadeInUp"><span class="glyphicon glyphicon-home"></span>
                                    Take Me Home </a><a href="{{ url('/contact') }}" class="btn btn-default btn-lg wow fadeInUp"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                            </div>
                        </div>
                    <!-- Error Template End -->
                    
                    </div>  
                </div>
      		</div>
     	<!-- Content end -->
 	</div>
    <!-- Main end -->


  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster--> 
    <script src="js/bootstrap.min.js"></script>
    
    <!-- for Mega Menu -->
    <script src="js/for_megamenu_run_prettify.js"></script>
    
    <!-- for Retina Graphics -->
    <script type="text/javascript" src="js/retina.js"></script> 
  </body>
</html>