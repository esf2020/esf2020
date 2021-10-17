<style>

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
 <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
 <title>Page d'accueil</title>
<!--  links style-->
<link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">

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
<body class="hold-transition  sidebar-mini layout-fixed">
    
    @include('layouts.header')
        <!-- content-wrapper -->
	<div class="content-wrapper">
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
												<div class="row">
												  <div class="col-12 col-sm-6 col-md-3">
													  <div class="info-box">
														  <span class="info-box-icon bg-info elevation-1"><i class="fab fa-battle-net"></i></span>

														  <div class="info-box-content">
															  <span class="info-box-text"><b>Total MAT</b></span>
															  <span class="info-box-number">
															  {{ $totalqte }}
																  <small><b>Article</b></small>
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
														  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cogs"></i></span>
														  <div class="info-box-content">
														  <span class="info-box-text"><b>Mats disponible</b></span>
														  <span class="info-box-number">
														  {{$qtedisponible}}
															  <small><b>Article</b></small>
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
																  <small class="text-red"><b>En cours</b></small>
                                                                  {{ $finmvt }}
                                                                  <small class="text-green"><b>Terminé</b></small>
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
                                                                <span class="info-box-text"><b>MVTS EN Cours</b></span>
                                                                <span class="info-box-number">
                                                                    {{ $countdet }}
                                                                    <small class="text-success"><b>Article en MVT</b></small>
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
											<!-- qte par categ -->
											<div class="row">
												<div class="col-md-12">
													<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
												</div>

												  <!-- ./card-body -->
											</div>
										</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</section>


    </div>
     <!-- charj categorie -->
    <script>
        window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "CHART GESTION MATERIELS DINFO"
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y} Article",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - {y}%",
                dataPoints: [
                    { y: "{{ $ONDULEUR }}", label: "ONDULEUR" },
                    { y: "{{ $PC_PORTABLE}}", label: "Pc Portable" },
                    { y: "{{ $UNITE_CENTRALE}}", label: "Ordinateur" },
                    { y: "{{ $SERVEUR }}", label: "Serveur" },
                    { y: "{{ $SWITCH }}", label: "Switch reseau" },
                    { y: "{{ $MODEMADSL }}", label: "Modem ADSL" },
                    { y: "{{ $MATERIELRESEAU }}", label: "MAT RESEAU" }
                ]
            }]
        });
        chart.render();

        }
    </script>
    <!-- chart all categorie -->

    <script src="{{ url('plugins/canvasjs/canvasjs.min.js') }}"></script>

        <script src="{{ url('plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <script src="{{ url('dist/js/adminlte.js')}}"></script>
        <script src="{{ url('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
        <script src="{{ url('plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{ url('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
        <script src="{{ url('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
        <script src="{{ url('plugins/chart.js/Chart.min.js')}}"></script>
        <script src="{{ url('dist/js/demo.js')}}"></script>
        <script src="{{ url('dist/js/pages/dashboard2.js')}}"></script>
        <!--lien script adminelte-->
        <!-- ChartJS -->
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


    <!-- AdminLTE for demo purposes -->
    <script>
        $(window).on('load', function () {
            $(".loading-overlay").fadeOut(100);
        });
    </script>

</body>
</html>
