<td style="text-align: center"> 
    @if($data instanceof \Illuminate\Pagination\LengthAwarePaginator && $loop) 
    {{ ($data->currentpage()-1) * $data->perpage() + $loop->index + 1 }} 
    @endif
</td>