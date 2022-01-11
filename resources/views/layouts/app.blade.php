<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Starter</title>

  <!-- Styles -->
  @include('layouts.app.css')
  @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed {{ session('sidebarState') }}">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.app.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.app.main-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        @include('layouts.app.control-sidebar')
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layouts.app.footer')

    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    @include('layouts.app.js')
    @stack('js')

</body>
</html>
