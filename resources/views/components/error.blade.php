@props([
    'errorTitle'
])
@error($errorTitle)
    <p class="text-sm text-red-500">{{$message}}</p>
@enderror