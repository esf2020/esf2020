<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<!-- font -->
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<body class="hold-transition sidebar-mini layout-fixed">
    <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
    <title>Ajouter Courrier</title>

    @include('layouts.header')

		<div class="content-wrapper col-md-8 mt-3">
			<form action="{{ url('home/Arrivee')}}" method="post">
				{{csrf_field()}}
				<div class="card card-primary ">
					  <div class="card-header">
						<h3 class="card-title"><i class="fa fas fa-folder-plus"></i>
						<strong>Ajouter un courrier (Arrivée) : </strong> </h3>
					  </div>
					  <!-- /.card-header -->
					  <div class="card-body">
                        <div class="row form-group col-md-12">
                            <div class="col-md-6">
                                <label for="exampleInputBorder">N° d'ordre : </label>
                                <input type="number" name="nordre" value="{{ old('nordre') }}"  class="@error('nordre') is-invalid @enderror form-control form-control-border" id="exampleInputBorder" placeholder="Numero d'ordre ">
                                @error('nordre')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputBorder">Date creation : </label>
                                <input type="date" name="datea" value="{{ old('datea') }}" class="@error('datea') is-invalid @enderror form-control form-control-border" id="exampleInputBorder" placeholder="Date d'arrivee ">
                                @error('datea')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
						<div class="form-group ">
						  <label for="exampleInputBorder">Reference de courrier : </label>
						  <input type="text" name="reference" value="{{ old('reference') }}" class="@error('reference') is-invalid @enderror form-control form-control-border" id="exampleInputBorder" placeholder="122/EMG/INSPTRANS N 12/DINFO">
                          @error('reference')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>

						<div class="row col-md-12 form-group ">
                           <div class="col-md-4">
                            <label for="exampleInputRounded0">Source  : </label>
                            <input type="text" name="source" value="{{ old('source') }}" class="@error('source') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0"  placeholder="Source  de courrier">
                            @error('source')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                           <div class="col-md-4">
                            <label for="exampleInputRounded0">Type de courrier : </label>
                            <input type="text" name="type" value="{{old('type')}}" class="@error('type') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0"  placeholder="Type de courrier">
                            @error('type')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                           <div class="col-md-4">
                            <label for="exampleInputRounded0">Date de courrier : </label>
                            <input type="date" name="datemsg" value="{{old('datemsg')}}" class="@error('datemsg') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0" placeholder="Type de courrier">
                            @error('datemsg')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>


                        <div class="form-floating mb-2">
                            <label for="floatingTextarea2">Objet :</label>
                            <textarea name="objet" class="@error('objet') is-invalid @enderror form-control" placeholder="Objet " id="floatingTextarea2" style="height: 100px"></textarea>
                            @error('objet')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
						  Sauvgarder</button>
						  <a type="buttont" href="{{ url('home/Arrivee')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
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
