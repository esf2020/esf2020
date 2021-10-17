    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>

  <script src="{{ asset('cdn/jquery.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{url('cdn/jquery.dataTables.css')}}">
  <script type="text/javascript" charset="utf8" src="{{url('cdn/jquery.dataTables.js')}}"></script>
   <!-- links tables jquery -->
   <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
   <title>Listes Mouvement</title>

 <body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
						<div class="card card-success col-md-12 mt-2">
									  <div class="row pt-2 pl-2">
                                          <div class="col-sm-6">
                                           <h3> <i class="fa fas fa-server"></i>
                                            <b>Liste globale des mouvements</b>
                                           </h3>
                                          </div>
                                          <div class="col-sm-3">

                                            <a type="button" href="{{url('home/insertmvt')}}" class="btn btn-primary float-right">
                                                <i class="fas fa-cart-plus"></i> Ajouter un mouvement*
                                            </a>
                                          </div>

									  </div>

								<div class="row">
										<div class="card col-12">
                                            @if(session()->has('message'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="fas fa-check-double"></i><B>{{ session()->get('message') }}</B>
                                            </div>
                                            @endif
											<div class="card-body" style="height: 650px;">
												<table class="table table-hover table-head-fixed text-nowrap mt-3" id="table_id">
													<thead>
														<tr>
															<th>ID</th>
															<th>Date MVT</th>
															<th>Type MVT</th>
															<th>Organes</th>
															<th>Responsable</th>
                                                            <th>Fin MVT</th>
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
                                                            <td>{{ $mvt->datefin }}</td>
															<td>
                                                                <a type="button" href="{{url('home/listesmvt/'.$mvt->mvt_id) }}" class="btn btn-danger delete-confirm"><i class="fas fa-trash-alt"></i></a>
                                                                <a type="button" href="{{ url('home/editmvt/'.$mvt->mvt_id)}}" class="btn btn-outline-primary"><i class="fas fa-user-edit"></i></a>
                                                                <a type="button" href="{{url('home/adddetails/'.$mvt->mvt_id)}}" class="btn btn-outline-dark"><i class="fas fa-plus-circle" aria-hidden="true"></i></a>
                                                            </td>

														</tr>

                                                        @endforeach
													</tbody>

												</table><tr>

											</div>
											<!-- /.card-body table-responsive p-0 -->
										</div>
								</div>

						</div>

			</div>
		   <!-- /.container-fluid -->

		</section> <!-- /.content -->
  </div>
  <script src="{{url('dist/js/sweetalert.min.js')}}"></script>
    <script>
        $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure ?',
                text: 'Cet enregistrement & détails seront définitivement supprimés',
                icon: 'info',
                buttons: ["Cancel ", " Yes 👍!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>


    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
            } );
    </script>

      <!-- jQuery -->
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
