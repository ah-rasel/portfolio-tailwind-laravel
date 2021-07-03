@props([
    'itemTitle',
    'countValue',
    'fontCase'=>'',
    'linkText'=>'',
    'itemCountValue'=>false,
    ])
<div>
    <a href="{{$linkText}}" class="text-sm font-semibold tracking-wide">
        <div class="border-l-2 border-purple-500 py-2.5 px-2 bg-gray-50 dark:bg-gray-600 dark:border-purple-400">
            <p class="mx-1 text-gray-700 dark:text-gray-200 {{$fontCase ?? ''}} "><span class="mx-1">{{$countValue}}.<span> {{$itemTitle}}</p> 
            @if ($itemCountValue) 
                <p class="text-xs font-medium ml-6 mt-1.5">{{$itemCountValue}}</p>
            @endif
        </div>
    </a>
</div>