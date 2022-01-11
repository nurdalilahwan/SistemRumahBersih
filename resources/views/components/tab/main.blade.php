@props([
    'id'=>null,
    'header'=>null,
    'content'=>null,
    'footer'=>null,
  ])


<div @isset($id)id="{{ $id }}"@endisset class="card card-outline card-outline-tabs {{ random_color() }}">
    <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" role="tablist">
            {{ $header }}
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            {{ $content }}
        </div>
    </div>
    @isset($footer)
        <div class="card-footer text-right">
        {{ $footer }}
        </div>
        <!-- /.card-footer-->
    @endisset
</div>

