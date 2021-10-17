<!DOCTYPE html>
<html lang="en">
<head>

  <title>chart</title>
  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <link rel="icon" type="image/png" href="{{ url('dist/img/far.PNG')}}">
  <title>Autre chart</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.header')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div  id="chartContainer"></div>
    </div>

  <!-- /.content-wrapper -->
<!-- ./wrapper -->
  <script src="{{ url('plugins/highcharts/highcharts.js')}}"></script>
  <script src="{{ url('plugins/highcharts/exporting.js')}}"></script>
  <script src="{{ url('plugins/highcharts/export-data.js')}}"></script>
  <script src="{{ url('plugins/highcharts/accessibility.js')}}"></script>


<script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,

        data: [{
            type: "doughnut",
            startAngle: 60,
            //innerRadius: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{label}:</b> {y}",
            dataPoints: [
                    { y: {{$ECRAN }}, label: "ECRAN" },
                    { y: {{$Sourie }}, label: "Sourie" },
                    { y: {{$Materiels_juges }}, label: "Materiels_juges" },
                    { y: {{$CLAVIERS }}, label: "CLAVIERS" },
                    { y: {{$GATWAYGSM}}, label: "GATWAYGSM" },
                    { y: {{$APPAREIL_TELEPHONIQUE }}, label: "APPAREIL_TELEPHONIQUE" },
                    { y: {{$CLIMATISEUR }}, label: "CLIMATISEUR" },
                    { y: {{$Divers}}, label: "Divers" }
            ]
        }]
    });
    chart.render();

    }
</script>


<script src="{{ url('plugins/canvasjs/jsondata.js') }}"></script>
<script src="{{ url('plugins/canvasjs/canvasjs.min.js') }}"></script>
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{url('plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{url('plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{url('plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<!-- Page specific script -->

</body>
</html>
