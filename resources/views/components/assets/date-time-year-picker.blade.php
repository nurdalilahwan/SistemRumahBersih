@once
@push('styles')
	<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('AdminLTE/plugins/moment/locale/ms-my.js') }}"></script>
	<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endpush

@push('js')
	<script>
		$(function () {
			$('.datepicker').datetimepicker({
				format: 'DD/MM/YYYY',
				locale: "{{ session()->get('locale') }}",
			});
			
			$('.datetimepicker').datetimepicker({
				icons: { time: 'far fa-clock' },
				format: 'DD/MM/YYYY h:mm A',
				locale: "{{ session()->get('locale') }}",
			});
			
			$('.monthpicker').datetimepicker({
				format: 'MMMM',
				viewMode: "months",
				locale: "{{ session()->get('locale') }}", 
			});

			$('.yearpicker').datetimepicker({
				format: "YYYY",
				viewMode: "years", 
				locale: "{{ session()->get('locale') }}",
					// minViewMode: "years"
			});

			$('.timepicker').datetimepicker({
				format: 'LT',
				locale: "en",
			});
		});
	</script>
@endpush
@endonce