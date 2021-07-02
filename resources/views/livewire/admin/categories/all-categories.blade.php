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
                    <a href="#" class="text-sm underline">{{$category->name}}</a>
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
                    <div class="flex space-x-4">
                        @can('category_update')<x-table.button.action href="{{ route('category.edit', $category) }}" edit/>@endcan
                          @can('category_delete') <x-table.button.action wire:click='DeleteCategory({{$category}})' delete/> @endcan
                      </div>
                  </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $categories->links('livewire.admin.admin-pagination') }}
</div>
