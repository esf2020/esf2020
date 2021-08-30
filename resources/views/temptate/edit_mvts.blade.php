    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<body class="hold-transition sidebar-mini">

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
                <a href="{{url('home/listesmat')}}" class="nav-link active">
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
    <div class="content-wrapper pt-lg-5">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-warning mt-2">
									  <div class="card-header">
										 <h3 class="card-title"><i class="fa fas fa-sync-alt"></i><b> Mis-a-Jour de mouvements</b></h3>
									  </div>
							<div class="card-body">
								<div class="row">
										<div class="col-12">
									<div class="card">
										<div class="card-body">
											<div class="container ">
												<form action="{{ url('/home/editmvt/'.$mvt->mvt_id) }}" method="post" class="row g-3">
												  {{csrf_field()}}
												  <input type="hidden" name="_method" value="PUT">
													<div class="col-md-6">
														<label for="inputDesignation" class="form-label">Date de mouvements</label>
														<input type="date" name="datemvt" value="{{$mvt->date_mvt}}" id="inputDesignation" class="form-control">
													</div>
													<div class="col-md-6">
														<label for="inputMarque" class="form-label">Type de mouvements</label>
														<input type="text" name="typemvt" value="{{$mvt->type_mvt}}" class="form-control" id="inputMarque">
													</div>
													<div class="col-12">
														<label for="inputQuantites" class="form-label">Organe</label>
														<input type="text" name="organe" value="{{$mvt->organe}}" id="inputQuantites"  class="form-control" >
													</div>
													<div class="col-12">
														<label for="inputObservation" class="form-label">Responsable</label>
														<input type="text" name="responsable" value="{{$mvt->libresp}}" id="inputObservation" class="form-control"  >
													</div>

                                                     <div class="col-md-6">
                                                        <button type="submit" class="btn btn-warning"> <i class="fa fas fa-sync-alt" ></i>Update</button>
                                                      <a type="button" href="{{url('home/listesmat')}}" class="btn btn-danger">
                                                        Cancel <i class="fa fas fa-window-close"></i></a>
                                                    </div>

												</form>
											</div>
										</div>
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

  </div>

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
