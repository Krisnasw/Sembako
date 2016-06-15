<!DOCTYPE html>
<html lang="en"><head>
    <title>Sembako | Akun</title>
    <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ProFlex Powerful MultiPurpose Html Template">
    <meta name="author" content="ArtofThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/color/red.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/tools.css">
    <link rel="stylesheet" type="text/css" href="css/footer-dark.css">
    <link rel="stylesheet" type="text/css" href="css/socialmediaicons.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    
    <!-- MegaMenu styles-->
    <link href="css/megamenu.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
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
    
    <!-- Custom JS -->
    <script type="text/javascript" src="js/custom.js"></script>
    
  <!-- for Animation Elements -->
    <script src="js/wow.js"></script>

    <style type="text/css">
      .cek
      {
        margin-top: -100px;margin-left: 175px;
      }
    </style>
    
  </head>
  <body>
  <!-- Header start -->
  	@include('header')
   <!-- Header end -->
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
                        
                    <div class="col-md-12 col-sm-12">
                    <h2 class="page-header">My Account </h2>                        

                          <p class="post-meta">
                          @if (Auth::check())
                            <span><i class="glyphicon glyphicon-eye-open"></i> Selamat Datang {{ Auth::user()->name }} </span>
                          </p>
                          
                          <div class="seperator-3d-dark top10 bottom20"></div>
                            
                            <!-- My Account Start -->
                            
                            <div class="row my-account padding-bottom30 padding-top30">
                                <div class="col-md-2">
                                  <ul class="nav nav-pills nav-stacked my-account-well">
                                    <li class="active"><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                                    <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                                  </ul>
                                </div>
                                <div class="col-md-10">
                                  <div class="my-account-panel"> <img class="my-account-pic img-circle" src="images/pft.jpg" alt="...">
                                    <div class="my-account-name"><small>{{ Auth::user()->name }}</small></div>
                                    <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a> </div>
                                  <br>
                                  <br>
                                  <br>
                                  <ul class="nav nav-tabs top20" id="myTab">
                                    <li class="active"><a href="#order" data-toggle="tab"><i class="fa fa-plus"></i> Order</a></li>
                                    <li><a href="#buah" data-toggle="tab"><i class="fa fa-shopping-cart"></i> Buah</a></li>
                                    <li><a href="#plastik" data-toggle="tab"><i class="fa fa-shopping-cart"></i> Plastik</a></li>
                                    <li><a href="#sayur" data-toggle="tab"><i class="fa fa-shopping-cart"></i> Sayur</a></li>
                                    <li><a href="#pesanan" data-toggle="tab"><i class="fa fa-eye"></i> Pesanan Anda</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div class="tab-pane" id="sayur">
                                    <?php $i = 1; ?>
                                      @foreach ($sayur as $data)
                                      <!-- Tables start -->
                                      <div class="row">
                                      <h4>Daftar Sayur</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Quantity</th>
                                                    <th>Harga</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->qty }}</td>
                                                    @if (Auth::user()->tipe == "a")
                                                      <td name="harga_sayur">{{ $data->tipe_a }}</td>
                                                    @elseif (Auth::user()->tipe == "b")
                                                      <td name="harga_sayur">{{ $data->tipe_b }}</td>
                                                    @else
                                                      <td name="harga_sayur">{{ $data->tipe_c }}</td>
                                                    @endif
                                                  </tr>
                                                </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <!-- Tables start -->
                                      <?php $i++; ?>
                                      @endforeach
                                    </div>

                                    <div class="tab-pane" id="buah">
                                    <?php $i = 1; ?>
                                      @foreach ($buah as $data)
                                      <!-- Tables start -->
                                      <div class="row">
                                      <h4>Daftar Buah</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Quantity</th>
                                                    <th>Harga</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->qty }}</td>
                                                    @if (Auth::user()->tipe == "a")
                                                      <td name="harga_buah">{{ $data->tipe_a }}</td>
                                                    @elseif (Auth::user()->tipe == "b")
                                                      <td name="harga_buah">{{ $data->tipe_b }}</td>
                                                    @else
                                                      <td name="harga_buah">{{ $data->tipe_c }}</td>
                                                    @endif
                                                  </tr>
                                                </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <!-- Tables start -->
                                      <?php $i++; ?>
                                      @endforeach
                                    </div>

                                    <div class="tab-pane" id="plastik">
                                    <?php $i = 1; ?>
                                      @foreach ($plastik as $data)
                                      <!-- Tables start -->
                                      <div class="row">
                                      <h4>Daftar Plastik</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Quantity</th>
                                                    <th>Harga</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->qty }}</td>
                                                    @if (Auth::user()->tipe == "a")
                                                      <td name="harga_plastik">{{ $data->tipe_a }}</td>
                                                    @elseif (Auth::user()->tipe == "b")
                                                      <td name="harga_plastik">{{ $data->tipe_b }}</td>
                                                    @else
                                                      <td name="harga_plastik">{{ $data->tipe_c }}</td>
                                                    @endif
                                                  </tr>
                                                </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <!-- Tables start -->
                                      <?php $i++; ?>
                                      @endforeach
                                    </div>

                                    <div class="tab-pane" id="pesanan">
                                    <?php $i = 1; ?>
                                      <!-- Tables start -->
                                      <div class="row">
                                      <h4>List Orderan</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Pesanan</th>
                                                    <th>Total Harga</th>
                                                    <th>Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                      @foreach ($order as $data)
                                                  <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                    {{ $data->sayur }} | {{ $data->qty_sayur }}
                                                    {{ $data->buah }} | {{ $data->qty_buah }}
                                                    {{ $data->plastik }} | {{ $data->qty_plastik }}
                                                    </td>
                                                    <td>{{ $data->jumlah_dibayar }}</td>
                                                    <td>{{ $data->status }}</td>
                                                  </tr>
                                      <?php $i++; ?>
                                      @endforeach
                                                </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <!-- Tables start -->
                                    </div>

                                     <div class="tab-pane active" id="order">
                                        <p>Masukkan Pesanan Anda di Form bawah in : </p>
                                        {!! Form::open(array('method' => 'POST', 'action' => 'HomeController@store', 'class' => 'form-horizontal')) !!}
                                            <div class="row">

                                              <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>Pilih Produk *</label>
                                                  <select class="form-control" id="name" name="name_buah">
                                                    <option value="">-- Pilih Buah --</option>
                                                    @foreach ($buah as $data)
                                                      <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>Quantity *</label>
                                                  <input type="text" id="qty_buah" name="qty_buah" class="form-control" maxlength="100" value="">
                                                  @if (Auth::user()->tipe == 'a')
                                                    <input type="hidden" name="buah_harga" value="{{ $data->tipe_a }}">
                                                  @elseif (Auth::user()->tipe == 'b')
                                                    <input type="hidden" name="buah_harga" value="{{ $data->tipe_b }}">
                                                  @else
                                                    <input type="hidden" name="buah_harga" value="{{ $data->tipe_c }}">
                                                  @endif
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>Pilih Produk *</label>
                                                  <select class="form-control" id="name" name="name_sayur">
                                                    <option value="">-- Pilih Sayur --</option>
                                                    @foreach ($sayur as $data)
                                                      <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>Quantity *</label>
                                                  <input type="text" id="qty_sayur" name="qty_sayur" class="form-control" maxlength="100" value="">
                                                  @if (Auth::user()->tipe == 'a')
                                                    <input type="hidden" name="sayur_harga" value="{{ $data->tipe_a }}">
                                                  @elseif (Auth::user()->tipe == 'b')
                                                    <input type="hidden" name="sayur_harga" value="{{ $data->tipe_b }}">
                                                  @else
                                                    <input type="hidden" name="sayur_harga" value="{{ $data->tipe_c }}">
                                                  @endif
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>Pilih Produk *</label>
                                                  <select class="form-control" id="name" name="name_plastik">
                                                    <option value="">-- Pilih Plastik --</option>
                                                    @foreach ($plastik as $data)
                                                      <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>Quantity *</label>
                                                  <input type="text" id="qty_plastik" name="qty_plastik" class="form-control" maxlength="100" value="">
                                                  @if (Auth::user()->tipe == 'a')
                                                    <input type="hidden" name="plastik_harga" value="{{ $data->tipe_a }}">
                                                  @elseif (Auth::user()->tipe == 'b')
                                                    <input type="hidden" name="plastik_harga" value="{{ $data->tipe_b }}">
                                                  @else
                                                    <input type="hidden" name="plastik_harga" value="{{ $data->tipe_c }}">
                                                  @endif
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>Alamat *</label>
                                                  <input type="text" id="mamat" name="alamat" placeholder="Masukkan Alamat" class="form-control" maxlength="100" value="">
                                                </div>
                                                <div class="col-md-6">
                                                  <label>No Telp *</label>
                                                  <input type="text" id="mail" name="telp" placeholder="Masukkan Nomor Telp yang bisa dihubungi" class="form-control" maxlength="100" value="">
                                                </div>
                                              </div>

                                            </div>

                                            <div class="form-group">
                                              <div class="col-md-2">
                                                <input type="submit" data-loading-text="Loading..." class="btn btn-primary btn-lg" value="Order Sekarang">
                                              </div>
                                            </div>
                                        {!! Form::close() !!}
                                            
                                            <!-- <button type="submit" name="cek" id="cek_rego" data-toggle="modal" data-target="#myModal" onclick="#ajax_harga" class="btn btn-info btn-lg cek"> Cek Harga</button> -->

                                      </div>

                                  </div>
                                </div>
                              </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Cek Harga Order</h4>
                                  </div>
                                  <div class="modal-body">
                                    Total Harga Dari Order Anda Sebagai Berikut : 
                                    </p>
                                    Sayur: 
                                    <br />
                                    Buah : Total
                                    <br />
                                    Plastik : Total
                                    <p><p>
                                    Total Harga :
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            @endif
                            <!-- My Account End -->
                            
                            <div class="seperator-3d-dark top30 bottom30"></div>
                            
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
    @include('sweet::alert')
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif

  </body>
</html>