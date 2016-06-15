<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aksa Admin | Edit Produk</title>

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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Aksa Admin</span> - Produk</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ url('/aksa-admin/home') }}">Home</a></li>
					<li><a href="#">Produk</a></li>
					<li class="active"><a href="{{ url('/aksa-admin/produk') }}">Data Produk</a></li>
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
						<h5 class="panel-title">Data Produk</h5>
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
								<th>Kategori</th>
								<th>Quantity</th>
								<th>Tipe A</th>
								<th>Tipe B</th>
								<th>Tipe C</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($prod as $data)
							<tr>
								<td>{{ ++$no }}</td>
								<td>{{ $data->nama }}</td>
								<td>{{ $data->kat }}</td>
								<td>{{ $data->qty + $data->satuan }}</td>
								<td>{{ $data->tipe_a }}</td>
								<td>{{ $data->tipe_b }}</td>
								<td>{{ $data->tipe_c }}</td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#" data-toggle="modal" data-target="#modal_detail_primary{{{ $data->id }}}"><i class="icon-eye"></i> Detail</a></li>
												<li><a href="#" data-toggle="modal" data-target="#modal_theme_primary{{{ $data->id }}}"><i class="icon-trash"></i> Delete</a></li>
												<li><a href="{{ url('aksa-admin/produk') }}/{{ $data->id }}/edit"><i class="icon-pencil"></i> Edit</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>

							<!-- Hapus modal -->
							<div id="modal_theme_primary{{{ $data->id }}}" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header bg-danger">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h6 class="modal-title">Hapus Produk</h6>
										</div>

										<div class="modal-body">
											<h6 class="text-semibold">Apakah Anda Yakin Ingin Menghapus <i> {{ $data->nama }} </i></h6>
											<p>NB : Data tidak dapat dikembalikan jika sudah dihapus.</p>
										</div>

										<div class="modal-footer">
											{!! Form::open(array('method' => 'DELETE', 'route' => array('aksa-admin.produk.destroy', $data->id))) !!}
		                                      {!! Form::submit("Ya", array('class' => 'btn btn-danger')) !!}
		                                    {!! Form::close() !!}
		                                    <button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Hapus modal -->

							<!-- Detail modal -->
							<div id="modal_detail_primary{{{ $data->id }}}" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header bg-danger">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h6 class="modal-title">Detail Produk</h6>
										</div>

										<div class="modal-body">
											<h6 class="text-semibold">Nama Produk : <i> {{ $data->nama }} </i></h6>
											<h6 class="text-semibold">Kategori : <i> {{ $data->kat }} </i></h6>
											<h6 class="text-semibold">Harga Tipe A : <i> {{ $data->tipe_a }} </i></h6>
											<h6 class="text-semibold">Harga Tipe B : <i> {{ $data->tipe_b }} </i></h6>
											<h6 class="text-semibold">Harga Tipe C : <i> {{ $data->tipe_c }} </i></h6>
										</div>

										<div class="modal-footer">
		                                      {!! Form::submit("Close", array('class' => 'btn btn-link', 'data-dismiss' => 'modal')) !!}
										</div>
									</div>
								</div>
							</div>
							<!-- /Detail modal -->
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
