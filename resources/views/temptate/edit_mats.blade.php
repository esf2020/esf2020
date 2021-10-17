    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
    <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
    <title>Modification MAT</title>
<body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.header')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-lg-5">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-warning mt-2">
									  <div class="card-header">
										 <h3 class="card-title"><i class="fa fa-address-card"></i><b> Mis-a-Jour Materiels Informatique</b></h3>
									  </div>
							<div class="card-body">
								<div class="row">
										<div class="col-12">
									<div class="card">
										<div class="card-body">
											<div class="container ">
												<form action="{{ url('/home/editmat/'.$mat->materiel_id) }}" method="post" class="row g-3">
												  {{csrf_field()}}
												  <input type="hidden" name="_method" value="PUT">
													<div class="col-md-6">
														<label for="inputDesignation" class="form-label">Designation</label>
														<input type="text" name="designation" value="{{$mat->designation}}" id="inputDesignation" class="@error('designation') is-invalid @enderror form-control">
                                                        @error('designation')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-md-6">
														<label for="inputMarque" class="form-label">Marque</label>
														<input type="text" name="marque" value="{{$mat->marque}}" class="@error('marque') is-invalid @enderror form-control" id="inputMarque">
                                                        @error('marque')
                                                          <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-12">
														<label for="inputQuantites" class="form-label">Quantites</label>
														<input type="number" name="quantites" value="{{$mat->quantites}}" class="@error('quantites') is-invalid @enderror form-control" id="inputQuantites" min="1" max="100"  >
                                                        @error('quantites')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-12">
														<label for="inputObservation" class="form-label">Observation</label>
														<input type="text" name="observation" value="{{$mat->observation}}" id="inputObservation" class="@error('observation') is-invalid @enderror form-control"  >
                                                        @error('observation')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
													<div class="col-12">
														<label for="categorie_id" class="form-label">Categories</label>
														<select name="categorie_id" id="categorie_id"  class="@error('categorie_id') is-invalid @enderror form-control">
															@foreach($categ as $categorie)
															<option value="{{$categorie->categorie_id }}" {{ $mat->categorie_id == $categorie->categorie_id ? 'selected' : '' }}>
															{{$categorie->lib_categ}}</option>
															@endforeach
														</select>
                                                        @error('categorie_id')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                     <div class="col-md-6">
                                                        <button type="submit" class="btn btn-warning"> <i class="fa fas fa-sync-alt" ></i>Mis a jour</button>
                                                      <a type="button" href="{{url('home/listesmat')}}" class="btn btn-danger">
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
