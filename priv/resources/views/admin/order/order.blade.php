<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aksa Admin | Order</title>

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
	{!! Html::script('assets/plugins/tables/datatables/datatables.min.js') !!}
	{!! Html::script('assets/plugins/forms/selects/select2.min.js') !!}

	{!! Html::script('assets/core/app.js') !!}
	{!! Html::script('assets/pages/datatables_basic.js') !!}
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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Aksa Admin</span> - Order</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ url('/aksa-admin/home') }}">Home</a></li>
					<li class="active"><a href="{{ url('/aksa-admin/order') }}">Order</a></li>
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

				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Order</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<table class="table datatable-basic table-bordered table-striped table-hover">

						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Telp</th>
								<th>Total Dibayar</th>
								<th>Status</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($order as $data)
							<tr>
								<td>{{ ++$no }}</td>
								<td>{{ $data->nama_pemesan }}</td>
								<td>{{ $data->email }}</td>
								<td>{{ $data->alamat }}</td>
								<td>{{ $data->telp }}</td>
								<td>{{ $data->jumlah_dibayar }}</td>
								<td>{{ $data->status }}</td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-eye"></i> Detail</a></li>
												<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
												<li><a href="#"><i class="icon-file-pdf"></i> Print as PDF</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>

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
