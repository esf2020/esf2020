<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{url('')}}">
<link rel="stylesheet" href="{{url('plugins/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

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
                <a href="{{ url('home/index')}}" class="nav-link">Home</a>
            </li>
        </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">         <!-- Sidebar -->
    <div class="sidebar mt-lg-5">
        <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" disabled>
                    <div class="card-header bg-warning">
                    <b><i class="nav-icon fas fa-user-circle"></i>
                      {{ Auth::user()->name }}</b>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{url('home/index')}}" class="nav-link">
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
<div class="row mt-2 ml-2">

  <div class="content-wrapper col-md-8">
    <form action="{{ url('home/insertdet')}}" method="post">

          @csrf
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">



          <div class="card card-primary ">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fa fas fa-folder-plus"></i>
                    Insertion details de mvt : </h3>
                  </div>
                   <!-- /.card-header -->

                    <div class="card-body">
                        <label for="id_label_multiple" class="form-label">Designation</label>
                        <select  name="materiel_id" class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" required >
                        <option selected disabled>choisir le nom  de mat </option>
                        @foreach ($mat_v as $mat )
                            <option value="{{$mat->materiel_id }}">{{$mat->designation }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="card-body ">
                      <label for="exampleInputBorderWidth2">N° serie  :</label>
                      <input type="text" name="nserie" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="N de serie de  mat ">
                    </div>
                    <div class="card-body ">
                      <label for="exampleInputRounded0">Date fin de mvt : </label>
                      <input type="date" name="datefin" value="10-02-2000" class="form-control form-control-border border-width-2" id="exampleInputRounded0"  placeholder="10-02-2000">
                    </div>

                    <div class="card-body">
                        <label for="id_label_single" >Responsable</label>
                       <!-- <select-- class="js-example-basic-single js-states form-control" id="id_label_single" name="mvt_id" required  >
                        foreach ($mvt as $mvt )
                            <option value="{ $mvt->mvt_id }}" >
                              {$mvt->libresp }</option>
                        endforeach
                        </select-->
                     <select name="" id="" class="form-control">
                       <option value="{{ $mvtDetail->mvt_id  }}" selected disabled>{{ $mvtDetail->libresp  }}</option>
                     </select>

                       <input type="hidden" name="mvt_id" value="{{ $mvtDetail->mvt_id  }}">




                        <!--input type="hidden" name="mvt_id" id="id_label_single" value="{ $mvtDetailId->mvt_id }" -->
                    </div>
                    <div class="card-body ">
                    <button type="submit"  class="btn btn-success sm"><i class="fa fa-save"></i>
                      Sauvgarder</button>
                      <a type="buttont" href="{{ url('home/listesmat')}}" class="btn btn-danger sm"><i class="fa fa-window-close"></i>
                      Annuler</a>
                      </div>
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
