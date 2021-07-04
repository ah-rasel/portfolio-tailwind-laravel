@props([
    'placeholder'=>'',
])
<input {{ $attributes }} type="text" placeholder="{{$placeholder ?? ''}}" 
class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-1.5 rounded bg-transparent focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300"/>