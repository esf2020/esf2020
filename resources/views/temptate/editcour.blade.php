<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
<script src="{{ url('fontawesome/js/all.min.js')}}"></script>
<link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
<title>Modification MVT</title>
<body class="hold-transition sidebar-mini layout-fixed">

@include('layouts.header')
    <!--menu  -->
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-lg-5">
        <div class="container-fluid">
            <div class="row">
                 <!-- left column -->
                <div class="col-md-12"><!-- general form elements -->
                    <div class="card card-warning mt-2">
                                  <div class="card-header">
                                     <h3 class="card-title"><i class="fa fas fa-sync-alt"></i><b> Mis-a-Jour de Courier</b></h3>
                                  </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="container ">
                                            <form action="{{ url('/home/editcour/'.$arr->id) }}" method="post" class="row g-3">
                                              {{csrf_field()}}
                                              <input type="hidden" name="_method" value="PUT">

                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                  <div class="row form-group col-md-12">
                                                      <div class="col-md-6">
                                                          <label for="exampleInputBorder">N° d'ordre : </label>
                                                          <input type="number" name="nordre" value="{{ $arr->nordre }}" class="@error('nordre') is-invalid @enderror form-control form-control-border" id="exampleInputBorder">
                                                          @error('nordre')
                                                          <p class="text-danger">{{ $message }}</p>
                                                          @enderror
                                                        </div>
                                                      <div class="col-md-6">
                                                          <label for="exampleInputBorder">Date creation : </label>
                                                          <input type="date" name="datea" value="{{ $arr->datea }}" class="@error('datea') is-invalid @enderror form-control form-control-border" id="exampleInputBorder">
                                                          @error('datea')
                                                          <p class="text-danger">{{ $message }}</p>
                                                          @enderror
                                                        </div>

                                                  </div>
                                                  <div class="form-group ">
                                                    <label for="exampleInputBorder">Reference de courrier : </label>
                                                    <input type="text" name="reference" value="{{ $arr->textmsg }}" class="@error('reference') is-invalid @enderror form-control form-control-border" id="exampleInputBorder">
                                                        @error('reference')
                                                          <p class="text-danger">{{ $message }}</p>
                                                          @enderror
                                                   </div>

                                                  <div class="row col-md-12 form-group ">
                                                     <div class="col-md-4">
                                                      <label for="exampleInputRounded0">Source  : </label>
                                                      <input type="text" name="source" value="{{ $arr->source }}" class="@error('source') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0"  >
                                                      @error('source')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                      </div>

                                                     <div class="col-md-4">
                                                      <label for="exampleInputRounded0">Type de courrier : </label>
                                                      <input type="text" name="type" value="{{ $arr->typemsg }}" class="@error('type') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0">
                                                      @error('type')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                    </div>

                                                     <div class="col-md-4">
                                                      <label for="exampleInputRounded0">Date de courrier : </label>
                                                      <input type="date" name="datemsg" value="{{ $arr->datemsg }}" class="@error('datemsg') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputRounded0">
                                                      @error('datemsg')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                    </div>
                                                    </div>

                                                  <div class="form-group">
                                                    <label for="exampleInputobjet">Objet de courrier : </label>
                                                      <input type="text" value="{{ $arr->objet }}" name="objet" class="@error('objet') is-invalid @enderror form-control form-control-border border-width-2" id="exampleInputobjet">
                                                      @error('objet')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <button type="submit" class="btn btn-warning"> <i class="fa fas fa-sync-alt" ></i>Mis a jour</button>
                                                  <a type="button" href="{{url('home/Arrivee')}}" class="btn btn-danger">
                                                    Annuler <i class="fa fas fa-window-close"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                        <!-- /.card-body table-responsive p-0 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
       <!-- /.container-fluid -->

</div>

  <!--  js link  -->
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
