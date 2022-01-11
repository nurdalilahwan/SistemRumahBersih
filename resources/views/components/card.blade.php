
<div class="card card-outline card-{{ random_color() }}" style="{{ $style ?? '100%' }}">
    @isset($title)
    <div class="card-header">
      <h3 class="card-title"><i class="{{ $icon ?? '' }}"></i> {{ $title ?? '' }}</h3>
      
      <div class="card-tools">
        @isset($collapseButton)
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="{{ $collapsedIcon ?? 'fas fa-minus' }}"></i></button>
        @endisset
        @isset($removeButton)
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        @endisset
      </div>
    </div>
    @endisset
    
    @isset($body)
    <div class="card-body">
      {{ $body ?? 'Start creating your amazing application!' }}
    </div>
    @endisset
    <!-- /.card-body -->
    @isset($footer)
      <div class="card-footer text-right">
        {{ $footer ?? 'Footer' }}
      </div>
      <!-- /.card-footer-->
    @endisset
  </div>