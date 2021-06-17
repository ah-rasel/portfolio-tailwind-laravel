<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
    <div class="">
        <h5 class="font-semibold">Works</h5>
        <!-- Render When Not editing -->
        @if(!$contact_slug)
            <div class="flex items-center mt-1">
                <label class="text-sm font-semibold" for="">Slug : </label>
                <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['contact_slug']}}</p>
                <a wire:click="$set('contact_slug', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>

        @else

            <div class="flex items-center space-x-4">
                <label class="text-sm font-semibold" for="">Slug : </label>
                <input wire:model.defer="data.contact_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span wire:click="" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
                <span wire:click="$set('contact_slug',false)" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
            </div>
        @endif

        @if(!$contact_title)
            <div class="flex items-center mt-1">
                <label class="text-sm font-semibold" for="">Title : </label>
                <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['contact_title']}}</p>
                <a wire:click="$set('contact_title', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>

        @else

            <div class="flex items-center space-x-4">
                <label class="text-sm font-semibold" for="">Title : </label>
                <input wire:model.defer="data.contact_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span wire:click="" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
                <span wire:click="$set('contact_title',false)" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
            </div>
        @endif

    </div>
    <div class="md:flex md:space-x-2">

        <div class="flex-1 space-y-2">
            <span class="font-semibold">Phone</span><span wire:click="$set('add_phone',true)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Add New Phone Number</span>
            <div class="flex flex-col space-y-1">
                @if($edit_individual_phone)
                <div class="flex">
                    <input wire:model="new_phone_number" type="text" name="" id="" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                    <span wire:click="Update('contact_details','phones','edit_individual_phone')" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Update</span>
                    <span wire:click="$set('edit_individual_phone',false)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Cancel</span>
                </div>
                @endif
                @foreach($data['contact_details']['phones'] as $key=>$phone)
                <div class=""><span>{{$phone}}</span> <span wire:click="ReqEdit('contact_details','phones','{{$key}}','edit_individual_phone')" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Edit</span>
                    <span wire:click="Delete('contact_details','phones','{{$key}}')" class="text-red-500 text-sm font-semibold ml-4 cursor-pointer">Delete</span>
                </div>
                @endforeach
                @if($add_phone)
                <div class="flex">
                    <input wire:model="new_phone_number" type="text" name="" id="" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                    <span wire:click="Add('contact_details','phones','add_phone')" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Save</span>
                    <span wire:click="$set('add_phone',false)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Cancel</span>
                </div>
                @endif
            </div>
        </div>

        <div class="flex-1 space-y-2">
            <span class="font-semibold">Email</span><span wire:click="$set('add_email',true)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Add New Email</span>
            <div class="flex flex-col space-y-1">
                @if($edit_individual_email)
                    <div class="flex">
                        <input wire:model="new_phone_number" type="text" name="" id="" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                        <span wire:click="Update('contact_details','emails','edit_individual_email')" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Update</span>
                        <span wire:click="$set('edit_individual_email',false)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Cancel</span>
                    </div>
                @endif
                @foreach($data['contact_details']['emails'] as $key=>$email)
                    <div class=""><span>{{$email}}</span>
                        <span wire:click="ReqEdit('contact_details','emails','{{$key}}','edit_individual_email')"
                              class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Edit</span>
                        <span wire:click="Delete('contact_details','emails','{{$key}}')" class="text-red-500 text-sm font-semibold ml-4 cursor-pointer">Delete</span>
                    </div>
                @endforeach
                @if($add_email)
                    <div class="flex">
                        <input wire:model="new_phone_number" type="text" name="" id="" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                        <span wire:click="Add('contact_details','emails','add_email')" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Save</span>
                        <span wire:click="$set('add_email',false)" class="text-blue-500 text-sm font-semibold ml-4 cursor-pointer">Cancel</span>
                    </div>
                @endif
            </div>
        </div>

    </div>

</div>
