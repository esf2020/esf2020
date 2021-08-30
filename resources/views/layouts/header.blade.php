<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS -->
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('accueil')}}"><i class="fa fa-home"></i> Page d'accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('home')}}"><i class="fa fa-th-list"></i> ListMat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('insert')}}"><i class="fa fa-user-plus"></i> Insertion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('mvt')}}" tabindex="-1" aria-disabled="true">
              <i class="fa fa-list-ol"></i> ListMouvement:</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('insertmvt')}}" tabindex="-1" aria-disabled="true">
              <i class="fa fa-sync"></i> Insert_Mouvt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('insertmvt')}}" tabindex="-1" aria-disabled="true">
              <i class="fa fa-hands"></i>Autres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('insertmvt')}}" tabindex="-1" aria-disabled="true">
              <i class="fa fa-hand-holding-heart"></i> Autres2</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
</nav>
    

@yield('content')