@props([
    'subCategories',
    'marginValue',
    'prev'=>false,    ])
@foreach($subCategories as $subcategory)
    <label style="margin-left: {{$marginValue*10}}px;" class="inline-flex items-center cursor-pointer" for={{$var = rand()}}>
        <input
        {{$attributes}}
        value="{{$subcategory->id}}" id="{{$var}}" type="radio">
        <span class="ml-2">{{$subcategory->name."(".$subcategory->parent_id.")"}}</span>
    </label>
    {{-- If Sub Categories has Sub Categories --}}
    @if(count($subcategory->subcategory))
        @php
            $prev = $marginValue;
            $marginValue = $marginValue+2;
        @endphp

        <x-blog.normal-category {{$attributes}} :sub-categories="$subcategory->subcategory" :margin-value="$marginValue"></x-blog.normal-category>
    @endif

    @php
        $marginValue = $prev;
    @endphp

@endforeach