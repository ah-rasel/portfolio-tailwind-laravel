<div class="block">
    <div class="mt-2">
      <div>
        <label class="inline-flex items-center cursor-pointer">
          <input {{ $attributes }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer" checked>
          <span class="ml-2">
              {{ $slot }}
          </span>
        </label>
      </div>
    </div>
 </div>