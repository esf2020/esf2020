<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
 <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
 <link rel="stylesheet" href="{{url('dist/stylegoogle.css')}}">
 <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
 <title>Courrier Arrivee</title>
 <script src="{{ asset('cdn/jquery.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{url('cdn/jquery.dataTables.css')}}">
 <script type="text/javascript" charset="utf8" src="{{url('cdn/jquery.dataTables.js')}}"></script>

 <link rel="stylesheet" href="{{ url('tableexport/css/buttons.dataTables.min.css')}}">
 <link rel="stylesheet" href="{{ url('tableexport/css/jquery.dataTables.min.css')}}">

 <body class="hold-transition sidebar-mini layout-fixed">

 @include('layouts.header')
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3"><!-- Main content -->
             <section class="content">
                 <div class="container col-md-12">
                             <div class="row col-md-12 mb-2">
                                             <div class="col-md-3">
                                                 <br>
                                                 <a type="button" href="{{ url('home/ajoutercour') }}" class="btn btn-warning btn-sm">
                                                     <i class="fas fa-plus-square"></i> Ajouter un message Arrive
                                                 </a>
                                             </div>

                             </div>
                                         <!-- /.card-header -->
                                         <div class="col-12" style="height: 650px;">
                                             @if(session()->has('message'))
                                                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                     <i class="fas fa-check-circle"></i> {{ session()->get('message') }}
                                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                 </div>
                                             @endif
                                             <table  class="table table-hover table-head-fixed text-nowrap mb-3" id="example">
                                                 <thead>
                                                     <tr>
                                                         <th>N°OR</th>
                                                         <th>dateA</th>
                                                         <th>Message</th>
                                                         <th>Sources</th>
                                                         <th>Type</th>
                                                         <th>Date</th>
                                                         <th>Objet</th>
                                                         <th>Action</th>

                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                @foreach ($courrier as $arr )
                                                     <tr>
                                                         <td>{{ $arr->nordre }}</td>
                                                         <td>{{ $arr->datea }}</td>
                                                         <td>{{ Str::limit($arr->textmsg, 30, $end=' ...') }}</td>
                                                         <td>{{ $arr->source}}</td>
                                                         <td>{{ $arr->typemsg }}</td>
                                                         <td>{{ $arr->datemsg }}</td>
                                                         <td>{{ Str::limit($arr->objet, 30, $end=' ...') }}</td>
                                                         <td>
                                                          <a type="button" href="{{ url('home/editcour/'.$arr->id) }}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                                                          <a type="button" href="{{ url('home/showcour/'.$arr->id) }}" class="btn btn-outline-dark"><i class="fas fa-eye"></i></a>
                                                         </td>
                                                     </tr>
                                                 @endforeach
                                                 </tbody>
                                             </table>
                                         </div>
                 </div>
             </section>
</div>
   <!-- jQuery -->
   <!-- Bootstrap 4 -->
</body>
   <script src="{{url('plugins/js/bootstrap.bundle.min.js')}}"></script>
   <!-- bs-custom-file-input -->
   <script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
   <!-- AdminLTE App -->
   <script src="{{url('plugins/adminlte.min.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{url('plugins/demo.js')}}"></script>

   <script src="{{ url('tableexport/js/jquery-3.5.1.js') }}"></script>
   <script src="{{ url('tableexport/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ url('tableexport/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ url('tableexport/js/jszip.min.js') }}"></script>
   <script src="{{ url('tableexport/js/pdfmake.min.js') }}"></script>
   <script src="{{ url('tableexport/js/vfs_fonts.js') }}"></script>
   <script src="{{ url('tableexport/js/buttons.html5.min.js') }}"></script>
   <script src="{{ url('tableexport/js/buttons.print.min.js') }}"></script>




   <!-- Page specific script -->
   <script>
     $(function () {
         bsCustomFileInput.init();
     });
   </script>


    <script>
            $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        } );
    } );
     </script>
</html>
