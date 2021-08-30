<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>

 <body class="hold-transition sidebar-mini">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <h3 class="card-title">
                <i class="fas fa-laptop"></i><b> Gestion Matériels Informatiques</b>
            </h3>
        </ul>
      </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
                                        <b><i class="fa fas fa-server"></i> Liste global des mouvements</b>
								    	<a type="button" href="{{url('home/insertmvt')}}" class="btn btn-info float-right">Ajouter un mouvement</a>
									  </div>

								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body" style="height: 450px;">
												<table class="table table-hover table-head-fixed text-nowrap">
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
													@foreach ($mvts as $mvt )
														<tr>
														    <td>{{ $mvt->mvt_id }}</td>
															<td>{{ $mvt->date_mvt }}</td>
															<td>{{ $mvt->type_mvt }}</td>
															<td>{{ $mvt->organe}}</td>
															<td>{{ $mvt->libresp }}</td>
															<td>
                                                                <a type="button" href="{{url('home/show')}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                                                <a type="button" href="{{ url('home/editmvt/'.$mvt->mvt_id)}}" class="btn btn-outline-primary"><i class="fas fa-user-edit"></i></a>
                                                                <a type="button" href="{{url('home/adddetails/'.$mvt->mvt_id)}}" class="btn btn-outline-dark"><i class="fas fa-plus-circle" aria-hidden="true"></i></a>
                                                            </td>

														</tr>
													@endforeach
													</tbody>

												</table><tr>
                                                    <td colspan="6">
                                                       {!! $mvts->links('pagination::bootstrap-4') !!}
                                                        </td>
                                                    </tr>
											</div>
											<!-- /.card-body table-responsive p-0 -->
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
