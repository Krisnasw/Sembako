<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Detail Produk</title>
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
    {!! Html::script('js/jquery-1.11.3.min.js') !!}
    
    <!-- THE SHOWBIZ STYLES -->
    {!! Html::style('showbizpro/css/settings.css') !!}
    {!! Html::style('css/style-showbizpro.css') !!}

  	<!-- THE SHOWBIZ JS FILES  -->
    {!! Html::script('showbizpro/js/jquery.themepunch.showbizpro.min.js') !!}
    {!! Html::script('showbizpro/js/jquery.themepunch.tools.min.js') !!}

  	<!-- THE FANYCYBOX ASSETS -->
    {!! Html::script('showbizpro/fancybox/jquery.fancybox.pack.js') !!}
    {!! Html::style('showbizpro/fancybox/jquery.fancybox.css') !!}
    
    <!-- Favicons -->
    {!! Html::image('images/favicon.ico') !!}
    
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
                          <div class="col-md-9 col-sm-8 shop bottom40">
                          <h2 class="page-header">Product Details </h2>                          	  

                            <p class="post-meta">
                              <span><i class="glyphicon glyphicon-eye-open"></i> Showing 1–6 of 30 results</span>
                            </p>
                            
                            <div class="seperator-3d-dark top10 bottom10"></div>
                              
                              <!-- Product Details Start -->
                              @foreach ($prod as $data)
                              <div class="row product-details">
                              		<div class="col-md-6">
                                    	 
                                         <!--Article carousel with images indicators Start -->
                                         <div class="carousel slide article-slide" id="article-photo-carousel">

                                              <!-- Wrapper for slides -->
                                              <div class="carousel-inner cont-slider">
                                            
                                                    <div class="item active">
                                                      <img class="img-responsive" alt="" title="" src="{{ $data->gambar }}">
                                                    </div>
                                                    <div class="item">
                                                      <img class="img-responsive" alt="" title="" src="{{ $data->gambar }}">
                                                    </div>
                                                    <div class="item">
                                                      <img class="img-responsive" alt="" title="" src="{{ $data->gambar }}">
                                                    </div>
                                                    <div class="item">
                                                      <img class="img-responsive" alt="" title="" src="{{ $data->gambar }}">
                                                    </div>
                                              </div>
                                              <!-- Indicators -->
                                                  <ul class="carousel-indicators">
                                                        <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                                                          <img class="img-responsive" alt="" src="{{ $data->gambar }}">
                                                        </li>
                                                        <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                                          <img class="img-responsive" alt="" src="{{ $data->gambar }}">
                                                        </li>
                                                        <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                                          <img class="img-responsive" alt="" src="{{ $data->gambar }}">
                                                        </li>
                                                        <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                                                          <img class="img-responsive" alt="" src="{{ $data->gambar }}">
                                                        </li>
                                                  </ul>
                                            </div>
                                         <!-- Article carousel with images indicators End -->
                                        
                                    </div>
                                    
                                    <div class="col-md-6">

                                      <div class="thumbnail">
                                        <div class="caption-full">
                                          <h3><a href="#">{{ $data->nama }}</a></h3>
                                          <h3><span class="price">{{ "Rp."+$data->tipe_a }}</span></h3>
                                            
                                            <div class="row top30 bottom20">
                                            		<div class="col-xs-12 col-md-4 text-left">
                                                      	<div class="input-group">
                                                              <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">-</button>
                                                              </span>
                                                              <input type="text" class="form-control product-details-qty" value="1">
                                                              <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">+</button>
                                                              </span>
                                                        </div><!-- /input-group -->
                                                    </div>
                                                    @if (Auth::check())
                                                    <div class="col-xs-12 col-md-8 text-right">
                                                      <a class="btn btn-success btn-sm">Order Sekarang</a>
                                                    </div>
                                                    @else
                                                    <div class="col-xs-12 col-md-8 text-right">
                                                      <a class="btn btn-success btn-sm" disabled>Order Sekarang</a>
                                                    </div>
                                                    @endif
                                            </div>
                                            
                                        </div>
                                      </div>
                                      
                            		  
                                    </div>
                                    
                              </div>
                              @endforeach
                              <!-- Product Details End -->
                                 
                                 <!-- Separator Start -->
                                 <div class="separator top40 bottom40">
                                    <div class="separator-style"></div>
                                 </div>
                                 <!-- Separator End -->
                              
                              <!-- Tab panes start -->
                              
                              <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#description" data-toggle="tab">DESCRIPTION</a></li>
                              <li><a href="#reviews" data-toggle="tab">REVIEWS</a></li>
                              <li><a href="#leave-a-comment" data-toggle="tab">LEAVE A COMMENT</a></li>
                              <li><a href="#product-tags" data-toggle="tab">PRODUCT TAGS</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- Tab 1 start -->
                                    <div class="tab-pane fade in active" id="description">
                                        <h4>About Product</h4>
                                        <p>Fusce et dapibus justo, a sodales tellus. Donec ac fringilla erat. Nulla sollicitudin suscipit lectus ac venenatis. Proin aliquet, justo sit amet convallis porttitor, arcu sem sodales ligula, et laoreet urna eros in est. Maecenas hendrerit rhoncus auctor. </p>
                                        <ul>
                                          <li>Sed vestibulum, quam nec tristique consequat, </li>
                                          <li>Sem erat rutrum neque, <a href="#">ut facilisis</a></li>
                                          <li>Ligula lectus varius lorem. </li>
                                          <li>Aliquam odio turpis, adipiscing vel nunc eget, </li>
                                          <li>Fringilla dignissim justo. </li>
                                        </ul>
                                        <p>Sed lacinia, nisi vel ornare volutpat, dui massa dapibus leo, at eleifend purus mi vel nunc. Nullam et bibendum ante. </p>
                                    </div>
                                <!-- Tab 1 end -->
                                <!-- Tab 2 start -->
                                    <div class="tab-pane fade" id="reviews">
                                        
                                        <!-- Product Detail Comments Start -->
                                          <div class="row">
                                            <div class="well product-comments">
                                                        <div class="row">
                                                              <div class="col-xs-12 col-md-6 text-right">
                                                                    <h3 class="text-left">Comments</h3>
                                                              </div>
                                                              <div class="col-xs-12 col-md-6 text-right top20">
                                                                    <a class="btn btn-warning btn-sm">Leave a Review</a>
                                                              </div>
                                                        </div>
                                        
                                                    <hr>
                                        
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star-empty"></span>
                                                        Anonymous <span class="pull-right">10 days ago</span> 
                                                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                                                      </div>
                                                    </div>
                                        
                                                    <hr>
                                        
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star-empty"></span>
                                                        Anonymous <span class="pull-right">12 days ago</span> 
                                                        <p>I've alredy ordered another one!</p>
                                                      </div>
                                                    </div>
                                        
                                                    <hr>
                                        
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star"></span>
                                                        <span class="glyphicon glyphicon-star-empty"></span>
                                                        Anonymous <span class="pull-right">15 days ago</span> 
                                                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                                                      </div>
                                                    </div>
                                        
                                                  </div>
                                            </div>
                                          <!-- Product Detail Comments Start -->
                                        
                                    </div>
                                <!-- Tab 2 end -->
                                <!-- Tab 3 start -->
                                    <div class="tab-pane fade" id="leave-a-comment">
                                    
                             
                                     <!-- Leave a Comment Start -->
                                     <div class="row bottom40">
                                        <div class="col-md-12">
                                        <h3 class="page-header"><span><i class="glyphicon glyphicon-pencil"></i> Leave a Comment </span></h3>
                                        <p class="bottom20">Your email address will not be published. Required fields are marked *</p>
                                            <form action="#" method="post" class="form">
                                            <div class="leave-a-comment">
                                                <h3 class="text-center">
                                                    Your Comment</h3>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" placeholder="Name *" required/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="Email" placeholder="Email *" required/>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" placeholder="Message *" required></textarea>
                                                </div>
                                                <a href="#" class="btn btn-danger btn-sm btn-block" role="button">Post Comment</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Leave a Comment End -->
                                        
                                    </div>
                                <!-- Tab 3 end -->
                                <!-- Tab 4 start -->
                                    <div class="tab-pane fade" id="product-tags"><h4>Add Your Tags</h4>
                                    	<div class="input-group col-xs-12 col-md-6">
                                              <input type="text" class="form-control" value="">
                                              <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">ADD TAGS</button>
                                              </span>
                                        </div><!-- /input-group -->
                                        <p class="small top10">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div>
                                <!-- Tab 4 end -->
                            </div>
                            <!-- Tab panes end -->
                              
                              <!-- Separator Start -->
                                 <div class="separator top40 bottom40">
                                    <div class="separator-style"></div>
                                 </div>
                                 <!-- Separator End -->
                             
                             <!-- Related Projects Start -->
                    <!-- DEMO III. -->
                    <div class="divide20"></div>
                        <div class="style-title">Related <strong>Products</strong><p>( View the Other Products here )</p></div>
                        <div class="separator">
                            <div class="separator-style"></div>
                        </div>
                    <div class="divide20"></div>
                    
                    <div id="example3" class="showbiz-container">
        
                        <!-- THE NAVIGATION -->
                        <div class="showbiz-navigation center sb-nav-grey">
                            <a id="showbiz_left_1" class="sb-navigation-left"><i class="sb-icon-left-open"></i></a>
                            <a id="showbiz_play_1" class="sb-navigation-play"><i class="sb-icon-play sb-playbutton"></i><i class="sb-icon-pause sb-pausebutton"></i></a>					
                            <a id="showbiz_right_1" class="sb-navigation-right"><i class="sb-icon-right-open"></i></a>
                            <div class="sbclear"></div>
        
                        </div> <!-- END OF THE NAVIGATION -->
        
                        <div class="divide20"></div>
        
        
                        <!--	THE PORTFOLIO ENTRIES	-->
                        <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1">
        
                            <!-- THE OVERFLOW HOLDER CONTAINER, DONT REMOVE IT !! -->
                            <div class="overflowholder">
                                <!-- LIST OF THE ENTRIES -->
                                <ul >
        
                                    <!-- AN ENTRY HERE WITH PREDEFINED MEDIA SKIN-->
                                    <li class="sb-media-skin">
        
                                                <!-- THE MEDIA HOLDER -->
                                                <div class="mediaholder">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo20.jpg">
                                                    </div>
                                                </div><!-- END OF MEDIA HOLDER -->
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="greenbg"><a href="#">Teaser Item One</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    </div>
        
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
                                    </li><!-- END OF ENTRY HERE -->
        
                                <!-- AN ENTRY HERE -->
                                    <li class="sb-media-skin">
                                                <div class="mediaholder ">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo15.jpg">
                                                    </div>
                                                </div>
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="redbg"><a href="#">Teaser Item Two</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    </div>
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
        
        
                                    </li>
        
                                    <!-- AN ENTRY HERE -->
                                    <li class="sb-media-skin">
                                                <div class="mediaholder ">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo14.jpg">
                                                    </div>
                                                </div>
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="bluebg"><a href="#">Teaser Item Three</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    </div>
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
        
        
                                    </li>
        
        
                                    <!-- AN ENTRY HERE -->
                                    <li class="sb-media-skin">
                                                <div class="mediaholder ">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo20.jpg">
                                                    </div>
                                                </div>
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="greenbg"><a href="#">Teaser Item Four</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                                    </div>
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
        
        
                                    </li>
        
                                <!-- AN ENTRY HERE -->
                                    <li class="sb-media-skin">
                                                <div class="mediaholder ">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo15.jpg">
                                                    </div>
                                                </div>
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="redbg"><a href="#">Teaser Item Five</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  </p>
                                                    </div>
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
        
        
                                    </li>
        
                                    <!-- AN ENTRY HERE -->
                                    <li class="sb-media-skin">
                                                <div class="mediaholder ">
                                                    <div class="mediaholder_innerwrap">
                                                        <img alt="" src="images/entries/photo14.jpg">
                                                    </div>
                                                </div>
        
        
                                                <!-- ANIMATED HEADING INFORMATION, ALWAYS VISIBLE -->
                                                <div class="showbiz-title go-to-top"><div class="bluebg"><a href="#">Teaser Item Six</a></div></div>
        
                                                <!-- REVEAL CONTAINER (SINGLE MODE) -->
                                                <div class="reveal_container">
        
                                                    <!-- THE REVEAL CONTENT, ONLY IN DETAIL MODE VISIBLE -->
                                                    <div class="reveal_wrapper">
                                                        <p class="p40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                                    </div>
                                                </div><!-- END OF REVEAL CONTAINER -->
        
        
                                                <!-- THE REVEAL OPEN/CLOSE BUTTON - ONLY VISIBLE ON HOVER, DEFAULT STYLE -->
                                                <a class="reveal_opener show_on_hover">
                                                    <span class="openme">+</span>
                                                    <span class="closeme">-</span>
                                                </a>
        
        
        
                                    </li>
        
                                </ul>
                                <div class="sbclear"></div>
                            </div> <!-- END OF OVERFLOWHOLDER -->
                            <div class="sbclear"></div>
                        </div>
                    </div><!-- END OF DEMO III. -->	
                    <!-- Related Projects End -->
                              
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
                        
                        <!-- Text Widget Start -->
                        <div class="panel-light top10">
          <div class="panel-heading"> <span class="panel-title">Featured Products</span> </div>
          <div class="panel-body">
            <p><img class="img-rounded img-responsive" src="images/420x210-image03.jpg" alt="">In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. <br>
              <a class="btn btn-primary" href="#">More <span class="glyphicon glyphicon-chevron-right"></span></a></p>
          </div>
        </div>
                        <!-- Text Widget End -->
                        
                    	<!-- Accordion Menu Start -->
                        <h4 class="sidebar-heading top30">Online Services</h4>
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                            </span>Content</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body-accordion">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">Articles</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="#">News</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-file text-info"></span><a href="#">Newsletters</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="#">Comments</a>
                                                        <span class="badge">42</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                            </span>Modules</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body-accordion">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <a href="#">Orders</a> <span class="label label-success">$ 320</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Invoices</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Shipments</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Tex</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                            </span>Account</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body-accordion">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <a href="#">Change Password</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Notifications</a> <span class="label label-info">5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Import/Export</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="#" class="text-danger">
                                                            Delete Account</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                            </span>Reports</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body-accordion">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-usd"></span><a href="#">Sales</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-user"></span><a href="#">Customers</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-tasks"></span><a href="#">Products</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="#">Shopping Cart</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Accordion Menu End -->
                        
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
    
<!--ACTIVATE THE SHOWBIZPRO START-->
	<script type="text/javascript">

		jQuery(document).ready(function() {



			jQuery('#example3').showbizpro({
				dragAndScroll:"on",
				visibleElementsArray:[3,3,1,1],
				carousel:"off",
				mediaMaxHeight:[200,260,400,200],
				rewindFromEnd:"off",
				autoPlay:"off",
				delay:2000,						
				speed:250
			});



			// THE FANCYBOX PLUGIN INITALISATION
			jQuery(".fancybox").fancybox();

		});

	</script>
<!--ACTIVATE THE SHOWBIZPRO END--> 


  	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster-->
    {!! Html::script('js/bootstrap.min.js') !!}
    
    <!-- for Mega Menu -->
    {!! Html::script('js/for_megamenu_run_prettify.js') !!}
    
    <!-- for Retina Graphics -->
    {!! Html::script('js/retina.js') !!}
  </body>
</html>