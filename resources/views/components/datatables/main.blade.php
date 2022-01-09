@props([
  'data'=> collect(),
  'perPageProp'=> null,
  'createButton'=> 'false',
  'createMethod'=> null,
  'createButtonPermission'=> null,
  'createName'=> null,
  'submitButton'=> 'false',
  'submitMethod'=> null,
  'submitButtonPermission'=> null,
  'submitName'=> null,
  'isFilterOpen'=> 'false',
  'hasFilter'=> 'true',
  'form' => null,
  'showEntries' => 'true',
])

<div x-data="{filterOpen: {{ $isFilterOpen == 'true' ? 1 : 0 }}}">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="btn-toolbar mb-3">

        @if($showEntries != 'false')
        <div class="btn-group mr-2" style="padding-top: 5px">
          <label>{{ __('Papar') }}</label>
        </div>
        <div class="btn-group mr-2" >
          <select @if($perPageProp) wire:model="{{ $perPageProp }}" @endif class="form-control">
              <option>10</option>
              <option>25</option>
              <option>50</option>
              <option>100</option>
          </select>
        </div>
        <div class="btn-group mr-2" style="padding-top: 5px">
          <label>{{ __('entri') }}</label>
        </div>
        @endif
        
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="btn-toolbar float-right" >
        <div class="btn-group mr-2" >
          @if($createButton == 'true')
            @if(!isset($createButtonPermission) || (isset($createButtonPermission) && auth()->user()->hasPermission($createButtonPermission)))
              <button type="button" class="btn btn-primary" @click="mode = 'create'"> {{ isset($createName) ? $createName: __('Baru')  }}</button>
            @endisset
          @endif

          @if($submitButton == 'true')
            @if(!isset($submitButtonPermission) || (isset($submitButtonPermission) && auth()->user()->hasPermission($submitButtonPermission)))
              <button type="submit" form={{ $form }} class="btn btn-primary" @click="mode = 'edit'"> {{ isset($submitName) ? $submitName:'Create' }}</button>
            @endisset
          @endif
        </div>
        @if($hasFilter == 'true')
        <div class="btn-group" >
          <button @click="filterOpen = ! filterOpen" type="button" class="btn btn-info"><i class="fas fa-filter"></i> {{ __('Tapisan') }}</button>
        </div>
        @endif
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" width="100%">
            <thead>
                <tr class="table-info">
                  {{ $head ?? null }}              
                </tr>
                
            </thead>
            <thead x-show="filterOpen" x-cloak>
                <tr class="">
                  {{ $filter ?? null }}              
                </tr>
                
            </thead>
            <tbody>
                {{ $body ?? null }}
            </tbody>
        </table>
      
        
      </div>
    </div>
  </div>

  @if($data instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div style="padding-top: 10px">
        <label> {{ __('Papar') }} {{ $data->firstItem() }} {{ __('hingga') }} {{ $data->lastItem() }} {{ __('daripada') }} {{ $data->total() }} {{ __('entri') }} </label>
        </div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="float-right">
          {{ $data->onEachSide(1)->links() }}
        </div>
      </div>
    </div>
  @endif
</div>
