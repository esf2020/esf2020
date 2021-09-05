<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<!-- font -->
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
                <a href="{{url('home/listesmat')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Liste materiels</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{url('home/insertion_mat')}}" class="nav-link active">
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
	<div class="row  mt-lg-5 pl-lg-2">

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
						  <input type="text" name="designation" value="{{ old('designation') }}" class="form-control form-control-border" id="exampleInputBorder" placeholder="Designation de Materiel ">

						  @if ($errors->get('designation') )
                            @foreach ( $errors->get('designation') as $message )
                                <h5 class="alert-default-danger">{{ $message }}</h5>
                            @endforeach
						  @endif
						</div>

                        <div class="form-group">
                            <label for="browser"> Marque Materiel:</label>
                            <input list="browsers" name="marque" placeholder="Marque de materiel" class="form-control form-control-border"   id="browser">
                            <datalist id="browsers">
                                <option value="Hp">
                                <option value="Acer">
                                <option value="Asus">
                                <option value="Mac">
                                <option value="Dell">
                            </datalist>
                            @if ($errors->get('marque') )
                            @foreach ( $errors->get('marque') as $message )
                              <h5 class="alert-default-danger">{{ $message }}</h5>
                            @endforeach
                           @endif
                        </div>
						<div class="form-group ">
						  <label for="exampleInputRounded0">Quantites de materiel : </label>
						  <input type="number" name="quantites" value="{{ old('quantites') }}" class="form-control form-control-border border-width-2" id="exampleInputRounded0" min="1" placeholder="Quantites de materiel">
						  @if ($errors->get('quantites') )
						  @foreach ( $errors->get('quantites') as $message )
							<h5 class="alert-default-danger">{{ $message }}</h5>
						  @endforeach
						 @endif
						</div>
						<div class="form-group">
						  <label for="exampleInputRounded0">Observation sur ce materiel : </label>
						  <input  type="text" name="observation" value="{{ old('observation') }}" class="form-control form-control-border border-width-2" id="exampleInputRounded0" placeholder="Observation sur ce materiel">
						  @if ($errors->get('observation') )
						  @foreach ( $errors->get('observation') as $message )
							<h5 class="alert-default-danger">{{ $message }}</h5>
						  @endforeach
						@endif
						</div>

						<div class="form-group ">

							<label for="exampleSelectBorder">Categorie de materiel :</label>
							<select name="categorie_id" value="{{ old('categorie_id') }}" class="custom-select form-control form-control-border border-width-2" id="exampleSelectBorder">
								<option selected disabled>choisir une Categorie </option>
								@foreach ($categ as $cat )
									<option value="{{$cat->categorie_id}}">{{$cat->lib_categ }}</option>
								@endforeach

							</select>
							@if ($errors->get('categorie_id') )
							@foreach ( $errors->get('categorie_id') as $message )
								<h5 class="alert-default-danger">{{ $message }}</h5>
							@endforeach
							@endif
						</div>
						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
						  Sauvgarder</button>
						  <a type="buttont" href="{{ url('home/listesmat')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
						  Annuler</a>
					  </div>
				</div>
			</form>
		</div>
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
