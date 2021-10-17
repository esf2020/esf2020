    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
    <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
    <title>Modification MVT</title>
<body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.header')
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
														<input type="date" name="datemvt" value="{{$mvt->date_mvt}}" id="inputDesignation" class="@error('datemvt') is-invalid @enderror form-control">
                                                        @error('datemvt')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-md-6">
														<label for="inputMarque" class="form-label">Type de mouvements</label>
														<input type="text" name="typemvt" value="{{$mvt->type_mvt}}" class="@error('typemvt') is-invalid @enderror form-control" id="inputMarque">
                                                        @error('typemvt')
                                                         <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-12">
														<label for="inputQuantites" class="form-label">Organe</label>
														<input type="text" name="organe" value="{{$mvt->organe}}" id="inputQuantites"  class="@error('organe') is-invalid @enderror form-control" >
                                                        @error('organe')
                                                        <p class="text-danger">{{ $message }}</p>
                                                       @enderror
                                                    </div>
													<div class="col-12">
														<label for="inputObservation" class="form-label">Responsable</label>
														<input type="text" name="responsable" value="{{$mvt->libresp}}" id="inputObservation" class="@error('responsable') is-invalid @enderror form-control"  >
                                                        @error('responsable')
                                                        <p class="text-danger">{{ $message }}</p>
                                                       @enderror
                                                    </div>
                                                    <div class="col-12">
														<label for="inputObservation" class="form-label">Date fin mvt</label>
														<input type="date" name="datefin" value="{{$mvt->datefin}}" id="inputObservation" class="@error('datefin') is-invalid @enderror form-control"  >
                                                        @error('datefin')
                                                        <p class="text-danger">{{ $message }}</p>
                                                       @enderror
                                                    </div>

                                                     <div class="col-md-6">
                                                        <button type="submit" class="btn btn-warning"> <i class="fa fas fa-sync-alt" ></i>Mis a jour</button>
                                                      <a type="button" href="{{url('home/listesmvt')}}" class="btn btn-danger">
                                                        Annuler <i class="fa fas fa-window-close"></i></a>
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
