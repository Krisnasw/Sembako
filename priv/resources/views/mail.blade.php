<!DOCTYPE html>
<html>
<head>
	<title>Order dari Sembako.com</title>

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

    <!-- THE SHOWBIZ STYLES -->
	<link rel="stylesheet" type="text/css" href="showbizpro/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style-showbizpro.css" media="screen" />

	<!-- THE SHOWBIZ JS FILES  -->
	<script type="text/javascript" src="showbizpro/js/jquery.themepunch.tools.min.js"></script>				
	<script type="text/javascript" src="showbizpro/js/jquery.themepunch.showbizpro.min.js"></script>

	<!-- THE FANYCYBOX ASSETS -->
	<link rel="stylesheet" href="showbizpro/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="showbizpro/fancybox/jquery.fancybox.pack.js"></script>
    
    <!-- Favicons -->
		<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- Custom JS -->
    <script type="text/javascript" src="js/custom-for-shopping.js"></script>

</head>
<body>

	<h1>Hi, Administrator </h1>
	 
	<p>Anda Mendapatkan Pesanan dari, {{ $nama_pemesan }}</p>
	Berupa :

	<p> Sayur : {{ $sayur }} </p>
	<p> Buah : {{ $buah }} </p>

	<!-- JS code for Parallax Scrolling  -->
    <script src="js/parallax-scrolling-script.js"></script>

  	<!-- Bootstrap core JavaScript --> 
    <script src="js/bootstrap.min.js"></script>
    
    <!-- for Mega Menu -->
    <script src="js/for_megamenu_run_prettify.js"></script>
    
    <!-- for Retina Graphics -->
    <script type="text/javascript" src="js/retina.js"></script> 

</body>
</html>