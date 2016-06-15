
<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Cart</title>
    <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ProFlex Powerful MultiPurpose Html Template">
    <meta name="author" content="ArtofThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    {!! Html::style('css/bootstrap.min.css') !!}
    
    <!-- Custom styles for this template -->
    {!! Html::style('css/navbar.css') !!}
    {!! Html::style('css/color/red.css') !!}
    {!! Html::style('css/styles.css') !!}
    {!! Html::style('css/header.css') !!}
    {!! Html::style('css/tools.css') !!}
    {!! Html::style('css/footer-dark.css') !!}
    {!! Html::style('css/socialmediaicons.css') !!}
    {!! Html::style('css/responsive.css') !!}
    
    <!-- MegaMenu styles-->
    {!! Html::style('css/megamenu.css') !!}
    
    <!-- Font Awesome -->
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
    
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
    {!! Html::script('js/custom.js') !!}
    
    <!-- for Animation Elements -->
    {!! Html::script('js/wow.js') !!}
    
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
                        
                    <div class="col-md-12 col-sm-12 shop">
                    <h2 class="page-header">Shopping Cart </h2>
                    
                          <div class="seperator-3d-dark top10 bottom10"></div>
                            
                            <!-- Shopping Cart Start -->
                            
                            <div class="row shopping-cart-container">
                                <div class="col-sm-12 col-md-12">
                                    <table class="table table-hover panel panel-default">
                                        <thead class="panel-heading">
                                            <tr class="panel-title marina">
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Total</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key)
                                            <tr>
                                                <td class="col-sm-8 col-md-6">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="" style="width: 100px; height: 70px;" alt=""> </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="#">{{ $key->sayur }}</a></h4>
                                                        @if ( $key->qty_sayur > 0 )
                                                        <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                                        @else
                                                        <span>Status: </span><span class="text-error"><strong>Out Of Stock</strong></span>
                                                        @endif
                                                    </div>
                                                </div></td>
                                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                                	<input type="text" class="form-control" id="exampleInputEmail1" value="{{ $key->qty_sayur }}">
                                                </td>
                                                <td class="col-sm-1 col-md-1 text-center"><h4></h4></td>
                                                <td class="col-sm-1 col-md-1 text-center"><h4></h4></td>
                                                <td class="col-sm-1 col-md-1">
                                                <button type="button" class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-remove"></span> Remove
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                            <tr class="bg-clouds">
                                                <td>   </td>
                                                <td>   </td>
                                                <td>   </td>
                                                <td><h3>Total</h3></td>
                                                <td class="text-right"><h3><strong>Rp. 1.000</strong></h3></td>
                                            </tr>

                                            <tr>
                                                <td>   </td>
                                                <td>   </td>
                                                <td>   </td>
                                                <td class="padding-top20 padding-bottom20">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                                </button></td>
                                                <td class="padding-top20 padding-bottom20">
                                                <button type="button" class="btn btn-success">
                                                    Checkout <span class="glyphicon glyphicon-play"></span>
                                                </button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Shopping Cart End -->
                            
                     </div>
                          
                    <!-- Shop End -->
                    
				<!-- Content End -->   
                
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