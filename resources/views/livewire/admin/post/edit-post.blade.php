<div class="">
    <form wire:submit.prevent="Update()" action="" method="POST" class="mt-4">
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Post Title</span>
                <input wire:model="post.title" class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-1.5 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300" placeholder="How to boil water ?">
                @error('post.title') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
                @error('post.slug') <span class="text-xs font-semibold text-red-600 dark:text-red-400">There is already a post with this title</span>
                <br> @enderror
                <span class="text-xs font-semibold text-gray-600 dark:text-red-400">{{url('/').'/post/'.$post->slug}}</span>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Post Content</span>                
            </label>
            <x-rich-editor wire:model="post.content" id="content" :initial-value="$post->content"></x-rich-editor>
            @error('post.content') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
{{--            <!-- Categories -->--}}
{{--            <label wire:model="category_id" class="block mt-4 text-sm">--}}
{{--                <span class="font-bold text-gray-700 dark:text-gray-400">Category</span>--}}
{{--                <div class="flex flex-col mt-3">--}}
{{--                    @foreach($categories as $category)--}}
{{--                    <label class="inline-flex items-center">--}}
{{--                        <input value="{{$category->id}}" id="{{rand()}}" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                        <span class="ml-2">{{$category->name}}</span>--}}
{{--                    </label>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </label>--}}
            <button type="submit" class="mt-4 px-3 py-1.5 text-sm font-semibold leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Post</button>
        </div>
    </form>
</div>
