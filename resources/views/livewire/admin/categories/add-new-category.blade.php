<div class="">
    <form wire:submit.prevent="AddCategory()" action="" method="POST" class="mt-4">
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Category Name</span>
                <input wire:model="name" class="block w-full mt-1.5 border-none text-sm ring-1 ring-purple-300 py-1.5 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:text-gray-300" placeholder="How to boil water ?">
                @error('name') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
                @error('slug') <span class="text-xs font-semibold text-red-600 dark:text-red-400">There is already a post with this title</span>
                <br> @enderror
                <span class="text-xs font-semibold text-gray-600 dark:text-red-400">{{url('/').'/post/'.$slug}}</span>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Post Content</span>
                <textarea wire:model.defer="description" class="block w-full mt-1.5 text-sm dark:text-gray-300 ring-1 ring-purple-300 py-1 px-1.5 rounded dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 dark:focus:shadow-outline-gray" rows="6" placeholder="Enter some long form content." spellcheck="false"></textarea>
                @error('content') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
            </label>
            <button type="submit" class="mt-4 px-3 py-1.5 text-sm font-semibold leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Category</button>
        </div>
    </form>
</div>
