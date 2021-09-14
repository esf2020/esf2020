<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>

 <body class="hold-transition sidebar-mini layout-fixed">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('home/index')}}" class="nav-link">Home</a>
            </li>
        </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4 mt-lg-5">         <!-- Sidebar -->
    <p class="brand-link">
        <img src="{{ url('dist/img/admin.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>USER : {{ Auth::user()->name }}</b></span>
      </p>
    <div class="sidebar mt-lg-5">
        <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" disabled>
                    <div class="card-header bg-warning">
                    <b><i class="nav-icon fas fa-user-circle"></i>
                     Gestion MAt</b>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{url('home/index')}}" class="nav-link">
                      <i class="nav-icon fas fa-chart-pie"></i>
                      <p>Page d'accueil </p>
                    </a>
                </li>
                <!--========= Data of tables ==================================== -->
                    <li class="nav-item">
                        <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables DATA
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/listesmat')}}" class="nav-link">
                            <i class="far far fa-check-circle"></i>
                            <p>Materiels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/listesmvt')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Mouvement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/listescateg')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/glob')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Det MVT</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                <!--========= end Data of tables ==================================== -->
                <!--========= Insertion  Data on DB ==================================== -->
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Insertion DATA
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/insertion_mat')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                            <p>Insert Mat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertmvt')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-square"></i>
                            <p>Insert Mvt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertion_categ')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>ADD Categ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--========= end Data of tables ==================================== -->
                <!--========= Aures paramètres ==================================== -->
                  <li class="nav-header"><i class="fas fa-bell"></i><b> Autres paramètres </b></li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>Calendar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                          Gallery
                          </p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <b><i class="fas fa-user-lock"></i>  {{ __('Logout') }}</b>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
            </ul>
        </nav>
    </div>
</aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-success mt-2">
									  <div class="card-header">
                    <b>GESTION MATERIELS</b>
								    	<a type="button" class="btn btn-info float-right">Ajouter un mouvement</a>
									  </div>
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-header">
													  <h3 class="card-title"><i class="fa fas fa-server"></i>
                              Liste Global des mouvements </h3>
													  <div class="card-tools">
                              <div class="input-group input-group-md" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                              </div>
													  </div>
											</div>
											<!-- /.card-header -->
											<div class="card-body table-responsive p-0" style="height: 300px;">
												<table class="table table-head-fixed text-nowrap">
													<thead>
														<tr>
															<th>ID</th>
															<th>Date MVT</th>
															<th>Type MVT</th>
															<th>Organes</th>
															<th>Responsable</th>
                                                            <th>Action</th>
														</tr>
													</thead>
													<tbody>
                                                @foreach ($dets as $det )
														<tr>
														  <td>{{ $det->nserie }}</td>
															<td>{{ $det->dtefin }}</td>
															<td>{{ $det->mvt_id }}</td>
															<td>{{ $det->materiel_id }}</td>

															<td>
                                                        <a type="button" class="btn btn-outline-primary"><i class="fas fa-user-edit"></i></a>
                                                        <a type="button" href="" class="btn btn-outline-dark"><i class="fas fa-plus-circle" aria-hidden="true"></i></a>
															</td>
														</tr>
                                                  @endforeach
													</tbody>
												</table>
											</div>
											<!-- /.card-body table-responsive p-0 -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		   <!-- /.container-fluid -->

		</section> <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 =AdminLTE.io.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->

      <!--  js link  -->
      <!-- jQuery -->
      <script src="{{url('plugins/jquery.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{url('plugins/js/bootstrap.bundle.min.js')}}"></script>
      <!-- bs-custom-file-input -->
      <script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{url('plugins/adminlte.min.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{url('plugins/demo.js')}}"></script>
      <!-- Page specific script -->
      <script>
      $(function () {
        bsCustomFileInput.init();
      });
      </script>
</body>
</html>
