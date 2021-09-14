
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('plugins/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('plugins/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('plugins/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('plugins/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('plugins/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('plugins/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- jQuery -->

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <!-- font -->
    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
    <script src="{{ url('fontawesome/js/all.min.js')}}"></script>

<style>


   * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: arial
    }

    body {
        background: #eee
    }

    .wrapper {
        position: relative
    }

    .sidebar {
        position: fixed;
        width: 250px;
        height: 100%;
        background: #5D6D7E;
        padding: 10px 0
    }

    .wrapper .sidebar ul li {
        padding: 15px
    }

    .wrapper .sidebar ul li a {
        color: #bdb8d7;
        display: block
    }

    .wrapper .sidebar ul li a .fas {
        width: 25px !important
    }

    .wrapper .sidebar ul li a .far {
        width: 25px !important
    }

    .wrapper .sidebar ul li:hover {
        background: #311B92
    }

    .wrapper .sidebar ul li a:hover {
        color: #fff;
        text-decoration: none
    }

    .myproject {
        margin-top: 25px;
        color: #ffffffa8;
        font-size: 14px;
        margin-bottom: 0
    }

    .userProfile {
        position: absolute;
        bottom: 0;
        left: 5%;
        display: flex
    }

    .userProfile a {
        width: 20px;
        background: #4527A0;
        color: #bdb8d7;
        text-decoration: none;
        font-size: 15px
    }

    .userProfile a:hover {
        color: #fff;
        background: #4527A0
    }

    .userProfile p {
        color: #fff;
        padding: 0 15px 0 15px
    }

    .userProfile .xyz,
    .mnp {
        padding-top: 60%;
        line-height: 30px;
        font-size: 25px !important
    }

    .notification1 {
        display: flex
    }

    .notification1 .number1 {
        font-size: 15px;
        display: block;
        padding-left: 100px;
        color: #fff
    }

    .notification2 {
        display: flex
    }

    .notification2 .number2 {
        font-size: 15px;
        display: block;
        padding-left: 85px;
        color: #fff
    }
    label {
    color: #B4886B;
    font-weight: bold;
    display: block;
    width: 150px;
    float: left;
}

</style>

<script src="{{url('plugins/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
document.getElementById("demo").innerHTML = today;

</script>
