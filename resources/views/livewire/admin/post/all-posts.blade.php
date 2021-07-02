<div class="w-full mt-6 overflow-hidden rounded-lg shadow-xs">
  @can('post_read')
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead >
            <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase bg-gray-200 border-b dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Sl</th>
                <th class="px-4 py-3">Title</th>
                <th class="px-4 py-3">Category</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Poseted By</th>
                <th class="px-4 py-3">Date</th>
                <th class="px-4 py-3">Action</th>
            </tr>
            </thead>
            <tbody class="bg-gray-100 divide-y dark:divide-gray-700 dark:bg-gray-800">
            @php
                $skipped = ($posts->currentPage() * $posts->perPage()) - $posts->perPage();
            @endphp
            @foreach($posts as $post)
                <tr class="text-center text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        {{$loop->iteration+$skipped}}
                    </td>
                    <td class="px-4 py-3">
                        <a href="{{ route('post.view', $post) }}" class="text-sm underline">{{$post->title}}</a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <a href="#" class="font-semibold text-blue-400">{{$post->category->name}}</a>
                    </td>
                    <td class="px-4 py-3 text-xs cursor-pointer">
                      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                              <img class="object-cover w-full h-full rounded-full" src="{{$post->user->profile_photo_url}}" alt="" loading="lazy">
                              <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                              <p class="font-semibold">{{$post->user->name}}</p>
                              <p class="text-xs text-gray-600 dark:text-gray-400">
                                10x Developer
                              </p>
                            </div>
                          </div>
                        
                    </td>
                    <td class="px-4 py-3 text-xs text-gray-500">
                        {{$post->date_to_display}}<br>
                    </td>
                    
                    <td class="px-4 py-3 text-sm">
                        <div class="flex space-x-4">
                          @can('post_update')<x-table.button.action href="{{ route('post.edit', $post) }}" edit/>@endcan
                            @can('post_delete') <x-table.button.action wire:click='DeletePost({{$post}})' delete/> @endcan
                        </div>
                      </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
   
    {{ $posts->links('livewire.admin.admin-pagination') }}
    @endcan
</div>
