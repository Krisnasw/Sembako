<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Produk</title>
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
    
  </head>
  <body>
  <!-- header start -->
  	@include('header')
   <!-- header end -->
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
                <!-- Content Start -->
                    
                    <!-- Shop Start -->
                        
                          
                          <div class="col-md-9 col-sm-8 shop">
                          <h2 class="page-header">Produk Kami </h2>
                              
                              <!-- Products Start -->
                              
                                    <div class="well well-sm">
                                        Category Title 
                                        <div class="btn-group">
                                            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                                class="glyphicon glyphicon-th"></span>Grid</a>
                                        </div>
                                    </div>

                                    <div id="products" class="row list-group">
                                    @foreach ($data as $key)
                                        <div class="item  col-xs-4 col-lg-4">
                                            <div class="thumbnail">
                                                <img src="{{ $key->gambar }}" alt="" style="width:255px; height: 225px; ">
                                                <div class="caption">
                                                    <h4 class="group inner list-group-item-heading">
                                                        <a href="#">{{ $key->nama }}</a></h4>
                                                    <p class="group inner list-group-item-text description">
                                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-6">
                                                        @if (Auth::check())
                                                            @if ( Auth::user()->tipe == 'a' )
                                                                <p class="lead">
                                                                    {{ $key->tipe_a }}
                                                                </p>
                                                            @elseif ( Auth::user()->tipe == 'b' )
                                                                <p class="lead">
                                                                    {{ $key->tipe_b }}
                                                                </p>
                                                            @else
                                                                <p class="lead">
                                                                    {{ $key->tipe_c }}
                                                                </p>
                                                            @endif
                                                        @endif
                                                        </div>
                                                        <div class="col-xs-12 col-md-6">
                                                        @if (Auth::check())
                                                            <a class="btn btn-success" href="{{ url('/akun') }}">Order</a>
                                                        @else
                                                            <a class="btn btn-success disabled" href="{{ url('/login') }}">Order</a>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                              <!-- Products End -->
                              
                      </div>
                          
                    <!-- Shop End -->
                    
				<!-- Content End -->   
                <!-- Right Sidebar Start -->
                    <div class="col-md-3 col-sm-4 sidebar">
                    
                    	<!-- Custom Search Box Start -->
                        <div class="row custom-search">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </div>	
                        <!-- Custom Search Box End -->
                        
                    	<!-- Recent Posts Start -->
        <h5 class="sidebar-heading top30">Recent Posts</h5>
        <ul class="latest-news">
          <li><img src="images/pic01.jpg" width="45" height="45" class="pull-left img-circle img-responsive right-space-for-image" alt=""><a href="#">Aliquam consectetur elit feugiat <span>November 27, 2019</span></a></li>
          <li><img src="images/pic02.jpg" width="45" height="45" class="pull-left img-circle img-responsive right-space-for-image" alt=""><a href="#">Nunc ornare auctor <span>November 26, 2019</span></a></li>
          <li><img src="images/pic03.jpg" width="45" height="45" class="pull-left img-circle img-responsive right-space-for-image" alt=""><a href="#">Cras vestibulum auctor urna <span>November 25, 2019</span></a></li>
        </ul>
        <!-- Recent Posts End --> 
                    </div>
                <!-- Right Sidebar End -->
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
  </body>
</html>