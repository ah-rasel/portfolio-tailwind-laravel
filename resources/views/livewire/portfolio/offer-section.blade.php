<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">

    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold">Offers</h5>
            @if(!$edit_offer)
            <!-- Render when Not Editing -->
            <span wire:click="$set('edit_offer', true)" class="text-sm font-semibold text-blue-600 underline cursor-pointer">Edit</span>
            @else
            <span wire:click="save('edit_offer')" class="text-sm font-semibold text-blue-600 underline cursor-pointer">Save</span>
            @endif
            <span wire:click="$set('add_offer',true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Add New</span>
        </div>
    @if(!$edit_offer)
        <!-- Render When Not editing -->
        <p class="mr-4 text-gray-600 dark:text-gray-300">Slug :<span class="ml-1">{{$data['offer_slug']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Title :<span class="ml-1 ">What I Of{{$data['offer_title']}}fer</span></p>
        @else
         <label for="slug" class="block text-sm font-semibold">Slug</label>
         <input wire:model.defer="data.offer_slug" id="slug" type="text" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <label for="title" class="block text-sm font-semibold">Slug</label>
         <input wire:model.defer="data.offer_title" id="title" type="text" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
          <span wire:click="save('edit_offer')" class="text-sm font-semibold text-blue-600 underline cursor-pointer">Save</span>

        @endif

    </div>
    <div class="space-y-2">
        <div class="grid md:grid-cols-2 gap-3">
            @if($add_offer)
                <div class="shadow border rounded-md p-3">
                    <div class="flex space-x-3 items-center">
                        <h5 class="font-semibold">Add New Offer</h5>
                        <!-- Render when Not Editing -->
                        <span wire:click="$set('add_offer',false)" class="text-sm font-semibold text-blue-600 cursor-pointer">Cancel</span>
                    </div>
                    <form wire:submit.prevent="Add('offers','add_offer')" class="">
                        <div class="space-x-3">
                            <label for="offer-title" class="text-sm font-semibold">Title</label>
                            <input wire:model.defer="new_offer_title" type="text" name="" id="offer-title" value="Download C"
                                   class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="space-x-3">
                            <label for="button-link" class="text-sm font-semibold">Text</label>
                            <textarea wire:model.defer="new_offer_text" name="" id="" cols="30" rows="3" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm"></textarea>
                        </div>
                        <div class="space-x-3">
                            <label for="button-icon" class="text-sm font-semibold">Icon</label>
                            <input wire:model.defer="new_offer_icon" type="text" name="" id="button-icon" value="https://facebook.com" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <button type="submit" class="text-blue-700 underline">Save</button>
                    </form>

                </div>
                @endif
            @if($edit_individual_offer)
                    <div class="shadow border rounded-md p-3">
                        <div class="flex space-x-3 items-center">
                            <h5 class="font-semibold"> Edit Offer</h5>
                            <!-- Render when Not Editing -->
                            <span wire:click="$set('edit_individual_offer',false)" class="text-sm font-semibold text-blue-600 cursor-pointer">Cancel</span>
                        </div>
                        <form wire:submit.prevent="UpdateOffer()" class="">
                            <div class="space-x-3">
                                <label for="offer-title" class="text-sm font-semibold">Title</label>
                                <input wire:model.defer="new_offer_title" type="text" name="" id="offer-title" value="Download C"
                                       class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            </div>
                            <div class="space-x-3">
                                <label for="button-link" class="text-sm font-semibold">Text</label>
                                <textarea wire:model.defer="new_offer_text" name="" id="" cols="30" rows="3" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm"></textarea>
                            </div>
                            <div class="space-x-3">
                                <label for="button-icon" class="text-sm font-semibold">Icon</label>
                                <input wire:model.defer="new_offer_icon" type="text" name="" id="button-icon" value="https://facebook.com" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            </div>
                            <button type="submit" class="text-blue-700 underline">Save</button>
                        </form>

                    </div>
                @endif

            @foreach($data['offers'] as $key => $offer)
            <div class="shadow border rounded-md p-3">
                <div class="flex space-x-3 items-center">
                    <h5 class="font-semibold">Offer {{$loop->iteration}}</h5>
                    <!-- Render when Not Editing -->
                    <span wire:click="ReqEdit('offers','{{$key}}')" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
                    <span wire:click="Delete('offers','{{$key}}')" class="text-sm font-semibold text-blue-600 cursor-pointer">Delete</span>
                </div>
                <!-- Render When Not editing -->
                <p class="mr-4 text-gray-600 dark:text-gray-300 font-bold">Title :<span class="ml-1 font-normal">{{$offer['title']}}</span></p>
                <p class="mr-4 text-gray-600 dark:text-gray-300 font-bold">Text :<span class="ml-1  font-normal">
                    {{$offer['text']}}
                    </span></p>
            </div>
            @endforeach

        </div>
    </div>

</div>
