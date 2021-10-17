<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<!-- font -->
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<body class="hold-transition sidebar-mini layout-fixed">
    <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
    <title>Ajouter Materiels</title>

    @include('layouts.header')

		<div class="content-wrapper col-md-8">
			<form action="{{ url('home/listesmat')}}" method="post">
				{{csrf_field()}}
				<div class="card card-primary ">
					  <div class="card-header">
						<h3 class="card-title"><i class="fa fas fa-folder-plus"></i>
						Insertion Materiel : </h3>

					  </div>
					  <!-- /.card-header -->
					  <div class="card-body">
						<div class="form-group ">
						  <label for="exampleInputBorder">Designation de Materiel : </label>
						  <input type="text" name="designation" value="{{ old('designation') }}" class="@error('designation') is-invalid @enderror form-control form-control-border" id="exampleInputBorder" placeholder="Designation de Materiel ">
						  @error('designation')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
						</div>

                        <div class="form-group">
                            <label for="browser"> Marque Materiel:</label>
                            <input list="browsers" name="marque" placeholder="Marque de materiel" class="@error('marque') is-invalid @enderror form-control form-control-border"   id="browser">
                            <datalist id="browsers">
                                <option value="Hp">
                                <option value="Acer">
                                <option value="Asus">
                                <option value="Mac">
                                <option value="Dell">
                                <option value="IBM">
                                <option value="Zyxel">
                                <option value="Dell">
                                <option value="IBM">
                            </datalist>
                            @error('marque')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
						<div class="form-group ">
						  <label for="exampleInputRounded0">Quantites de materiel : </label>
						  <input type="number" name="quantites" value="{{ old('quantites') }}" class="@error('quantites') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0" min="1" placeholder="Quantites de materiel">
						    @error('quantites')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
						</div>
						<div class="form-group">
						  <label for="exampleInputRounded0">Observation sur ce materiel : </label>
						  <input  type="text" name="observation" value="{{ old('observation') }}" class="@error('observation') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0" placeholder="Observation sur ce materiel">
						   @error('observation')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
						</div>

						<div class="form-group ">

							<label for="exampleSelectBorder">Categorie de materiel :</label>
							<select name="categorie_id" value="{{ old('categorie_id') }}" class="@error('categorie_id') is-invalid @enderror custom-select form-control form-control-border border-width-2" id="exampleSelectBorder">
								<option selected disabled>choisir une Categorie </option>
								@foreach ($categ as $cat )
									<option value="{{$cat->categorie_id}}">{{$cat->lib_categ }}</option>
								@endforeach
							</select>
							@error('categorie_id')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
						</div>
						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
						  Sauvgarder</button>
						  <a type="buttont" href="{{ url('home/listesmat')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
						  Annuler</a>
					  </div>
				</div>
			</form>
		</div>

  <script src="{{url('plugins/jquery.min.js')}}"></script>
  <script src="{{url('plugins/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
  <script src="{{url('plugins/adminlte.min.js')}}"></script>
  <script src="{{url('plugins/demo.js')}}"></script>
  <script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
</body>
</html>
