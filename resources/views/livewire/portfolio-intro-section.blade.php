<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
    <div class="">
        <h5 class="font-semibold">Intro Slug</h5>
        @if(!$edit_intro_slug)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['i_slug']}}</p>
            <span wire:click="$set('edit_intro_slug', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.i_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_intro_slug')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
         @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Intro Title</h5>
        @if(!$edit_intro_title)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['i_title']}}</p>
            <span wire:click="$set('edit_intro_title', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.i_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_intro_title')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
        @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Intro Description</h5>
    @if(!$edit_intro_description)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['i_des']}}</p>
            <span wire:click="$set('edit_intro_description', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <textarea wire:model.defer="data.i_des" name="" id="" cols="30" rows="3" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm"></textarea>
            <span wire:click="save('edit_intro_description')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
        @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Interests title</h5>
    @if(!$edit_interest_title)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['int_title']}}</p>
            <span wire:click="$set('edit_interest_title', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.int_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_interest_title')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
        @endif
    </div>
    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold">Interests</h5>
            <!-- Render when Not Editing -->
            @if(!$edit_interests)
            <span wire:click="$set('edit_interests', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
            @else
            <span wire:click="save('edit_interests')" class="text-sm font-semibold text-blue-600 cursor-pointer">Save</span>
                @endif
        </div>
    @if(!$edit_interests)
        <!-- Render When Not editing -->
        <p class="mr-4 text-gray-600 dark:text-gray-300">Interest 1 :<span class="ml-1">{{$data['int_1_t']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Interest 2 :<span class="ml-1">{{$data['int_2_t']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Interest 3 :<span class="ml-1">{{$data['int_3_t']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Interest 4 :<span class="ml-1">{{$data['int_4_t']}}</span></p>
        @else
        <form wire:submit.prevent="save('edit_interests')" class="space-y-3">
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold block">Interest 1</label>
                <input wire:model.defer="data.int_1_t" type="text" name="" id="button-text" value="Download C" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <input type="text" name="" id="button-text" value="" placeholder="Icon 1" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold block">Interest 2</label>
                <input wire:model.defer="data.int_2_t" type="text" name="" id="button-text" value="Download C" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <input type="text" name="" id="button-text" value="" placeholder="Icon 2" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold block">Interest 3</label>
                <input wire:model.defer="data.int_3_t" type="text" name="" id="button-text" value="Download C" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <input type="text" name="" id="button-text" value="" placeholder="Icon 3" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold block">Interest 4</label>
                <input wire:model.defer="data.int_4_t" type="text" name="" id="button-text" value="Download C" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <input type="text" name="" id="button-text" value="" placeholder="Icon 4" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>

            <button type="submit" class="text-blue-700 underline">Save</button>
        </form>
        @endif
    </div>
</div>
