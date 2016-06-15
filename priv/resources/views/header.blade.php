<header>
  	<!-- toolbar start -->
  		<div class="row toolbar hidden-xs">
  			<div class="container">
            	<div class="col-sm-6 col-xs-6">
            <span class="glyphicon glyphicon-earphone"></span>
 (555) 123 4567<span class="separator"></span><a href="#"><span class="glyphicon glyphicon-envelope"></span>
admin@sembako.com</a>
				</div>
                <div class="col-sm-6 hidden-xs">
                	<div class="social-media-icons pull-right">
                        <a href="#" title="Facebook" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-facebook"></span></a>
                        <a href="#" title="Twitter" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-twitter-alt"></span></a>
                        <a href="#" title="Linkedin" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-linkedin"></span></a>
                        <a href="#" title="Skype" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-skype"></span></a>
                        <a href="#" title="Pinterest" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-pinterest"></span></a>
                        <a href="#" title="Vimeo" class="tooltip-bottom" data-toggle="tooltip"><span aria-hidden="true" class="mk-social-vimeo"></span></a>
                    </div>
                </div>
			</div>
  		</div>
  	<!-- toolbar end -->
  	<!-- header-main start -->            
                <div class="row header-main">
                    <div class="container">
                        <!-- Navbar Start -->
                        <nav class="navbar navbar-default megamenu">
                          <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="{{ url('/') }}" class="navbar-brand"><img src="images/logo-red.png" class="img-responsive" alt="Logo"></a>
                          </div>
                          <div id="navbar-collapse-2" class="navbar-collapse collapse pull-right">
                            <ul class="nav navbar-nav">
                            
                              <!-- MegaMenu Start -->
                                <li><a href="{{ url('/') }}">Home</a></li>
                              <!-- MegaMenu End -->
                              
                              <!-- Pages Menu Start -->
                                    <li> <a href="{{ url('/about') }}">About us </a></li>
                              <!-- Pages Menu End -->
                              
                              <!-- Portfolio Menu Start -->
                                    <li> <a href="{{ url('/produk') }}">Produk </a></li>
                              <!-- Portfolio Menu End -->
                              
                              <!-- Blog Menu Start -->
                                    <li> <a href="{{ url('/blog') }}">Blog </a></li>
                              <!-- Blog Menu End -->
                              
                              <!-- Contact Us Menu Start -->
                                    <li> <a href="{{ url('/contact') }}">Contact Us </a></li>
                              <!-- Contact Us Menu End -->
                              @if (Auth::check())
                              <!-- Logout -->
                                    <li> <a href="{{ url('logout') }}"> Logout </a></li>
                              <!-- End Logout -->
                              @else
                              <!-- Login -->
                                    <li> <a href="{{ url('/login') }}"> Login </a></li>
                              <!-- End Login -->
                              @endif
                              
                            </ul>
                          </div>
                        </nav>
                        <!-- Navbar end -->
                    </div>
                </div>
     <!-- header-main end -->           
    </header>