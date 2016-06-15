
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aksa Admin | Tambah Produk</title>

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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Aksa Admin</span> - Tambah Produk</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ url('/aksa-admin/home') }}">Home</a></li>
					<li><a href="form_layout_horizontal.html">Produk</a></li>
					<li class="active">Input Produk</li>
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
						{!! Form::open(array('method' => 'post', 'class' => 'form-horizontal', 'action' => 'ProdukController@store', 'files' => 'true')) !!}
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
										<label class="col-lg-3 control-label">Nama Produk :</label>
										<div class="col-lg-9">
											<input type="text" name="nama" class="form-control" placeholder="Pisang, Kresek, Kacang Ijo">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Satuan :</label>
										<div class="col-lg-9">
											<input type="text" name="satuan" class="form-control" placeholder="Kilogram / Kg">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Kategori :</label>
										<div class="col-lg-9">
											<select class="select" name="cat">
													<option value="Sayur">Sayur</option>
													<option value="Buah">Buah</option>
													<option value="Plastik">Plastik</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Quantity :</label>
										<div class="col-lg-9">
											<input type="text" name="qty" class="touchspin-basic" placeholder="0-100">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Gambar Produk :</label>
										<div class="col-lg-9">
											<input type="file" name="gambar" class="file-styled">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Harga Tipe A :</label>
										<div class="col-lg-9">
											<input type="text" name="tipe_a" class="form-control" placeholder="Rp. XXX. XXX">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Harga Tipe B :</label>
										<div class="col-lg-9">
											<input type="text" name="tipe_b" class="form-control" placeholder="Rp. XXX. XXX">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Harga Tipe C :</label>
										<div class="col-lg-9">
											<input type="text" name="tipe_c" class="form-control" placeholder="Rp. XXX. XXX">
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
