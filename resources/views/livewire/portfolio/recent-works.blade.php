<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
    <div class="">
        <h5 class="font-semibold">Works</h5>
        <!-- Render When Not editing -->
        @if(!$work_slug)
        <div class="flex items-center mt-1">
            <label class="text-sm font-semibold" for="">Slug : </label>
            <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['recent_work_slug']}}</p>
            <a wire:click="$set('work_slug', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
        </div>

        @else

        <div class="flex items-center space-x-4">
            <label class="text-sm font-semibold" for="">Slug : </label>
            <input wire:model.defer="data.recent_work_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <span wire:click="save('work_slug')" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
            <span wire:click="$set('work_slug',false)" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
        </div>
        @endif

        @if(!$work_title)
            <div class="flex items-center mt-1">
                <label class="text-sm font-semibold" for="">Title : </label>
                <p class="mr-4 text-gray-600 dark:text-gray-300 ml-2">{{$data['recent_work_title']}}</p>
                <a wire:click="$set('work_title', true)" href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>

        @else

            <div class="flex items-center space-x-4">
                <label class="text-sm font-semibold" for="">Title : </label>
                <input wire:model.defer="data.recent_work_title" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span wire:click="save('work_title')" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
                <span wire:click="$set('work_title',false)" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
            </div>
        @endif

    </div>
    <div class="md:flex md:space-x-2">
        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Portfolio </h5>
                <span wire:click="$set('add_new_work_sample',true)" class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
                @if($add_new_work_sample)
                <span wire:click="$set('add_new_work_sample',false)," class="text-sm text-red-500 underline cursor-pointer mx-3">Cancel Adding New Item</span>
                @endif
            </div>
            @if($add_new_work_sample)
            <!-- Single Education -->
            <div class="p-3 border shadow-sm rounded-md space-y-4">

                <div class="">
                    <div class="h-32 w-32 overflow-hidden bg-red-300">
                        @if($workImage !='')
                            <img src="{{$workImage->temporaryUrl()}}" alt="" class="h-32 w-32 object-cover">
                        @else
                            <img src="{{asset('images/placeholder.png')}}" alt="" class="h-32 w-32 object-cover">
                        @endif
                    </div>
                    <div class="space-y-3">
                        <div class="">
                            <label class="text-sm font-semibold" for="image">Image</label>
                            <input wire:model="workImage" id="image" type="file" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="">
                            <label class="text-sm font-semibold" for="title">Title</label>
                            <input id="title" type="text" wire:model.defer="new_work_title" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        </div>
                        <div class="mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400 text-sm font-semibold">
                              Group
                            </span>
                            <div wire:model.defer="sample_group" class="mt-2 space-x-4">
                                @foreach($data['recent_work_groups'] as $key=>$group)
                                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                    <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="sample_group" value="{{$key}}">
                                    <span class="ml-2 uppercase">{{$group}}</span>
                                </label>
                                @endforeach

                            </div>
                        </div>
                        <span wire:click="Add('recent_work_items','add_new_work_sample')" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
                        <span wire:click="$set('add_new_work_sample',false)" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
                    </div>
                </div>
            </div>
            @endif

            @if($edit_individual_work)
                <div class="p-3 border shadow-sm rounded-md space-y-4">

                    <div class="">
                        <div class="h-32 w-32 overflow-hidden bg-red-300">
                            @if($new_workImage)
                                <img src="{{asset($new_workImage->temporaryUrl())}}" alt="" class="h-32 w-32 object-cover">
                            @elseif($previous_workImage!='')
                                <img src="{{asset('/storage/portfolio-photos/'.$previous_workImage)}}" alt="" class="h-32 w-32 object-cover">
                            @else
                                <img src="{{asset('images/placeholder.png')}}" alt="" class="h-32 w-32 object-cover">
                            @endif
                        </div>
                        <div class="space-y-3">
                            <div class="">
                                <label class="text-sm font-semibold" for="image">Image</label>
                                <input wire:model="new_workImage" id="image" type="file" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            </div>
                            <div class="">
                                <label class="text-sm font-semibold" for="title">Title</label>
                                <input id="title" type="text" wire:model.defer="new_work_title" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            </div>
                            <div class="mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400 text-sm font-semibold">
                              Group
                            </span>
                                <div wire:model.defer="new_group" class="mt-2 space-x-4">
                                    @foreach($data['recent_work_groups'] as $key=>$group)
                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                            <input type="radio"
                                                   class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                   name="sample_group" value="{{$key}}" @if($key == $new_group) checked @endif>
                                            <span class="ml-2 uppercase">{{$group}}</span>
                                        </label>
                                    @endforeach

                                </div>
                            </div>
                            <span wire:click="UpdateWork('recent_work_items','{{$current_key}}')" class="px-4 cursor-pointer text-blue-600 underline">Save</span>
                            <span wire:click="closeEditIndividualWork()" class="px-4 cursor-pointer text-blue-600 underline">Cancel</span>
                        </div>
                    </div>
                </div>
            @endif

            @foreach($data['recent_work_items'] as $key=>$work_item)
                <div class="p-3 border shadow-sm rounded-md space-y-4">
                    <div class="">
                        <div class="h-32 w-32 overflow-hidden bg-red-300">
                            @if($work_item['image'])
                                <img src="{{asset('/storage/portfolio-photos/'.$work_item['image'])}}" alt="" class="h-32 w-32 object-cover">
                                @else
                                <img src="{{asset('images/placeholder.png')}}" alt="" class="h-32 w-32 object-cover">
                            @endif
                        </div>
                        <div class="space-y-1.5">
                            <div class="">
                                <label class="text-sm font-semibold" for="title">Title :</label>
                                <span class="ml-4">{{$work_item['title']}}</span>
                            </div>
                            <div class="">
                                <label class="text-sm font-semibold">Group :</label>
                                <span class="ml-4">{{$data['recent_work_groups'][$work_item['group']] ?? 'The Group has been Deleted'}}</span>
                            </div>
                            <span wire:click="ReqEdit('recent_work_items','{{$key}}','edit_individual_work')" class="px-4 cursor-pointer text-blue-600 underline">edit</span>
                            <span wire:click="Delete('recent_work_items','{{$key}}')" class="px-4 cursor-pointer text-blue-600 underline">Delete</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Work Categories</h5>
                <span wire:click="$set('add_work_categories', true)" class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
                @if($add_work_categories)
                <span wire:click="$set('add_work_categories', false)" class="text-sm text-red-400 underline cursor-pointer">Cancel</span>
                @endif
            </div>
            <!-- Single Education -->
            <div class="p-3 border shadow-sm rounded-md">
                @if($edit_individual_work_group)
                    <div class="flex items-center space-x-4">
                        <input type="text" wire:model.defer="edit_work_category" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span wire:click="UpdateGroup('recent_work_groups','edit_individual_work_group')" class="px-4 cursor-pointer text-blue-600 underline">Update</span>
                        <span wire:click="$set('edit_individual_work_group', false)" class="px-4 cursor-pointer text-red-400 underline ml-4">Cancel</span>
                    </div>
                @endif

                <div class="text-sm">
                    <div class="space-x-4">
                        @foreach($data['recent_work_groups'] as $key=>$group)
                            <br>
                            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                <span class="ml-2 uppercase">{{$loop->iteration." : ".$group}}</span>
                                <span wire:click="ReqEditGroup('recent_work_groups','{{$key}}')" class="cursor-pointer text-blue-400 ml-12">Edit</span>
                                <span wire:click="Delete('recent_work_groups','{{$key}}')" class="cursor-pointer text-red-400 ml-12">Delete</span>
                            </label>

                        @endforeach

                    </div>
                </div>
                    @if($add_work_categories)
                        <div class="flex items-center space-x-4">
                            <input type="text" wire:model ="new_work_category" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            <span wire:click="AddGroup('recent_work_groups','add_work_categories')" class="px-4 cursor-pointer text-blue-600 underline">save</span>
                        </div>
                    @endif


            </div>
        </div>
    </div>
</div>
