<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
 <body class="hold-transition sidebar-mini">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <b>Details des mouvements</b>
        </ul>

        <!-- Right navbar links -->

      </nav>
      <!-- en nav1-->
      <!-- Main Sidebar sidebar-dark-primary elevation-4 -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">         <!-- Sidebar -->
        <div class="sidebar">
        <!-- SidebarSearch Form -->
            <div class="form-inline mt-2">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                  </div>
                </div>
            </div>
          <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item">
                  <a href="{{url('home/homechart')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Page d'accueil </p>
                  </a>

                  </li>
                  <li class="nav-item">
                  <a href="{{url('home/listesmat')}}" class="nav-link ">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Liste materiels</p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="{{url('home/insertion_mat')}}" class="nav-link">
                    <i class="nav-icon fas fa-plus"></i>
                    <p>
                    Insertion Materiels
                    </p>
                  </a>

                  </li>
                  <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-list-ol"></i>
                    <p>
                    Listes Mouvement
                    </p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="{{url('home/insertmvt')}}" class="nav-link">
                    <i class="nav-icon fas fa-plus-square"></i>
                    <p>
                    Insertion MVT

                    </p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="{{url('home/glob')}}" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>Details MVT</p>
                  </a>
                  </li>
                <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                  <a href="../calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>Calendar</p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="../gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                    Gallery
                    </p>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>  Search </p>
                  </a>
                  </li>
              </ul>
            </nav>
        </div>
      </aside>
   <!--menu  -->
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
