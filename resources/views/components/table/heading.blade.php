
<th
    {{ $attributes->merge(['class' => 'px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider'])->only('class')  }}>

    {{ $slot }}  
    
</th>