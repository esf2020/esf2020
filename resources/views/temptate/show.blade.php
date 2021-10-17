    <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
   <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
   <title>Observtaion</title>
<style>
    label{
        color: rgb(7, 31, 250);
       font-size: 20px;
    }
</style>
 <body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.header')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-3">
                <section class="content">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-body row">
                        <div class="col-2 text-center d-flex align-items-center justify-content-center">
                          <div class="">
                            <h2><strong><u>Details</u> <i class="far fa-hand-point-right"></i></strong></h2>
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="form-group">
                            <label for="inputName">Desination :</label>
                            <p id="inputMessage" class="form-control" disabled >
                                {{$mat->designation}}
                            </p>
                           </div>
                          <div class="form-group">
                            <label for="inputEmail">Marque :</label>
                            <p id="inputMessage" class="form-control" disabled >
                                {{$mat->marque}}
                            </p>
                          </div>
                          <div class="form-group">
                            <label for="inputSubject">Quantites :</label>
                            <p id="inputMessage" class="form-control" disabled >
                                {{$mat->quantites}}
                            </p>
                          </div>
                          <div class="form-group">
                            <label for="inputMessage">Observation :</label>
                            <p id="inputMessage" class="form-control" disabled >
                                {{$mat->observation}}
                            </p>
                           </div>
                           <div class="form-group">
                            <a type="button" href="{{ url('home/listesmat')}}" class="btn btn-info"><i class="fas fa-reply-all"></i> Précédent</a>                          </div>
                        </div>
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
