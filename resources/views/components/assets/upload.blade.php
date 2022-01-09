@once
@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
@endpush

@push('js')
	<script>
		$(document).ready(function() {			
			bsCustomFileInput.init();
		  });
	  </script>
@endpush
@endonce