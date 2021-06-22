    @props([
        'parentCategories',
        'callingPlace',
        'previousCategory'=>false
    ])
    @php
        $marginValue = 0;
        $prev = 0;
        $MainPrev  = 0;
    @endphp
    @foreach($parentCategories as $category)
    @if ($callingPlace == "show-tree")
    <label class="inline-flex items-center" for="{{$var = rand()}}">
        <input wire:model="selected_category" value="{{$category->id}}" id="{{$var}}" type="radio" 
        class="" {{$category->id == $previousCategory ? ' checked ':''}}>
        <span class="ml-2">{{$category->name}}</span>
    </label>
    @elseif ($callingPlace == "show-tree-edit-mode")
    <option value="{{$category->id}}" class="font-semibold">{{$category->name}}</option>
    @endif
            @if(count($category->subcategory))
                @php
                    $MainPrev = $marginValue;
                    $marginValue = $marginValue+2;
                @endphp
                @if ($callingPlace == "show-tree")
                <x-blog.normal-category wire:model="selected_category" :sub-categories="$category->subcategory" :margin-value="$marginValue"></x-blog.category>
                @elseif ($callingPlace == "show-tree-edit-mode")
               <x-blog.sub-category-in-edit-form wire:model="parent_id" :sub-categories="$category->subcategory" :margin-value="$marginValue"></x-blog.sub-category-in-edit-form>
                @endif
            @endif

            @php
            $marginValue = $MainPrev;
            @endphp
        @endforeach