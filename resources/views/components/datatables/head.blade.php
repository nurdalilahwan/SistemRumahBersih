@props([
    'sortByProp' => null, 
    'dbColumn' => null, 
    'title' => null, 
    'sortDirectionProp'=> null, 
    'align'=>'left',
])

<th width="{{ $attributes->get('width') }}" @if($sortByProp) wire:click="sortBy('{{ $dbColumn }}')"  style="cursor: pointer" @endif style="text-align: {{ $align }}" {{ $attributes }}>
    {{ $title }}

    @if($sortByProp && $dbColumn)
        @if($sortByProp !== $dbColumn)
        <i class="text-muted fas fa-sort"></i>
        @elseif($sortDirectionProp == 'asc')
        <i style="color: rgba(38, 38, 236, 0.774)" class="fas fa-sort-up"></i>
        @else
        <i style="color: rgba(38, 38, 236, 0.774)" class="fas fa-sort-down"></i>
        @endif
    @endif
    
</th>