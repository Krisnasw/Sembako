<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/aksa-admin/home') }}"><i class="icon-display4 position-left"></i> Dashboard</a></li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Produk <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ url('/aksa-admin/produk/tambah-produk') }}"><i class="icon-task"></i> Tambah Produk</a>
						</li>
						<li>
							<a href="{{ url('/aksa-admin/produk') }}"><i class="icon-paragraph-justify3"></i> Data Produk </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="{{ url('/aksa-admin/user') }}"><i class="icon-stars position-left"></i> User </a>
				</li>

				<li>
					<a href="{{ url('/aksa-admin/order') }}"><i class="icon-cart position-left"></i> Order </a>
				</li>
				
				<li>
					<a href="{{ url('/aksa-admin/seo') }}"><i class="icon-make-group position-left"></i> SEO </a>
				</li>

				<li>
					<a href="#"><i class="icon-strategy position-left"></i> Slider </a>
				</li>
			</ul>

		</div>
	</div>