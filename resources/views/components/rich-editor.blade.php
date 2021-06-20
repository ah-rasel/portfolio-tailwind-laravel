{{-- <span class="text-gray-700 dark:text-gray-400">Post Content</span>
<textarea wire:model="content" class="block w-full mt-1.5 text-sm dark:text-gray-300 ring-1 ring-purple-300 py-1 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:focus:shadow-outline-gray" rows="6" placeholder="Enter some long form content." spellcheck="false"></textarea>
@error('content') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
<br> @enderror --}}
@props(['initialValue'=>''])

<div class="" 
wire:ignore
{{$attributes}}
x-data
@trix-blur="$dispatch('input', $event.target.value)"
>
<input id="x" value="{{$initialValue}}" type="hidden" name="content">
<trix-editor input="x" class="mt-1.5 text-sm dark:text-gray-300 ring-1 ring-purple-300 py-1 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:focus:shadow-outline-gray"></trix-editor>
</div>