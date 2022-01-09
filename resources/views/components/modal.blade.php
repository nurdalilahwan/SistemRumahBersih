  <div wire:ignore.self id="{{ $attributes->get('id') }}" class="modal fade" data-keyboard="false" data-backdrop="static" >
    <div class="modal-dialog modal-{{ $attributes->get('size') ?? 'lg' }}">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><i class="{{ $attributes->get('icon') }}"></i> {{ $title }}</h4>
          <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ $body }}
        </div>
        <div class="modal-footer">
            {{ $footer }}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
