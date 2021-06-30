<div class="">
    <div class="grid md:grid-cols-10 mt-5 mb-2 min-h-[570px]">
        <div class="hidden md:block col-span-3 h-full w-full pr-3">
            <div class="flex flex-col w-full flex-grow border-l border-r border-gray-100 dark:border-gray-800 bg-gray-100 dark:bg-gray-800">
                <div class="flex-shrink-0 px-4 py-2 border-b text-gray-600 dark:text-gray-300 border-gray-100 dark:border-gray-800 flex items-center justify-between">
                  <div class="text-xs font-semibold">
                      Messages
                  </div>
                  <button wire:click="MarkAllRead()" class="flex items-center text-xs font-semibold focus:outline-none">
                    Mark all as Read
                    <span class="ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                        </svg>
    
                    </span>
                  </button>
    
                </div>
                <div class="flex-1 overflow-y-auto">
                @foreach ($messages as $message)
                   @if ($message->read_status)
                    <div class="group cursor-pointer">
                        <div class="block px-6 pt-2.5 pb-3.5 dark:bg-gray-800 border-t border-t-gray-200 @if($messageToOpen && $messageToOpen->id == $message->id)border-l-4 border-l-blue-400 bg-white dark:bg-gray-900 @else bg-gray-100 @endif dark:border-gray-500 group-hover:bg-gray-200 dark:group-hover:bg-gray-900">
                            <div class="flex justify-between">
                                <span wire:click="MessageToShow({{$message->id}})" class="text-sm font-semibold text-gray-900 dark:text-gray-200">{{$message->name}}</span>
                                <div class="flex space-x-2 text-sm text-gray-400 dark:text-gray-500">
                                    <span wire:click="DeleteMessage({{$message->id}})" class="hover:text-gray-600 dark:hover:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </span>
                                    <span wire:click="ChangeMark({{$message->id}})" title="Read Message" class="text-sm text-gray-400 hover:text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <p wire:click="MessageToShow({{$message->id}})" class="text-sm text-gray-600 dark:text-gray-400">{{\Illuminate\Support\Str::limit($message->message, 40, $end='...')}}</p>
                            <span wire:click="MessageToShow({{$message->id}})" class="text-xs text-gray-400 font-semibold">{{$message->date_to_display}}</span>
                        </div>
                    </div>
                   @else
                    <div class="group cursor-pointer">
                        <div class="block px-6 pt-2.5 pb-3.5 bg-gray-200 dark:bg-gray-700 group-hover:bg-gray-300 dark:group-hover:bg-gray-900">
                            <div class="flex justify-between">
                            <span wire:click="MessageToShow({{$message->id}})" class="text-sm font-semibold text-gray-900 dark:text-gray-200">{{$message->name}}</span>
                            <div class="flex space-x-2 text-sm text-gray-400 dark:text-gray-500">
                                <span wire:click="DeleteMessage({{$message->id}})" class="hover:text-gray-600 dark:hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </span>
                                <span wire:click="ChangeMark({{$message->id}})" class="hover:text-gray-600 dark:hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span>
                            </div>
                            </div>
                            <p wire:click="MessageToShow({{$message->id}})" class="text-sm text-gray-600 dark:text-gray-400">{{\Illuminate\Support\Str::limit($message->message, 20, $end='...')}}</p>
                            <span wire:click="MessageToShow({{$message->id}})" class="text-xs text-gray-400 font-semibold">{{$message->date_to_display}}</span>
                        </div>
                    </div>
                    @endif
    
                @endforeach
                </div>
              </div>
        </div>
        <div class="col-span-6 bg-gray-100 dark:bg-gray-700 h-full w-full px-5 py-7 space-y-4 rounded-sm dark:border-gray-500">
            @if ($individualMessageOpen)
              <article class="mt-3 px-10 pt-6 pb-8 bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="flex items-center justify-between">
                  <p class="text-lg font-semibold">
                    <span class="text-gray-900 dark:text-gray-200">{{$messageToOpen->name}}</span>
                    <span class="text-gray-600 dark:text-gray-400">wrote</span>
                  </p>
                  <div class="flex items-center text-gray-600 dark:text-gray-400">
                    <span class="text-xs ">{{$messageToOpen->date_to_display}}</span>
                    <span wire:click="ChangeMark({{$messageToOpen->id}})" title="Mark as Unread" class="ml-2 text-sm hover:text-gray-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                        </svg>
                    </span>
                  </div>
                </div>
                <div class="mt-6 text-gray-800 dark:text-gray-300 text-sm">
                  <p class="mt-4">
                    {{$messageToOpen->message}}
                  </p>
                  <p class="mt-4 font-semibold text-gray-900 dark:text-gray-300">{{$messageToOpen->name}}</p>
                  <p class="dark:text-gray-400">{{$messageToOpen->email}}</p>
                </div>
              </article>
            @else
              <!-- Show when No Message is selected  -->
              <div class="flex flex-col items-center justify-center h-full space-y-8 group cursor-pointer">
                  <div class="h-16 w-16 rounded-full flex justify-center items-center bg-gray-200 dark:bg-gray-900 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                      </svg>
                      <div class="absolute h-16 w-16 rounded-full flex justify-center items-center bg-gray-300 animate-ping">
    
                      </div>
                  </div>
    
                  <div class="font-semibold">
                    Select a Message to view the contents
                  </div>
              </div>
            @endif
        </div>
    </div>
    {{ $messages->links('livewire.admin.admin-pagination') }}
</div>