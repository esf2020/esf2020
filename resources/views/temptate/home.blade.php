
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{url('links/chart_links.css')}}">

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <div class="row col-md-12">

        <div class="col-md-3">
                <nav class="main-header navbar navbar-expand navbar-dark">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
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
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                    </ul>
                </nav>
                <aside class="main-sidebar sidebar-dark-primary elevation-4">         <!-- Sidebar -->
                    <div class="sidebar">

                       <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          <li class="nav-item">
                          <a href="{{url('home/index')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Page d'accueil </p>
                          </a>

                          </li>
                          <li class="nav-item">
                          <a href="{{url('home/listesmat')}}" class="nav-link ">
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
        </div>
        <div class="col-md-9">
                     <div class="content-header mt-5">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Dashboard v2</h1>
                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>


                    <section class="content">
                        <div class="container-fluid">
                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cogs"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text"><b>Qte_MAT Tot</b></span>
                                        <span class="info-box-number">
                                        {{ $totalqte }}
                                            <small>Article</small>
                                        </span>
                                        <span class="info-box-text">
                                            <a href="{{url('home/listesmat')}}"><b>Show more</b></a>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                    <div class="info-box-content">
                                    <span class="info-box-text"><b>Mats disponible</b></span>
                                    <span class="info-box-number">
                                       {{$qtedisponible}}
                                        <small>Article </small>
                                    </span>
                                    <span class="info-box-text">
                                        <a href="{{url('home/glob')}}"><b>Show more</b></a>
                                    </span>

                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fas fa-recycle"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text"><b>MVT Disponible</b></span>
                                        <span class="info-box-number">
                                            {{ $countmvt }}
                                            <small>Mouvements</small>
                                        </span>
                                        <span class="info-box-text">
                                            <a href="{{url('home/listesmvt')}}"><b>Show more</b></a>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                                    <div class="info-box-content">
                                    <span class="info-box-text"><b>Details MVTS</b></span>
                                    <span class="info-box-number">
                                        {{ $countdet }}
                                        <small>Article en mvt </small>
                                    </span>
                                    <span class="info-box-text">
                                        <a href="{{url('home/glob')}}"><b>Show more</b></a>
                                    </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- qte par categ -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="card-title">Quantites de materiels par categorie:</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-12 col-sm-6 col-md-3">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text"><b>Pc Portable</b></span>
                                                            <span class="info-box-number">
                                                            {{ $pc }}
                                                                <small>Article</small>
                                                            </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                <!-- /.info-box -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-12 col-sm-6 col-md-3">
                                                    <div class="info-box mb-3">
                                                        <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fas fa-desktop"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text"><b>Ordinateur (U.C)</b></span>
                                                            <span class="info-box-number">
                                                                {{ $ord }}
                                                                <small>Article</small>
                                                            </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>

                                                <div class="col-12 col-sm-6 col-md-3">
                                                    <div class="info-box mb-3">
                                                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-server"></i></span>
                                                        <div class="info-box-content">
                                                        <span class="info-box-text"><b>Serveur</b></span>
                                                        <span class="info-box-number">
                                                            {{ $serveur }}
                                                            <small>Article</small>
                                                        </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-12 col-sm-6 col-md-3">
                                                    <div class="info-box mb-3">
                                                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sitemap"></i></span>
                                                        <div class="info-box-content">
                                                        <span class="info-box-text"><b>Switch reseau</b></span>
                                                        <span class="info-box-number">
                                                            <small>Article</small>
                                                        </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>
                                            <!-- /.col -->
                                        </div>
                                        <!--part2 -->
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-3">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-light elevation-1"><i class="fab fa-intercom"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text"><b>Routeur Wi-Fi</b></span>
                                                        <span class="info-box-number">
                                                            <small>Routeur</small>
                                                        </span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                            <!-- /.info-box -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 col-sm-6 col-md-3">
                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-secondary elevation-1"><i class="far fa-keyboard"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text"><b>Clavier</b></span>
                                                        <span class="info-box-number">
                                                                {{$clavier}}
                                                            <small>clavier</small>
                                                        </span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-3">
                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wifi"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text"><b>Modem 4G</b></span>
                                                        <span class="info-box-number">

                                                        <small>Modem</small>
                                                    </span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 col-sm-6 col-md-3">
                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-gradient-gray-dark elevation-1"><i class="fas fa-mouse"></i></span>
                                                    <div class="info-box-content">
                                                    <span class="info-box-text">Sourie</span>
                                                    <span class="info-box-number">
                                                        <small>Sourie </small>
                                                    </span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                 <!-- /.info-box -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                    </div>
                                    <!-- ./card-body -->
                                    <div class="card-footer">
                                        <script type="text/javascript">
                                            var ladate=new Date()
                                            document.write("Nous sommes le : ");
                                            document.write(ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear())
                                            </script>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <div class="col-md-8">
                               <!-- MAP & BOX PANE -->

                                <!-- /.card -->
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div><!--/. container-fluid -->
                    </section>
        </div>
        <!-- Content Header (Page header) -->



    </div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<script src="{{url('dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
