<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aksa Admin | Edit User</title>

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
	{!! Html::script('assets/plugins/forms/selects/select2.min.js') !!}
	{!! Html::script('assets/plugins/forms/styling/uniform.min.js') !!}

	{!! Html::script('assets/core/app.js') !!}
	{!! Html::script('assets/pages/form_layouts.js') !!}
	{!! Html::script('assets/plugins/forms/inputs/touchspin.min.js') !!}
	{!! Html::script('assets/pages/form_input_groups.js') !!}
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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Aksa Admin</span> - Edit User</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ url('/aksa-admin/home') }}">Home</a></li>
					<li><a href="form_layout_horizontal.html">User</a></li>
					<li class="active">Edit User</li>
				</ul>
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

				<!-- Horizontal form options -->
				<div class="row">
					<div class="col-md-12">

						<!-- Basic layout-->
						{!! Form::model($user, ['method' => 'PATCH', 'class' => 'form-horizontal', 'action' => ['UserController@update', $user->id]]) !!}
							<div class="panel panel-flat">
								<div class="panel-heading">
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="form-group">
										<label class="col-lg-3 control-label">Nama User :</label>
										<div class="col-lg-9">
											{!! Form::text('name', null, array('class' => 'form-control'),'') !!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Alamat Email :</label>
										<div class="col-lg-9">
											{!! Form::text('email', null, array('class' => 'form-control'),'') !!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Tipe User :</label>
										<div class="col-lg-9">
											<select class="select" name="tipe">
													<option value="A">User Tipe A</option>
													<option value="B">User Tipe B</option>
													<option value="C">User Tipe C</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">User Aktif :</label>
										<div class="col-lg-9">
											<select class="select" name="aktif">
													<option value="y">Activated</option>
													<option value="n">Deactived</option>
											</select>
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
							</div>
						{!! Form::close() !!}
						<!-- /basic layout -->

					</div>

				</div>
				<!-- /vertical form options -->

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