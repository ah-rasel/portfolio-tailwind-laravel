<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">

    <div class="">
        <h5 class="font-semibold">Expertise Area</h5>
        <!-- Render When Not editing -->
        @if(!$expertise_slug)
            <div class="flex items-center mt-1">
                <label class="text-sm font-semibold" for="">Slug : </label>
                <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['expertise_slug']}}</p>
                <a wire:click="$set('expertise_slug', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>

        @else

            <div class="flex items-center space-x-4">
                <input wire:model="data.expertise_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
        @endif

        @if(!$expertise_title)
            <div class="flex items-center mt-1">
                <label class="text-sm font-semibold" for="">Title : </label>
                <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['expertise_title']}} </p>
                <a wire:click="$set('expertise_title', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>

        @else

            <div class="flex items-center space-x-4">
                <input wire:model="data.expertise_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
        @endif

    </div>
    <div class="md:flex md:space-x-2">
        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Expertise Left</h5>
                <span wire:click="$set('add_expertise_left', true)" class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
            </div>
            <!-- Add Expertise -->

            @if($add_expertise_left)
            <div class="p-3 border shadow-sm rounded-md">
                <form wire:submit.prevent="Add('expertise_left','add_expertise_left')" action="">
                    <div class="space-x-4">
                        <label for="left_add_expertise_title" class="text-sm font-semibold">Title</label>
                        <input wire:model.lazy="new_expertise_title" id="left_add_expertise_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                    </div>
                    <div class="space-x-4">
                        <label for="left_add_expertise_slug" class="text-sm font-semibold">Value</label>
                        <input wire:model.lazy="new_expertise_value" id="left_add_expertise_slug" type="text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                    </div>

                    <div class="flex justify-center space-x-4 mt-3">
                        <span wire:click="$set('add_expertise_left', false)," class="cursor-pointer text-red-500 underline">Cancel</span>
                        <button type="submit" class="cursor-pointer text-blue-600 underline">Save</button>
                    </div>
                </form>

            </div>
            @endif

            @if($edit_individual_expertise_left)
                <div class="p-3 border shadow-sm rounded-md">
                    <form wire:submit.prevent="UpdateExpertise('expertise_left')" action="">
                        <div class="space-x-4">
                            <label for="right_add_expertise_title" class="text-sm font-semibold">Title</label>
                            <input wire:model.lazy="new_expertise_title" id="right_add_expertise_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="space-x-4">
                            <label for="right_add_expertise_slug" class="text-sm font-semibold">Value</label>
                            <input wire:model.lazy="new_expertise_value" id="right_add_expertise_slug" type="text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>

                        <div class="flex justify-center space-x-4 mt-3">
                            <span wire:click="$set('edit_individual_expertise', false)," class="cursor-pointer text-red-500 underline">Cancel</span>
                            <button type="submit" class="cursor-pointer text-blue-600 underline">Save</button>
                        </div>
                    </form>

                </div>
            @endif

            @foreach($data['expertise_left'] as $key=>$expertise)
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="flex items-center">
                        <label for="expertise_title" class="text-sm font-semibold">Title : </label>
                        <p id="expertise_title" class="mx-2 text-gray-600 dark:text-gray-300">{{$expertise['title']}}</p>
                    </div>
                    <div class="flex items-center">
                        <label for="expertise_slug" class="text-sm font-semibold">Value : </label>
                        <p id="expertise_slug" class="mx-2 text-gray-600 dark:text-gray-300">{{$expertise['value']}}</p>
                    </div>
                    <div class="flex space-x-4 mt-1">
                        <span wire:click="ReqEdit('expertise_left','{{$key}}','edit_individual_expertise_left')" class="cursor-pointer text-blue-600 underline">Edit</span>
                        <span wire:click="Delete('expertise_left','{{$key}}')" class="cursor-pointer text-red-500 underline">Delete</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Expertise Right</h5>
                <span wire:click="$set('add_expertise_right', true)," class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
            </div>
            <!-- Add Expertise -->
            @if($add_expertise_right)
                <div class="p-3 border shadow-sm rounded-md">
                    <form wire:submit.prevent="Add('expertise_right','add_expertise_right')" action="">
                        <div class="space-x-4">
                            <label for="right_add_expertise_title" class="text-sm font-semibold">Title</label>
                            <input wire:model.lazy="new_expertise_title" id="right_add_expertise_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="space-x-4">
                            <label for="right_add_expertise_slug" class="text-sm font-semibold">Value</label>
                            <input wire:model.lazy="new_expertise_value" id="right_add_expertise_slug" type="text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>

                        <div class="flex justify-center space-x-4 mt-3">
                            <span wire:click="$set('add_expertise_right', false)," class="cursor-pointer text-red-500 underline">Cancel</span>
                            <button type="submit" class="cursor-pointer text-blue-600 underline">Save</button>
                        </div>
                    </form>

                </div>
            @endif

            @if($edit_individual_expertise_right)
                <div class="p-3 border shadow-sm rounded-md">
                    <form wire:submit.prevent="UpdateExpertise('expertise_right')" action="">
                        <div class="space-x-4">
                            <label for="right_add_expertise_title" class="text-sm font-semibold">Title</label>
                            <input wire:model.lazy="new_expertise_title" id="right_add_expertise_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="space-x-4">
                            <label for="right_add_expertise_slug" class="text-sm font-semibold">Value</label>
                            <input wire:model.lazy="new_expertise_value" id="right_add_expertise_slug" type="text"  class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>

                        <div class="flex justify-center space-x-4 mt-3">
                            <span wire:click="$set('edit_individual_expertise', false)," class="cursor-pointer text-red-500 underline">Cancel</span>
                            <button type="submit" class="cursor-pointer text-blue-600 underline">Save</button>
                        </div>
                    </form>

                </div>
            @endif
            @foreach($data['expertise_right'] as $key=>$expertise)
            <div class="p-3 border shadow-sm rounded-md">
                <div class="flex items-center">
                    <label for="expertise_title" class="text-sm font-semibold">Title : </label>
                    <p id="expertise_title" class="mx-2 text-gray-600 dark:text-gray-300">{{$expertise['title']}}</p>
                </div>
                <div class="flex items-center">
                    <label for="expertise_slug" class="text-sm font-semibold">Value : </label>
                    <p id="expertise_slug" class="mx-2 text-gray-600 dark:text-gray-300">{{$expertise['value']}}</p>
                </div>
                <div class="flex space-x-4 mt-1">
                    <span wire:click="ReqEdit('expertise_right','{{$key}}','edit_individual_expertise_right')" class="cursor-pointer text-blue-600 underline">Edit</span>
                    <span wire:click="Delete('expertise_right','{{$key}}')" class="cursor-pointer text-red-500 underline">Delete</span>
                </div>
            </div>
            @endforeach
{{--            <div class="p-3 border shadow-sm rounded-md">--}}
{{--                <div class="flex items-center">--}}
{{--                    <label for="expertise_title" class="text-sm font-semibold">Title : </label>--}}
{{--                    <p id="expertise_title" class="mx-4 text-gray-600 dark:text-gray-300">Facebook Marketing</p>--}}
{{--                    <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>--}}
{{--                </div>--}}
{{--                <div class="flex items-center space-x-4">--}}
{{--                    <input type="text" value="HSC" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">--}}
{{--                    <span class="px-4 cursor-pointer text-blue-600 underline">save</span>--}}
{{--                </div>--}}
{{--                <div class="flex items-center">--}}
{{--                    <label for="expertise_slug" class="text-sm font-semibold">Value : </label>--}}
{{--                    <p id="expertise_slug" class="mr-4 text-gray-600 dark:text-gray-300">50%</p>--}}
{{--                    <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>--}}
{{--                </div>--}}
{{--                <div class="flex items-center space-x-4">--}}
{{--                    <input type="text" value="50%" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">--}}
{{--                    <span class="px-4 cursor-pointer text-blue-600 underline">save</span>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>
    </div>
</div>
