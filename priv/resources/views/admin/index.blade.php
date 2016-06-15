<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aksa Admin | Dashboard</title>

	<!-- Global stylesheets -->
	{!! Html::style('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') !!}
	{!! Html::style('assets/css/minified/bootstrap.min.css') !!}
	{!! Html::style('assets/css/icons/icomoon/styles.css') !!}
	{!! Html::style('assets/css/minified/core.min.css') !!}
	{!! Html::style('assets/css/minified/components.min.css') !!}
	{!! Html::style('assets/css/minified/colors.min.css') !!}
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	{!! Html::script('assets/plugins/loaders/pace.min.js') !!}
	{!! Html::script('assets/core/libraries/jquery.min.js') !!}
	{!! Html::script('assets/core/libraries/bootstrap.min.js') !!}
	{!! Html::script('assets/plugins/loaders/blockui.min.js') !!}
	{!! Html::script('assets/plugins/ui/nicescroll.min.js') !!}
	{!! Html::script('assets/plugins/ui/drilldown.js') !!}
	<!-- /core JS files -->

	<!-- Theme JS files -->
	{!! Html::script('assets/plugins/visualization/d3/d3.min.js') !!}
	{!! Html::script('assets/plugins/visualization/d3/d3_tooltip.js') !!}
	{!! Html::script('assets/plugins/forms/styling/switchery.min.js') !!}
	{!! Html::script('assets/plugins/forms/styling/uniform.min.js') !!}
	{!! Html::script('assets/plugins/forms/selects/bootstrap_multiselect.js') !!}
	{!! Html::script('assets/plugins/ui/moment/moment.min.js') !!}
	{!! Html::script('assets/plugins/pickers/daterangepicker.js') !!}

	{!! Html::script('assets/core/app.js') !!}
	{!! Html::script('assets/pages/dashboard.js') !!}
	<!-- /theme JS files -->

	<!-- Sweet Alert -->
    {!! Html::style('css/sweetalert.css') !!}
    {!! Html::script('js/sweetalert.min.js') !!}

    @include('sweet::alert')
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif

</head>

<body>

	<!-- Main navbar -->
	@include('admin.navbar')
	<!-- /main navbar -->

	<!-- Second navbar -->
	@include('admin.snavbar')
	<!-- /second navbar -->

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<i class="icon-arrow-left52 position-left"></i>
					<span class="text-semibold">Home</span> - Dashboard
					@if (Auth::check())
					<small class="display-block">Selamat Datang, {{ Auth::user()->name }}!</small>
					@endif
				</h4>
			</div>

		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Main charts -->
				<div class="row">

				</div>
				<!-- /main charts -->

				<!-- Dashboard content -->
				<div class="row">

						<!-- Selamat Datang -->
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h6 class="panel-title">Selamat Datang di Aksamedia Admin</h6>
							</div>

							<div class="panel-body">
								Lorem Ipsum Dolor Sit Ameteus Puge Invoker Exort Magnus Templar Assasin
							</div>
						</div>
					</div>
						<!-- End Selamat Datang -->

					<div class="col-lg-8">

						<!-- Quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">

								<!-- Members online -->
								<div class="panel bg-teal-400">
									<div class="panel-body">
									<div class="heading-elements">
										<ul class="icons-list">
						                		<li><a data-action="reload"></a></li>
						                	</ul>
										</div>
										<h3 class="no-margin">{{ $user }}</h3>
										Total User
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-4">

								<!-- Current server load -->
								<div class="panel bg-pink-400">
									<div class="panel-body">
										<div class="heading-elements">
										<ul class="icons-list">
						                		<li><a data-action="reload"></a></li>
						                	</ul>
										</div>

										<h3 class="no-margin">{{ $produk }}</h3>
										Total Produk
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>

							<div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="panel bg-blue-400">
									<div class="panel-body">
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="reload"></a></li>
						                	</ul>
					                	</div>

										<h3 class="no-margin">{{ $order }}</h3>
										Total Order
									</div>

									<div id="today-revenue"></div>
								</div>
								<!-- /today's revenue -->

							</div>
						</div>
						<!-- /quick stats boxes -->

						<!-- Latest posts -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Latest posts</h6>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
		                	</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-6">
										<ul class="media-list content-group">
											<li class="media stack-media-on-mobile">
			                					<div class="media-left">
													<div class="thumb">
														<a href="#">
															<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
															<span class="zoom-image"><i class="icon-play3"></i></span>
														</a>
													</div>
												</div>

			                					<div class="media-body">
													<h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
						                    		<ul class="list-inline list-inline-separate text-muted mb-5">
						                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
						                    			<li>14 minutes ago</li>
						                    		</ul>
													The him father parish looked has sooner. Attachment frequently gay terminated son...
												</div>
											</li>

											<li class="media stack-media-on-mobile">
			                					<div class="media-left">
													<div class="thumb">
														<a href="#">
															<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
															<span class="zoom-image"><i class="icon-play3"></i></span>
														</a>
													</div>
												</div>

			                					<div class="media-body">
													<h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
						                    		<ul class="list-inline list-inline-separate text-muted mb-5">
						                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
						                    			<li>12 days ago</li>
						                    		</ul>
													Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed...
												</div>
											</li>
										</ul>
									</div>

									<div class="col-lg-6">
										<ul class="media-list content-group">
											<li class="media stack-media-on-mobile">
			                					<div class="media-left">
													<div class="thumb">
														<a href="#">
															<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
															<span class="zoom-image"><i class="icon-play3"></i></span>
														</a>
													</div>
												</div>

			                					<div class="media-body">
													<h6 class="media-heading"><a href="#">Case read they must</a></h6>
						                    		<ul class="list-inline list-inline-separate text-muted mb-5">
						                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
						                    			<li>20 hours ago</li>
						                    		</ul>
													On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
												</div>
											</li>

											<li class="media stack-media-on-mobile">
			                					<div class="media-left">
													<div class="thumb">
														<a href="#">
															<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
															<span class="zoom-image"><i class="icon-play3"></i></span>
														</a>
													</div>
												</div>

			                					<div class="media-body">
													<h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
						                    		<ul class="list-inline list-inline-separate text-muted mb-5">
						                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
						                    			<li>2 days ago</li>
						                    		</ul>
													Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /latest posts -->

					</div>

					<div class="col-lg-4">

						<!-- Daily sales -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">User Baru </h6>
							</div>

							<div class="panel-body">
								<div id="sales-heatmap"></div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
									@foreach($newUser as $key)
										<tr>
											<td>
												{{ ++$no }}
											</td>
											<td>
												<span class="text-muted text-size-small">{{ $key->name }}</span>
											</td>
											<td>
												<span class="text-muted text-size-small">{{ $key->email }}</span>
											</td>
											<td>
											@if ($key->aktif == "y")
												<span class="label label-success">Activate</span>
												@else
												<span class="label label-warning">Deactivate</span>
											@endif
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<!-- /daily sales -->

					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

		<!-- Footer -->
		@include('admin.footer')
		<!-- /footer -->

	</div>
	<!-- /page container -->

</body>
</html>
