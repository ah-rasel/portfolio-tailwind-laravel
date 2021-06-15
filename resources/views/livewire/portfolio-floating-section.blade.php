<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">


    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold mb-2">Experience 1</h5>
            <!-- Render when Not Editing -->
            <span wire:click="$set('edit_experience_1', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
    @if(!$edit_experience_1)
        <!-- Render When Not editing -->
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Title :<span class="ml-1 font-normal">{{$data['experience_1_title']}}</span></p>
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Sub Title :<span class="ml-1 font-normal">{{$data['experience_1_subtitle']}}</span></p>
        @else
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold">Title</label>
                <input wire:model.defer="data.experience_1_title" type="text" id="button-text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-link" class="text-sm font-semibold">Sub Title</label>
                <input wire:model.defer="data.experience_1_subtitle" type="text" id="button-link" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <span wire:click="save('edit_experience_1')" class="text-blue-700 underline cursor-pointer">Save</span>
        @endif
    </div>

    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold mb-2">Experience 2</h5>
            <!-- Render when Not Editing -->
            <span wire:click="$set('edit_experience_2', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
    @if(!$edit_experience_2)
        <!-- Render When Not editing -->
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Title :<span class="ml-1 font-normal">{{$data['experience_2_title']}}</span></p>
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Sub Title :<span class="ml-1 font-normal">{{$data['experience_2_subtitle']}}</span></p>
        @else
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold">Title</label>
                <input wire:model.defer="data.experience_2_title" type="text" id="button-text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-link" class="text-sm font-semibold">Sub Title</label>
                <input wire:model.defer="data.experience_2_subtitle" type="text" id="button-link" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <span wire:click="save('edit_experience_2')" class="text-blue-700 underline cursor-pointer">Save</span>
        @endif
    </div>

    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold mb-2">Experience 3</h5>
            <!-- Render when Not Editing -->
            <span wire:click="$set('edit_experience_3', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
    @if(!$edit_experience_3)
        <!-- Render When Not editing -->
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Title :<span class="ml-1 font-normal">{{$data['experience_3_title']}}</span></p>
            <p class="mr-4 text-gray-600 dark:text-gray-300 font-semibold">Sub Title :<span class="ml-1 font-normal">{{$data['experience_3_subtitle']}}</span></p>
        @else
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold">Title</label>
                <input wire:model.defer="data.experience_3_title" type="text" id="button-text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-link" class="text-sm font-semibold">Sub Title</label>
                <input wire:model.defer="data.experience_3_subtitle" type="text" id="button-link" value="Development Experience" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <span wire:click="save('edit_experience_3')" class="text-blue-700 underline cursor-pointer">Save</span>
        @endif
    </div>


</div>

