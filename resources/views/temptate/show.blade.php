<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
 <body class="hold-transition sidebar-mini">
    <!--begin of navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <h3 class="card-title">
                    <i class="fas fa-laptop"></i><b> Gestion Matériels Informatiques</b>
                </h3>
            </ul>
        </nav>
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
                            <a href="{{url('home/listesmat')}}" class="nav-link active">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Liste materiels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                Insertions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p><b>Insertion Materiel</b></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p><b>Insertion Mouvement</b></p>
                                    </a>
                                </li>

                            </ul>
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
                        <a href="{{url('home/insertmvt')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>
                        <b>Insertions</b>
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

                    </ul>
                </nav>
            </div>
        </aside>
    <!--enf of navbar  -->
    
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"><!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12"><!-- general form elements -->
                                <div class="card card-danger mt-2">
                                        <h3><i class="fa fas fa-server"></i>
                                        <b>Affichage details Materiels</b></h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="card card-primary card-outline direct-chat direct-chat-primary">
                              <div class="card-header">
                                <h3 class="card-title">Primary</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                </div>
                                <!-- /.card-tools -->
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body" style="height: 400px;">

                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                    </div>

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
