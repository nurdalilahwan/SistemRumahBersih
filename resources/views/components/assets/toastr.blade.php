@once
@push('styles')
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/toastr/toastr.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
@endpush

@push('js')
	<script>
		$(document).ready(function() {
      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }

        Livewire.on('toastrSuccess', (message) => {
            toastr.success(message)
        })

        Livewire.on('toastrWarning', (message) => {
            toastr.warning(message)
        })

        Livewire.on('toastrInfo', (message) => {
            toastr.info(message)
        })

        Livewire.on('toastrError', (message) => {
            toastr.error(message)
        })
    });
  </script>
@endpush
@endonce
