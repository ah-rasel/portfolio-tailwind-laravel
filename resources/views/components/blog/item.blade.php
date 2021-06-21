@props(['itemTitle','countValue','fontCase'=>'','linkText'=>''])
<div>
    <a href="{{$linkText}}" class="text-sm font-semibold tracking-wide">
        <div class="border-l-4 border-purple-500 py-2.5 px-2 bg-gray-50 dark:bg-gray-600 dark:border-purple-400">
            <span class="mx-1 text-gray-500">{{$countValue}}.<span>
            <span class="mx-1 text-gray-700 {{$fontCase ?? ''}} ">{{$itemTitle}}</span>
        </div>
    </a>
</div>