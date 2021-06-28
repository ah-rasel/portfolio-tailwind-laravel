<div class="md:pr-40 mt-4 md:mt-8">
    <h4 class="font-bold mb-5">Comments</h4>
  <div class="space-y-3">
      @foreach ($post->comments as $comment)
          
      <div class="flex">
        <div class="flex-shrink-0 mr-3">
          <img class="mt-2 rounded-full w-8 h-8 shadow" src="{{$comment->user->profile_photo_url}}" alt="">
        </div>
        <div class="flex-1 border border-gray-200 dark:border-gray-500 rounded-lg px-3 md:px-6 py-3 leading-relaxed">
          <div class="flex justify-between">
            <div class="">
              <strong>{{$comment->user->name}}</strong> @if(auth()->user() && $post->user->id == auth()->user()->id)<span class="text-xs bg-purple-400 text-white px-1.5 py-1 font-semibold rounded-full">Author</span>@endif <span class="text-xs text-gray-400">{{$comment->date_to_display}}</span>
            </div>
            @if (auth()->user() && $comment->user->id == auth()->user()->id)
            <div class="relative">
              <button 
              wire:click="PerformActionOnComment({{$comment->id}})">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                </svg>
              </button>
               @if ($comment->user->id == auth()->user()->id && $action_on_comment && $action_on_comment_id == $comment->id)
              <ul x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="absolute right-0 w-36 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-2xl dark:border-gray-200 dark:text-gray-300 dark:bg-gray-600"
                  >
                  <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                          href="#">
                          <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                          <span>Edit</span>
                      </a>
                  </li>
                  <li class="flex">
                      <p wire:click="DeleteComment({{$comment->id}})" class="inline-flex cursor-pointer items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                          >
                          <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                  </svg>
                          <span>Delete</span>
                      </p>
                  </li>
              </ul>
               @endif

            </div>
            @endif
          </div>
          
          <p class="text-sm">
            {{$comment->comment}}
          </p>
          <p wire:click="$set('comment_to_reply',{{$comment->id}})" class="text-xs font-semibold tracking-wide underline cursor-pointer my-1.5 text-blue-400">Reply</p>
          
          <h4 class="my-3 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>
  
          <div class="space-y-4">
              {{-- Reply Text --}}
            @foreach ($comment->replies as $reply)
              <div class="flex">
              <div class="flex-shrink-0 mr-3">
                <img class="mt-3 rounded-full w-7 h-7 shadow" src="{{$reply->user->profile_photo_url}}" alt="">
              </div>
              <div class="flex-1 bg-gray-100 dark:bg-gray-600 rounded-lg px-4 py-2 leading-relaxed">
                <div class="flex justify-between">
                  <div class="">
                    <strong>{{$reply->user->name}}</strong>@if(auth()->user() && $post->user->id == auth()->user()->id)<span class="text-xs bg-purple-400 text-white px-1.5 py-1 font-semibold rounded-full">Author</span>@endif <span class="text-xs text-gray-400">{{$reply->date_to_display}}</span>
                  </div>
                  @if (auth()->user() && $reply->user->id == auth()->user()->id)
                  <div class="relative">
                    <button 
                    wire:click="PerformActionOnReply({{$reply->id}})">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                      </svg>
                    </button>
                    @if ($action_on_reply && $action_on_reply_id==$reply->id)
                      <ul x-transition:leave="transition ease-in duration-150"
                          x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                          class="absolute right-0 w-36 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-2xl dark:border-gray-200 dark:text-gray-300 dark:bg-gray-600"
                          >
                          <li class="flex">
                              <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                  href="#">
                                  <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>
                                  <span>Edit</span>
                              </a>
                          </li>
                          <li class="flex">
                              <p wire:click="DeleteReply({{$reply->id}})" class="inline-flex cursor-pointer items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                  >
                                  <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                          </svg>
                                  <span>Delete</span>
                              </p>
                          </li>
                      </ul>
                    @endif
                  </div>
                  @endif
                </div>
                <p class="text-xs sm:text-sm">
                 {{$reply->reply}}
                </p>
                <p wire:click="$set('comment_to_reply',{{$comment->id}})" class="text-xs font-semibold tracking-wide underline cursor-pointer my-1.5 text-blue-400">Reply</p>
              </div>
            </div>
            @endforeach

            {{-- Reply form Box --}}
            @auth
              @if($comment_to_reply && $comment_to_reply == $comment->id)
                <div class="flex">
                  <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-7 h-7 shadow" src="{{auth()->user()->profile_photo_url}}" alt="">
                  </div>
                  <div class="flex-1 px-4 py-1.5 leading-relaxed space-y-2">
                    <strong>{{auth()->user()->name}}</strong>
                    <form wire:submit.prevent="AddReply({{$comment->id}})" action="">
                        <textarea wire:model.defer="reply" name="" id="" rows="2" class="w-full rounded-lg ring-1 px-3 py-2 focus:ring-purple-600 focus:ring-1 bg-transparent" placeholder="Your Comment"></textarea>
                        <button type="submit" class="float-right px-3 py-1.5 text-sm bgpurple mt-1 bg-indigo-600 text-white rounded-md">Reply</button>
                    </form>
                    @error('reply') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                    <br> @enderror
                  </div>
                </div>
                @endif
            @endauth
          </div>
          
        </div>
      </div>

      @endforeach

      {{-- New Comment Box --}}
      @auth
      <div class="flex">
        <div class="flex-shrink-0 mr-3">
          <img class="mt-2 rounded-full w-8 h-8 shadow" src="{{auth()->user()->profile_photo_url}}" alt="">
        </div>
        <div class="flex-1 md:px-6 md:py-3 leading-relaxed">
          <strong>{{auth()->user()->name}}</strong>
          <form wire:submit.prevent="AddComment()" action="">
              <textarea wire:model.defer="comment" name="" id="" rows="2" class="w-full rounded-lg ring-1 px-3 py-2 focus:ring-purple-600 focus:ring-2 bg-transparent" placeholder="Your Comment"></textarea>
              <button type="submit" class="float-right px-3 py-1.5 text-sm bgpurple mt-1 bg-indigo-600 text-white rounded-md">
                  <div class="flex space-x-2 items-center">
                      <span>Comment</span>
                  </div>
              </button>
          </form>
          @error('comment') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
          <br> @enderror
          
        </div>
      </div>

      @else
      <div class="flex">
        <div class="flex-shrink-0 mr-3">
          <img class="mt-2 rounded-full w-8 h-8 shadow" src="/images/rasel.jpg" alt="">
        </div>
        <div class="flex-1 md:px-6 md:py-3 leading-relaxed">
          <strong>Christopher Nolan</strong>
          <div>
              <textarea name="" id="" rows="2" class="w-full rounded-lg ring-1 px-3 py-2 focus:ring-purple-600 focus:ring-2 bg-transparent" placeholder="Your Comment"></textarea>
              <button class="float-right px-3 py-1.5 text-sm bgpurple mt-1 bg-indigo-600 text-white rounded-md" disabled>
                  <div class="flex space-x-2 items-center">
                      <span>Login to Comment on this Post</span>
                      <span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                      </span>
                  </div>
              </button>
          </div>
          
          
        </div>
      </div>
      @endauth
    </div>
</div>
