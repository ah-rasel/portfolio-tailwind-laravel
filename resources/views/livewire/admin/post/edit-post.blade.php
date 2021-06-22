<div class="mt-6">
    <form wire:submit.prevent="Update()" action="" method="POST">
        @csrf
        <div class="grid grid-cols-8 gap-3">
            <div class="col-span-6 px-4 py-3 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Post Title</span>
                    <input wire:model="post.title" class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-1.5 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300" placeholder="How to boil water ?">
                    @error('post.title') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                    <br> @enderror
                    @error('post.slug') <span class="text-xs font-semibold text-red-600 dark:text-red-400">There is already a post with this title</span>
                    <br> @enderror
                    <span class="text-xs font-semibold text-gray-600 dark:text-red-400">{{url('/').'/post/'.$post->slug}}</span>
                </label>
                <label class="block mt-4 text-sm font-bold">
                    Post Content
                </label>
                <x-rich-editor wire:model="post.content" id="content" :initial-value="$post->content"></x-rich-editor>
                @error('post.content') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
                <button type="submit" class="mt-4 px-3 py-1.5 text-sm font-semibold leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Update Post</button>
            </div>

            <div class="col-span-2 px-4 py-3 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <p class="font-bold my-3">Post category</p>
                <div class="flex flex-col">
                    <x-blog.categories-tree-view :parent-categories="$parentCategories" calling-place="show-tree" :previous-category="$post->category->id"></x-blog.categories-tree-view>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400 font-semibold">
                          Select Parent Category
                        </span>
                        <select wire:model="parent_id" class="block w-full mt-1 text-sm dark:text-gray-300 rounded
                         dark:border-gray-600 dark:bg-gray-700 
                         form-select focus:border-purple-400 focus:outline-none 
                         focus:shadow-outline-purple dark:focus:shadow-outline-gray">

                          <option  value="null" >Select Parent Category</option>

                          <x-blog.categories-tree-view :parent-categories="$parentCategories" calling-place="show-tree-edit-mode"></x-blog.categories-tree-view>

                        </select>
                    </label>

                    <input wire:model="new_category_name" class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-2 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300" placeholder="How to boil water ?">
                    
                    <span wire:click="AddNewCategory()"  class="mt-6 cursor-pointer px-3 py-1.5 text-sm text-center font-semibold leading-5 text-white transition-colors duration-150 bg-purple-500 border border-transparent rounded active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Add New Category</span>
                </div>
            </div>
        </div>
    </form>
</div>