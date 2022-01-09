@once

@push('styles')
	<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fullcalendar/main.min.css') }}">
@endpush

@push('scripts-jquery-ui')
	<script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
@endpush

@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('AdminLTE/plugins/fullcalendar/main.min.js') }}"></script>
@endpush

@endonce