@props([
    'subCategories',
    'marginValue',
    'prev'=>false])
@foreach($subCategories as $subcategory)

    <option value="{{$subcategory->id}}">
        @for ($i = 0; $i < $marginValue; $i++)
            <span class="font-semibold">-</span>
        @endfor
        {{$subcategory->name}}</option>
        
    {{-- If Sub Categories has Sub Categories --}}
    @if(count($subcategory->subcategory))
        @php
            $prev = $marginValue;
            $marginValue = $marginValue+1;
        @endphp
        <x-blog.sub-category-in-edit-form :sub-categories="$subcategory->subcategory" :margin-value="$marginValue"></x-blog.sub-category-in-edit-form>
    @endif

    @php
        $marginValue = $prev;
    @endphp

@endforeach