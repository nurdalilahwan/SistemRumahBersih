@once
@push('styles')
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}"> --}}
@endpush

@push('css')
  <style>
  	.has-error .select2-selection {
  	    border-color: #dd4b39 !important;
  	}

	/*Select2 ReadOnly Start*/
	  select[readonly].select2-hidden-accessible + .select2-container {
        pointer-events: none;
        touch-action: none;
    }

    select[readonly].select2-hidden-accessible + .select2-container .select2-selection {
        background: #eee;
        box-shadow: none;
    }

    select[readonly].select2-hidden-accessible + .select2-container .select2-selection__arrow, select[readonly].select2-hidden-accessible + .select2-container .select2-selection__clear {
        display: none;
    }

	/*Select2 ReadOnly End*/
  </style>
@endpush

@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
@endpush

@push('js')
	<script>
		$(document).ready(function(){
			$('.select2').select2({
				// theme: 'bootstrap4'
			});
		});
	</script>
@endpush
@endonce