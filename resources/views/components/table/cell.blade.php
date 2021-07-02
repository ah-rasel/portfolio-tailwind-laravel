
<td {{ $attributes->merge(['class'=>'px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200'])->only('class') }}>
    {{ $slot }}
</td>