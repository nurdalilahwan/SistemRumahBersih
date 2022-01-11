@once
@push('styles')
	<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endpush
@endonce