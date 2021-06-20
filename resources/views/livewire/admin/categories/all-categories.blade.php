<div class="w-full mt-6 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        @if (session()->has('error_message'))
            {{session('error_message')}}
        @endif
        <table class="w-full whitespace-no-wrap">
            <thead >
            <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase bg-gray-200 border-b dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Sl</th>
                <th class="px-4 py-3">Category Title</th>
                <th class="px-4 py-3">Category Slug</th>
                <th class="px-4 py-3">Category Description</th>
                <th class="px-4 py-3">Date</th>
                <th class="px-4 py-3">Action</th>
            </tr>
            </thead>
            @php
                $skipped = ($categories->currentPage() * $categories->perPage()) - $categories->perPage();
            @endphp
            <tbody class="bg-gray-100 divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach($categories as $category)
            <tr class="text-gray-700  dark:text-gray-400">
                <td class="px-4 py-3">
                    {{$loop->iteration+$skipped}}
                </td>
                <td class="px-4 py-3">
                    <a href="#" class="font-semibold underline">{{$category->name}}</a>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{$category->slug}}
                </td>
                <td class="px-4 py-3 text-sm">
                    @php echo(\Illuminate\Support\Str::limit($category->description, 40, $end='...')) @endphp
                </td><td class="px-4 py-3 text-sm">
                {{$category->date_to_display}}
                </td>
                
                <td class="px-4 py-3 text-sm">
                    <div class="flex items-center space-x-4 text-sm">
                      <a href="{{ route('category.edit', $category) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </a>
                      
                        <form wire:submit.prevent="DeleteCategory({{$category}})" action="">
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                              </button>
                        </form>
                      
                    </div>
                  </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $categories->links('livewire.admin.admin-pagination') }}
</div>
