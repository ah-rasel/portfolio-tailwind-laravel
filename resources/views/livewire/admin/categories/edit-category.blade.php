<div class="">
    <form wire:submit.prevent="Update" action="" method="POST" class="mt-4">
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-lg dark:bg-gray-800">
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
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Category Name</span>
                <input wire:model="category.name" class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-1.5 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300" placeholder="How to boil water ?">
                @error('category.name') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
                @error('category.slug') <span class="text-xs font-semibold text-red-600 dark:text-red-400">There is already a post with this title</span>
                <br> @enderror
                <span class="text-xs font-semibold text-gray-600 dark:text-red-400">{{url('/').'/post/'.$category->slug}}</span>
            </label>
            <label class="block mt-4 text-sm" for="description">
                <span class="font-semibold text-gray-700 dark:text-gray-400">Edit Category Description</span>
                <x-rich-editor wire:model="category.description" id="description" :initial-value="$category->description"></x-rich-editor>
                @error('category.description') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
            </label>
            <button type="submit" class="mt-4 px-3 py-1.5 text-sm font-semibold leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Category</button>
        </div>
    </form>
</div>
