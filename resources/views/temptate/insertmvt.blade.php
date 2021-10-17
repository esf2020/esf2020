<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
<title>Ajouter Mouvement</title>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')

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
                      <input type="date" name="datemvt" value="{{ old('datemvt')}}" class="@error('datemvt') is-invalid @enderror form-control form-control-border" id="exampleInputBorder" >
                      @error('datemvt')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputBorderWidth2">Type de Mouvement :</label>
                      <select name="typemvt" value="{{ old('typemvt')}}" class="@error('typemvt') is-invalid @enderror custom-select form-control form-control-border border-width-2" id="exampleSelectBorder">
                        <option selected disabled>choisir une Categorie </option>
                        <option value="perception">Perception</option>
                        <option value="reparation">Reparation</option>
                      </select>
                      @error('typemvt')
                      <p class="text-danger">{{ $message }}</p>
                     @enderror
                    </div>

                    <div class="form-group ">
                      <label for="exampleInputRounded0">Organe : </label>
                    <input  type="text" name="organe" value="{{ old('organe')}}" class="@error('organe') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0" placeholder="Organe/Unites/Bureau">
                    @error('organe')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputRounded0">Responsable : </label>
                      <input type="text" name="responsable" value="{{ old('responsable')}}" class="@error('responsable') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0" min="1" placeholder="Responsable ">
                      @error('responsable')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputRounded0">Date fin de mvt : </label>
                      <input type="date" name="datefin" value="{{ old('datefin')}}" class="@error('datefin') is-invalid @enderror form-control form-control-border" id="exampleInputRounded0"  placeholder="10-02-2000">
                      @error('datefin')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <button type="submit"  class="btn btn-success"><i class="fa fa-save"></i>
                      Sauvgarder</button>
                      <a type="buttont" href="{{ url('home/listesmvt')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>
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
