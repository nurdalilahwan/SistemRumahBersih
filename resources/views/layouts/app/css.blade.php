{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <livewire:styles />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">


  @stack('styles')

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <!-- load-awesome -->
  <link rel="stylesheet" href="{{ asset('css/load-awesome/pacman.min.css') }}">
  <!-- flag-icon-css -->
  <link rel="stylesheet" href="{{ asset('css/flag-icon-css/css/flag-icon.min.css') }}">

  <style>[x-cloak] { display: none !important; }</style>

  <style type="text/cs  s">
    .blinking{
          animation:blinkingText 1.2s infinite;
    }
    @keyframes blinkingText{
        0%{     color: blue;    }
        49%{    color: blue; }
        60%{    color: transparent; }
        99%{    color:transparent;  }
        100%{   color: blue;    }
    }
  </style>
