<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
 <body class="hold-transition sidebar-mini">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
      <div class="card col-md-12 text-center">
          <h3><b>Details mouvement</b></h3>
      </div>

  </nav>
  <!-- en nav1-->
   <!-- Main Sidebar sidebar-dark-primary elevation-4 -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4"> <!-- Sidebar -->
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
                <a href="{{url('home/insertion_mat')}}" class="nav-link ">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>
                  Insertion Materiels
                  </p>
                </a>

                </li>
                <li class="nav-item">
                <a href="{{url('home/listesmvt')}}" class="nav-link">
                  <i class="nav-icon fas fa-list-ol"></i>
                  <p>
                  Listes Mouvement
                  </p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{url('home/listesmvt')}}" class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>
                  Insertion MVT

                  </p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>Details mvt</p>
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
						<div class="card card-warning mt-2">
									  <div class="card-header">
										 <h3 class="card-title"><i class="fa fa-address-card"></i><b> Details Materiels</b></h3>
									  </div>
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<div class="card">

											<!-- /.card-header -->
											<div class="card-body table-responsive p-0" style="height: 300px;">
												<table class="table table-head-fixed text-nowrap">
													<thead>
														<tr>
															<th>N° Serie</th>
															<th>date fin</th>
															<th>ID_Mvt</th>
															<th>ID_Mat</th>
														</tr>
												    </thead>
													<tbody>
														@foreach ( $dets as $det )
													      <tr>
														      <td>{{$det->nserie}}</td>
															  <td>{{$det->dtefin}}</td>
															  <td>{{$det->mvt_id}}</td>
															  <td>{{$det->materiel_id}}</td>
													      </tr>
														@endforeach
													</tbody>
												</table>
                                                <tr>
                                                    <td colspan="4">
                                                       {!! $dets->links('pagination::bootstrap-4') !!}
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
				</div>
				<!-- /.row -->
			</div>
		   <!-- /.container-fluid -->
       <div class="container-fluid">
				<div class="row">
					 <!-- left column -->

				</div>
				<!-- /.row -->
			</div>
		</section> <!-- /.content -->
  </div>

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
