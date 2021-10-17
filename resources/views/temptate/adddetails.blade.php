<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{url('')}}">
<link rel="stylesheet" href="{{url('plugins/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
<title>Details mvt</title>
<!-- font -->
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.header')

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
                        <select  name="materiel_id" class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" >
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


                    <div class="card-body">
                        <label for="id_label_single" >Responsable</label>
                       <!-- <select-- class="js-example-basic-single js-states form-control" id="id_label_single" name="mvt_id" required  >
                        foreach ($mvt as $mvt )
                            <option value="{ $mvt->mvt_id }}" >
                              {$mvt->libresp }</option>
                        endforeach
                        </select-->
                        <select name=""  class="form-control" disabled>
                        <option value="{{ $mvtDetail->mvt_id  }}" selected >{{ $mvtDetail->libresp }}</option>
                        </select>
                        <input type="hidden" name="mvt_id" value="{{ $mvtDetail->mvt_id  }}">
                    </div>

                      <div class="card-body">
                         <button type="submit"  class="btn btn-success sm"><i class="fa fa-save"></i>
                        Sauvgarder</button>
                        <a type="buttont" href="{{ url('home/listesmat')}}" class="btn btn-danger sm"><i class="fa fa-window-close"></i>
                        Annuler</a>
                      </div>
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
