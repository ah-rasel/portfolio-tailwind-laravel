<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
    <div class="">
        <h5 class="font-semibold">Greeting</h5>
        <!-- Render When Not editing -->
        @if(!$edit_greeting)
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['greeting']}}</p>
            <span wire:click="$set('edit_greeting', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.greeting" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_greeting')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
        @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Display Name</h5>
        @if(!$edit_display_name)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['display_name']}}</p>
            <span wire:click="$set('edit_display_name', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.display_name" type="text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_display_name')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
            @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Typing title</h5>
        @if(!$edit_typing_title)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['typing_title']}}</p>
            <span wire:click="$set('edit_typing_title', true)" class="text-sm font-semibold cursor-pointer text-blue-600">Edit</span>
        </div>
        @else
        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.typing_title" type="text" class="text-sm w-72 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_typing_title')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>
            @endif
    </div>
    <div class="">
        <h5 class="font-semibold">Favourite Quote</h5>
        @if(!$edit_favourite_quote)
        <!-- Render When Not editing -->
        <div class="flex items-center mt-1">
            <p class="mr-4 text-gray-600 dark:text-gray-300">{{$data['favourite_quote']}}</p>
            <span wire:click="$set('edit_favourite_quote', true)" class="text-sm font-semibold cursor-pointer text-blue-600">Edit</span>
        </div>
        @else

        <div class="flex items-center space-x-4">
            <input wire:model.defer="data.favourite_quote" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('edit_favourite_quote')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
        </div>

       @endif

    </div>
    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold">Buton 1</h5>
            <!-- Render when Not Editing -->
            @if(!$edit_button_1)
            <span wire:click="$set('edit_button_1', true)" class="text-sm font-semibold cursor-pointer text-blue-600">Edit</span>
            @endif
        </div>
        @if(!$edit_button_1)
        <!-- Render When Not editing -->
        <p class="mr-4 text-gray-600 dark:text-gray-300">Text :<span class="ml-1">{{$data['top_button_1_text']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Link :<span class="ml-1 text-blue-600 underline">{{$data['top_button_1_link']}}</span></p>
            @else
        <form wire:submit.prevent="save('edit_button_1')" class="" method="POST">
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold">Button Text</label>
                <input wire:model.defer="data.top_button_1_text" type="text" name="" id="button-text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-link" class="text-sm font-semibold">Button Link</label>
                <input wire:model.defer="data.top_button_1_link" type="text" name="" id="button-link" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <button type="submit" class="text-blue-700 underline">Save</button>
        </form>
            @endif
    </div>
    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold">Buton 2</h5>
            <!-- Render when Not Editing -->
            @if(!$edit_button_2)
            <span wire:click="$set('edit_button_2', true)" class="text-sm font-semibold cursor-pointer text-blue-600">Edit</span>
            @endif
        </div>
        @if(!$edit_button_2)
        <!-- Render When Not editing -->
        <p class="mr-4 text-gray-600 dark:text-gray-300">Text :<span class="ml-1">{{$data['top_button_2_text']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Link :<span class="ml-1 text-blue-600 underline">{{$data['top_button_2_link']}}</span></p>
            @else
        <form wire:submit.prevent="save('edit_button_2')" class="" method="POST">
            @csrf
            <div class="space-x-3">
                <label for="button-text" class="text-sm font-semibold">Button Text</label>
                <input wire:model.defer="data.top_button_2_text" type="text" name="" id="button-text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <div class="space-x-3">
                <label for="button-link" class="text-sm font-semibold">Button Link</label>
                <input wire:model.defer="data.top_button_2_link" type="text" name="" id="button-link" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            </div>
            <button type="submit" class="text-blue-700 underline">Save</button>
        </form>
            @endif
    </div>
</div>
