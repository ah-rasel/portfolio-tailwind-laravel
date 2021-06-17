<div wire:initial-data="" class="space-y-10">
    <div class="text-center">
        <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['recent_work_slug']}}</h4>
        <h2 class="md:text-2xl text-xl font-bold">{{$data['recent_work_title']}}</h2>
    </div>

    <div class="flex uppercase p-1.5 border rounded-full space-x-2 justify-center w-auto text-xs md:text-sm tracking-wider">
        @foreach($data['recent_work_groups'] as $key=>$group)
            <span wire:click="setGroup('{{$key}}')" id="{{$key}}" class="px-2 md:px-4 rounded-full py-1.5 cursor-pointer @if($selected_group == $key) bg-purple-400 text-white font-semibold @else hover:bg-purple-400 hover:text-white transition-all ease-in-out duration-300 @endif">{{$group}}</span>

        @endforeach
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
        <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
            <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''"
                 class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-gray-400 bg-opacity-75">
                <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                    <div class="z-50">
                        <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                        <p x-text="imgModalDesc" class="text-center text-white"></p>
                    </div>
                </div>
            </div>
        </template>
    @foreach($recent_works['recent_work_items'] as $key=>$work_item)

            <!-- Single Project -->
                <div class="group cursor-pointer h-48 md:h-80 overflow-hidden rounded-sm border shadow">
                    <div class="relative ">
                        <img src="{{asset('/storage/portfolio-photos/'.$work_item['image'])}}" alt="{{$work_item['title']}}" class="h-48 md:h-80 w-full object-cover object-top transform group-hover:scale-110 dark:opacity-90 group-hover:transition-all ease-in-out duration-300">
                        <!-- Text Overlay on Image -->
                        <div class="absolute h-48 md:h-80 w-full bg-purple-500 dark:bg-purple-600  z-20 inset-0 dark:bg-opacity-80 bg-opacity-70 hidden group-hover:block
                                        transition ease-in-out duration-1000 rounded-sm dark:text-gray-500">
                            <div class="flex h-48 md:h-80 justify-center items-center flex-col px-2 md:px-8 space-y-2">
                                <div class="flex space-x-3.5">
                                    <a href="#"
{{--                                       @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/storage/portfolio-photos/'.$work_item['image'])}}', imgModalDesc: 'Car rental' })"--}}
                                       class="h-8 w-8 flex justify-center items-center bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                    <a href="#" class="h-8 w-8 flex justify-center items-center bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="text-center text-sm text-white font-bold">
                                    <h4>{{$work_item['title']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        @endforeach


    </div>
</div>
