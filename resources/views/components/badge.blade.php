@props([
    'success'=>false,
    'error'=>false,
    'info'=>false,
])

<span {{ $attributes }} class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full cursor-pointer
    @if($success)
        bg-green-100 text-green-800
    @elseif($error)
        bg-red-600 text-white
    @endif
">
    {{ $slot }}
</span>