
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dexearn | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/AdminUi/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/AdminUi/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminUi/dist/css/adminlte.min.css">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/AdminUi/dist/img/AdminUiLTELogo.png" alt="AdminUiLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.Sidebars.admin')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.Partials.footer')
</div>
<!-- ./wrapper -->
@livewireScripts
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/AdminUi/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/AdminUi/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/AdminUi/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminUi/dist/js/adminlte.js"></script>

<!-- PAGE /AdminUi/PLUGINS -->
<!-- jQuery Mapael -->
<script src="/AdminUi/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/AdminUi/plugins/raphael/raphael.min.js"></script>
<script src="/AdminUi/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/AdminUi/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/AdminUi/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/AdminUi/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="/AdminUi/dist/js/pages/dashboard2.js"></script> --}}
</body>

</html>
