<style>
    body{
        padding-top: 70px;
        overflow: hidden;
    }
    .loading-overlay{
        background: #222;
        color: #FFF;
        position: fixed;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 100%;
        z-index: 99999;
    }
   
.center {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #000;
}
.wave {
  width: 5px;
  height: 100px;
  background: linear-gradient(45deg, cyan, #fff);
  margin: 10px;
  animation: wave 1s linear infinite;
  border-radius: 20px;
}
.wave:nth-child(2) {
  animation-delay: 0.1s;
}
.wave:nth-child(3) {
  animation-delay: 0.2s;
}
.wave:nth-child(4) {
  animation-delay: 0.3s;
}
.wave:nth-child(5) {
  animation-delay: 0.4s;
}
.wave:nth-child(6) {
  animation-delay: 0.5s;
}
.wave:nth-child(7) {
  animation-delay: 0.6s;
}
.wave:nth-child(8) {
  animation-delay: 0.7s;
}
.wave:nth-child(9) {
  animation-delay: 0.8s;
}
.wave:nth-child(10) {
  animation-delay: 0.9s;
}

@keyframes wave {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}

</style>

<!--  links style-->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{url('links/chart_links.css')}}">
    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<!--  links style-->
<section class="loading-overlay">
    <div class="center">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
</section>
<!--  dinfo@gmail.com/DINFO@FAR -->
<body class="hold-transition dark-mode sidebar-mini" style="overflow: hidden;">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('home/index')}}" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4 ">         <!-- Sidebar -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item" disabled>
                      <div class="card-header bg-warning">
                      <b><i class="nav-icon fas fa-user-circle"></i>
                        {{ Auth::user()->name }}</b>
                      </div>
                  </li>
                  <li class="nav-item mt-3">
                        <a href="{{url('home/index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Page d'accueil </p>
                        </a>
                    </li>
                    <!--========= Data of tables ==================================== -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables DATA
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('home/listesmat')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                                <p>Materiels</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('home/listesmvt')}}" class="nav-link">
                                    <i class="far far fa-check-circle"></i>
                                <p>Mouvement</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('home/listescateg')}}" class="nav-link">
                                    <i class="far far fa-check-circle"></i>
                                <p>Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('home/glob')}}" class="nav-link">
                                    <i class="far far fa-check-circle"></i>
                                <p>Det MVT</p>
                                </a>
                            </li>
                            </ul>
                        </li>
                    <!--========= end Data of tables ==================================== -->
                    <!--========= Insertion  Data on DB ==================================== -->
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                Insertion DATA
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('home/insertion_mat')}}" class="nav-link">
                                    <i class="nav-icon fas fa-plus"></i>
                                <p>Insert Mat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('home/insertmvt')}}" class="nav-link">
                                    <i class="nav-icon fas fa-plus-square"></i>
                                <p>Insert Mvt</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('home/insertion_categ')}}" class="nav-link">
                                    <i class="nav-icon fas fa-plus-circle"></i>
                                <p>ADD Categ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--========= end Data of tables ==================================== -->
                    <!--========= Aures paramètres ==================================== -->
                    <li class="nav-header"><i class="fas fa-bell"></i><b> Autres paramètres </b></li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                  <i class="nav-icon far fa-calendar-alt"></i>
                                  <p>Calendar</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                  <i class="nav-icon far fa-image"></i>
                                  <p>
                                  Gallery
                                  </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                      <a class="nav-link" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                      <b><i class="fas fa-user-lock"></i>  {{ __('Logout') }}</b>
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </li>
                </ul>
            </nav>
        </div>
    </aside>


<div class="content-wrapper"><!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><!-- general form elements -->
                    <div class="card card-success mt-2">
                        <div class="content-header">
                      <div class="container-fluid">
                          <div class="row mb-2">
                              <div class="col-sm-6">
                                  <h1 class="m-0"><i class="fas fa-database"></i> Dashboard</h1>
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
                                  <span class="info-box-icon bg-info elevation-1"><i class="fab fa-battle-net"></i></span>

                                  <div class="info-box-content">
                                      <span class="info-box-text"><b>Total MAT</b></span>
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
                                                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-laptop"></i></span>
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
                                                      <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-laptop-house"></i></span>
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
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3">
                                              <div class="info-box mb-3">
                                                  <span class="info-box-icon bg-gradient-gray-dark elevation-1"><i class="fas fa-mouse"></i></span>
                                                  <div class="info-box-content">
                                                  <span class="info-box-text"> <b>Sourie</b></span>
                                                  <span class="info-box-number">
                                                      <small>Sourie </small>
                                                  </span>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-3">
                                                <div class="info-box mb-3">
                                                    <span class="info-box-icon bg-gradient-gray-dark elevation-1"><i class="fas fa-video"></i></span>
                                                    <div class="info-box-content">
                                                    <span class="info-box-text"> <b>Camera</b></span>
                                                    <span class="info-box-number">
                                                        <small>Cam</small>
                                                    </span>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                  </div>





                                  <!-- ./card-body -->
                                  <div class="card-footer border border-primar">
                                      <script type="text/javascript">
                                          var ladate=new Date()
                                          document.write("Nous sommes le : ");
                                          document.write(ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear())
                                          </script>
                                  </div>
                              </div>
                          </div>
                      </div>
                     </div><!--/. container-fluid -->
                  </section>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section> <!-- /.content -->
</div>
<!-- lodading my page  -->



<!-- lodading my page  -->

<!--lien script adminelte-->

    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('dist/js/adminlte.js')}}"></script>
    <script src="{{url('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{url('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{url('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{url('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('dist/js/demo.js')}}"></script>
    <script src="{{url('dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{url('plugins/jquery.min.js')}}"></script>
    <script src="{{url('plugins/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
    <script src="{{url('plugins/adminlte.min.js')}}"></script>
    <script src="{{url('plugins/demo.js')}}"></script>
    <script>
    $(function () {
    bsCustomFileInput.i
    nit();
    });
    </script>
<!--lien script adminelte-->
<script>
    $(window).on('load', function () {
        $(".loading-overlay").fadeOut(2000);
    });
 </script>
</body>
</html>
