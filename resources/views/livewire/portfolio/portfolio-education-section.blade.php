<div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">

    <div class="">
        <div class="flex space-x-3 items-center">
            <h5 class="font-semibold">Journey</h5>
            <!-- Render when Not Editing -->
            @if(!$edit_journey)
            <span wire:click="$set('edit_journey', true)" class="text-sm font-semibold text-blue-600 cursor-pointer">Edit</span>
            @else
            <span wire:click="save('edit_journey')" class="text-sm font-semibold text-blue-600 cursor-pointer">Save</span>
            @endif
        </div>
        <!-- Render When Not editing -->
        @if(!$edit_journey)
        <p class="mr-4 text-gray-600 dark:text-gray-300">Slug :<span class="ml-1">{{$data['edu_slug']}}</span></p>
        <p class="mr-4 text-gray-600 dark:text-gray-300">Title :<span class="ml-1 ">{{$data['edu_title']}}</span></p>
        @elseif($edit_journey)
            <label class="block" for="journey_slug">Slug</label>
            <input wire:model.defer="data.edu_slug" id="journey_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
            <label class="block" for="journey_slug">Title</label>
            <input wire:model.defer="data.edu_title" id="journey_slug" type="text" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
        @endif
    </div>
    <div class="md:flex md:space-x-2">
        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Education</h5>
                <span wire:click="$set('add_education', true)" class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
            </div>

            @if($add_education)
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="">
                        <label for="degree" class="font-semibold text-sm block">Degree</label>
                        <input wire:model.defer="edu_degree" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <label for="degree" class="font-semibold text-sm block">Department</label>
                        <input wire:model.defer="edu_dept" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <label for="degree" class="font-semibold text-sm block">Year</label>
                        <input wire:model.defer="edu_year" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                    </div>
                    <span wire:click="Add('education','add_education')" class="text-sm font-semibold text-blue-600 cursor-pointer">Save</span>
                </div>
            @endif
            @foreach($data['education'] as $key => $education)
            <!-- Single Education -->
            <div class="p-3 border shadow-sm rounded-md">
                <div class="">
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$education['title']}}</p>
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$education['dept']}}</p>
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$education['year']}}</p>
                    <span wire:click="Delete('education','{{$key}}')" class="text-sm font-semibold text-blue-600 cursor-pointer">Delete</span>
                </div>
            </div>
            @endforeach

        </div>

        <div class="flex-1 space-y-2">
            <div class="flex items-center">
                <h5 class="font-semibold mr-3">Experience</h5>
                <span wire:click="$set('add_experience', true)" class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
            </div>

            @if($add_experience)
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="">
                        <label for="degree" class="font-semibold text-sm block">Degree</label>
                        <input wire:model.defer="edu_degree" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <label for="degree" class="font-semibold text-sm block">Department</label>
                        <input wire:model.defer="edu_dept" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <label for="degree" class="font-semibold text-sm block">Year</label>
                        <input wire:model.defer="edu_year" id="degree" type="text" value="HSC" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                    </div>
                    <span wire:click="Add('experience','add_experience')" class="text-sm font-semibold text-blue-600 cursor-pointer">Save</span>
                </div>
            @endif
            @foreach($data['experience'] as $key => $experience)
            <!-- Single Education -->
            <div class="p-3 border shadow-sm rounded-md">
                <div class="">
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$experience['title']}}</p>
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$experience['dept']}}</p>
                    <p class="mr-4 text-gray-600 dark:text-gray-300">{{$experience['year']}}</p>
                    <span wire:click="Delete('experience','{{$key}}')" class="text-sm font-semibold text-blue-600 cursor-pointer">Delete</span>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</div>
