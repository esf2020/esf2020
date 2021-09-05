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
            <h3 class="card-title">
                <i class="fas fa-laptop"></i><b> Gestion Matériels Informatiques</b>
            </h3>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">         <!-- Sidebar -->
		  <div class="sidebar">

		     <nav class="mt-2">
		      	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                <a href="{{url('home/index')}}" class="nav-link">
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
  <div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-primary mt-2">

                                        <div class="container mt-2">
                                            <a type="button" href="{{ url('home/insertion_mat') }}" class="btn btn-warning">
                                                Ajouter un materiel <i class="fas fa-plus-square"></i>
                                            </a>
                                        </div>
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<div class="card">
                                                <div class="card-header">
                                                        <h3 class="card-title"><i class="fa fas fa-server"></i>
                                                    <b>Liste Global de materiels Informatique</b></h3>

                                                </div>
											<!-- /.card-header -->
											<div class="card-body " style="height: 400px;">
                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
												<table class="table table-hover table-head-fixed text-nowrap">
													<thead>
														<tr>
															<th>ID</th>
															<th>Designation</th>
															<th>Marque</th>
															<th>Quantites</th>
                                                            <th>Observation</th>
															<th>Categorie</th>
                                                            <th>Action</th>
														</tr>
													</thead>
													<tbody>
                                                   @foreach ($mats as $mat )
														<tr>
														  <td>{{ $mat->materiel_id }}</td>
															<td>{{ $mat->designation }}</td>
															<td>{{ $mat->marque }}</td>
															<td>{{ $mat->quantites}}</td>
															<td>{{ $mat->observation }}</td>
                                                            <td>{{ $mat->categorie_id }}</td>
															<td>
                                                             <a type="button" href="{{ url('home/editmat/'.$mat->materiel_id) }}" class="btn btn-outline-primary">Editer</a>
															</td>
														</tr>
                                                    @endforeach
													</tbody>
												</table>
                                                <tr>
                                                    <td colspan="6">
                                                   {!! $mats->links('pagination::bootstrap-4') !!}
                                                    </td>
                                                </tr>
							                </div>
											<!-- /.card-body table-responsive p-0 -->
										</div>

									</div>
                                    <div class="col-12">
                                        <div class="card">
                                          <div class="card-header">
                                            <h3 class="card-title"><b>Status des Materiels</b></h3>
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                              <thead>
                                              <tr role="row">
                                                <th>Marque Mat</th>
                                                <th>Qte total</th>
                                                <th>Qte disponible</th>
                                                <th>Qte mvt</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <tr class="odd">
                                                <td>HP</td>
                                                <td>20</td>
                                                <td>15</td>

                                              </tr>
                                            </tbody>

                                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                          </div>
                                          <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
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
