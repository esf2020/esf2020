  <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.min.js')}}"></script>
   <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
   <script src="{{ url('fontawesome/js/all.min.js')}}"></script>
   <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
   <title>Details Mouvement</title>

<style>
        #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position:right ; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 30%;
    font-size: 20px; /* Increase font-size */
    padding: 0%; /* Add some padding */
    border: 2px solid rgb(29, 4, 251); /* Add a grey border */
    margin: 10px 20px 0px;/* Add some space below the input */
    }
</style>
 <body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					 <!-- left column -->
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-warning mt-2">

                               <div class="card-header">
								  <h3 class="card-title"><i class="fa fa-address-card"></i><b> Details Mvt</b></h3>
                               </div>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" Recherche par ID de mouvement" title="Type in a name">
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body table-responsive p-0" style="height: 300px;">
												<table class="table table-head-fixed text-nowrap" id="myTable">
													<thead>
														<tr>
                                                            <th>Mvt ID</th>
															<th>Designation Mat</th>
                                                            <th>N° Serie</th>
                                                       	</tr>
												    </thead>
													<tbody>
														@foreach ( $dets as $det )
													      <tr>
                                                              <td>{{$det->mvt_id}}</td>
                                                              <td>{{$det->designation}}</td>
														      <td class="text-green">{{$det->nserie}}</td>
													      </tr>
														@endforeach
													</tbody>
												</table>
                                                <tr>
                                                    <td colspan="4">
                                                       {!! $dets->links('pagination::bootstrap-4') !!}
                                                    </td>
                                                </tr>
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
       <div class="container-fluid">
				<div class="row">
				</div>
			</div>
		</section> <!-- /.content -->
  </div>
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

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
