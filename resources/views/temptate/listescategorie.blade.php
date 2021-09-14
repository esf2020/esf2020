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

    <aside class="main-sidebar sidebar-dark-primary elevation-4">         <!-- Sidebar -->
         <p class="brand-link">
            <img src="{{ url('dist/img/admin.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><b>USER : {{ Auth::user()->name }}</b></span>
          </p>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item" disabled>
                        <div class="card-header bg-warning">
                        <b><i class="nav-icon fas fa-user-circle"></i>
                          Gestion MAT</b>
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

  <div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-6"><!-- general form elements -->
						<div class="card card-success mt-2">
								<div class="row">
									<div class="col-12">
										<div class="card">
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
											<div class="card-body mb-3" style="height: 410px;">
                                                <h3 class="class="display-2">
                                                    <b class="text-primary">Listes des  categories existes: </b>
                                                </h3>
                                                <a href="{{url('home/insertion_categ')}}" class="btn btn-outline-success">
                                                    ADD Categorie <i class="fas fa-plus-circle"></i>
                                                </a>
												<table class="table table-hover table-head-fixed text-nowrap mt-2 mb-2">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nom categorie</th>
                                                            <th>Action</th>
														</tr>
													</thead>
													<tbody>
													@foreach ($categorie as $categ )
														<tr>
														    <td>{{ $categ->categorie_id }}</td>
															<td>{{ $categ->lib_categ }}</td>
															<td>
                                                                <a type="button" href="" class="btn btn-outline-primary"><i class="fas fa-user-edit"></i></a>
                                                            </td>
														</tr>
													@endforeach
													</tbody>
												</table><tr>
                                                    <td colspan="6">
                                                        {!! $categorie->links('pagination::bootstrap-4') !!}
                                                     </td>

											</div>
											<!-- /.card-body table-responsive p-0 -->
										</div>
									</div>
								</div>

						</div>
					</div>

                    <div class="col-md-6 mt-5">
                        @if (session()->has('error_msg'))
                           <div class="alert alert-danger">
                               <p class="display-4"><b>{{session()->get('error_msg')}}</b></p>
                           </div>
                        @endif
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
