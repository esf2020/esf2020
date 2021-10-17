
  <!-- Navbar ->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{ { url('home/index')}}" class="nav-link">Home</a>
        </li>
    </ul>

  </nav>
<!- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
     <p class="brand-link">
        <img src="{{ url('dist/img/far.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>{{ Auth::user()->name }}</b></span>
      </p>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item mt-3">
                    <a href="{{url('home/index')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <!--========= Data of tables ==================================== -->
                    <li class="nav-item">
                        <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/listesmat')}}" class="nav-link ">
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
                            <a href="{{url('home/glob')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Materiels en MVT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/listescateg')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/Arrivee')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Courriers Arrivee</p>
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
                            Insertions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/insertion_mat')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>Ajouter Materiel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertmvt')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>Ajouter Mouvement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertion_categ')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>Ajouter Categorie</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/ajoutercour')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>Ajouter Courriers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--========= end Data of tables ==================================== -->
                <!--========= Aures paramètres ==================================== -->
                <li class="nav-header"><i class="fas fa-bell"></i><b> Autres paramètres </b></li>

                          <li class="nav-item">
                                  <a class="nav-link" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  <b><i class="fas fa-user-lock"></i>  {{ __('Se deconnecter') }}</b>
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
            </ul>
        </nav>
    </div>
</aside>

