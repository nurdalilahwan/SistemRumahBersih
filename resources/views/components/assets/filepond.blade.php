@once
@push('styles')
  <link href="{{ asset('css/filepond.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
   <script src="{{ asset('js/filepond.min.js') }}"></script>
@endpush
@endonce