<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
<title>Ajouter Categorie</title>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')
    
    <div class="content-wrapper col-md-8">
		<form action="{{ url('home/listescateg')}}" method="post">
			{{csrf_field()}}
			  <div class="card card-warning mt-4">
					  <div class="card-header">
						<h3 class="card-title"><i class="fa fa-plus-square"></i>
						<b>Add Cat: </b></h3>

					  </div>
					  <!-- /.card-header -->
					  <div class="card-body">
						<div class="form-group ">
						  <label for="exampleInputBorder">Nom Categorie: </label>
						  <input type="text" name="categorie" class="form-control form-control-border" id="exampleInputBorder" >
							@if ($errors->get('categorie') )
							@foreach ( $errors->get('categorie') as $message )
							<h5 class="alert-default-danger">{{ $message }}</h5>
							@endforeach
							@endif
						</div>

						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
						  Sauvgarder</button>
						  <a type="buttont" href="{{ url('home/listescateg')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
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
