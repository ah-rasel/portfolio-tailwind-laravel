@props([
    'title',
])
<label {{$attributes}}>
    <span class="font-semibold text-sm">{{$title}}</span>
    {{$slot}}
</label>