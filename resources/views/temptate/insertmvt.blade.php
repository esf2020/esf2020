<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<!-- font -->
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<body class="hold-transition sidebar-mini">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- en nav1-->
   <!-- Main Sidebar sidebar-dark-primary elevation-4 -->
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
                <a href="#" class="nav-link active">
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
<div class="row mt-2 ml-2">

  <div class="content-wrapper col-md-8">

    <form action="{{ url('home/listesmvt')}}" method="post">
        {{csrf_field()}}
          <div class="card card-warning ">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-plus-square"></i>
                    <b>Insertion Mouvement : </b></h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group ">
                      <label for="exampleInputBorder">Date  de mvt : </label>
                      <input type="date" name="datemvt" class="form-control form-control-border" id="exampleInputBorder" >
                      @if ($errors->get('datemvt') )
                      @foreach ( $errors->get('datemvt') as $message )
                       <h5 class="alert-default-danger">{{ $message }}</h5>
                      @endforeach
                      @endif
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputBorderWidth2">Type de Mouvement :</label>
                      <select name="typemvt" value="{{ old('typemvt')}}" class="custom-select form-control form-control-border border-width-2" id="exampleSelectBorder">
                        <option selected disabled>choisir une Categorie </option>
                        <option value="perception">Perception</option>
                        <option value="reparation">Reparation</option>
                      </select>
                        @if ($errors->get('typemvt') )
                          @foreach ( $errors->get('typemvt') as $message )
                          <h5 class="alert-default-danger">{{ $message }}</h5>
                          @endforeach
                        @endif
                    </div>

                    <div class="form-group ">
                      <label for="exampleInputRounded0">Organe : </label>
                    <input  type="text" name="organe" value="{{ old('organe')}}" class="form-control form-control-border border-width-2" id="exampleInputRounded0" placeholder="Organe/Unites/Bureau">
                        @if ($errors->get('organe') )
                        @foreach ( $errors->get('organe') as $message )
                          <h5 class="alert-default-danger">{{ $message }}</h5>
                        @endforeach
                        @endif

                    </div>
                    <div class="form-group">
                      <label for="exampleInputRounded0">Responsable : </label>
                      <input type="text" name="responsable" value="{{ old('responsable')}}" class="form-control form-control-border border-width-2" id="exampleInputRounded0" min="1" placeholder="Responsable ">
                      @if ($errors->get('responsable') )
                      @foreach ( $errors->get('responsable') as $message )
                       <h5 class="alert-default-danger">{{ $message }}</h5>
                      @endforeach
                      @endif
                    </div>
                    <button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
                      Sauvgarder</button>
                      <a type="buttont" href="{{ url('home/listesmvt')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
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
