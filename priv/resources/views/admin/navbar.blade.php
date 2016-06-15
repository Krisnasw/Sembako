
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ url('/aksa-admin/home') }}">{!! Html::image('assets/images/logo_light.png') !!}</a>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown dropdown-user">
				@if (Auth::check())
					<a class="dropdown-toggle" data-toggle="dropdown">
						{!! Html::image('images/pic01.jpg') !!}
						<span>{{ Auth::user()->name }}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="{{ url('admLogout') }}"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				@endif
				</li>
			</ul>
		</div>
	</div>