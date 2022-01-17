{{-- <script src="{{ mix('js/app.js') }}"></script> --}}
<livewire:scripts />
{{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> --}}

  <!-- jQuery -->
  <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

  {{-- must load in order to prevent error. 1.Jquery 2.JqueryUI 3.Bootstrap --}}
  @stack('scripts-jquery-ui')

  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

  @stack('scripts')

  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
  <!-- alpinejs -->
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>

  {{-- Ajax setup csrf token --}}
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>

  <script>
    Livewire.on('triggerSwalError', (errorMessage) => {
        Swal.fire({
            title: 'Error',
            text: errorMessage,
            icon: "error",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
        });
    });

    Livewire.on('triggerSwalSuccess', (successMessage) => {
        Swal.fire({
            title: "{{ __('Berjaya') }}",
            text: successMessage,
            icon: "success",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
        }).then(function(){
            location.reload();
        });
    });

  </script>
