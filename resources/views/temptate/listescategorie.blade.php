<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
   <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
   <title>Listes Categorie</title>

 <body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')

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
                                                  <i class="fas fa-plus-circle"></i> Ajouter une categorie
                                                </a>
												<table class="table table-hover table-head-fixed text-nowrap mt-2 mb-2">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nom categorie</th>

														</tr>
													</thead>
													<tbody>
													@foreach ($categ as $categs )
														<tr>
														    <td>{{ $categs->categorie_id }}</td>
															<td>{{ $categs->lib_categ }}</td>

														</tr>
													@endforeach
													</tbody>
												</table><tr>
                                                    <td colspan="6">
                                                        {!! $categ->links('pagination::bootstrap-4') !!}
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
