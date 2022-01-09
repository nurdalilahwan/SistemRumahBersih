@props([
    'jasper' => null,
    'params' => [],
    'text'   => '',
])
<a href="{{ route('generate-report', [urlencode(json_encode($params)), $jasper] ) }}" target="_blank" {{ $attributes }}>{{ $text }}</a>