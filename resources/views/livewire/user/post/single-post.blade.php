<div class="col-span-6 bg-gray-50 dark:bg-gray-700 p-4 rounded-md">

    <!-- Post content -->
    <div class="space-y-3">
     <div class="text-xl font-bold">{{$post->title}}</div>
     <div class="flex space-x-4 text-gray-500 dark:text-gray-300 text-xs font-semibold">

      <div class="flex space-x-1.5 justify-center items-center">
          <img class="h-7 w-7 rounded-full border-2 border-white dark:border-gray-50 shadow object-cover object-top" src="{{asset('images/rasel.jpg')}}" alt="Image of Md rasel">
          <a href="#" class="hover:text-blue-400">{{$post->user->name}}</a>
      </div>    
      <div class="flex space-x-1.5 justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <span>{{$post->date_to_display}}</span>
          </div>

          <div class="flex space-x-1.5 justify-center items-center hover:text-blue-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
          <a href="{{ route('posts.of.category',$post->category,) }}">{{$post->category->name}}</a>
          </div>
     </div>
     <div class="text-gray-600 dark:text-gray-400 px-1 text-sm">
      <article class="prose prose-sm">
        @php
            echo($post->content);
        @endphp
        </article>
        
     </div>
    </div>

    <!-- Comment Section -->
    <div class="md:pr-40 mt-4 md:mt-8">
        <h4 class="font-bold mb-5">Comments</h4>
      <div class="space-y-3">
          <div class="flex">
            <div class="flex-shrink-0 mr-3">
              <img class="mt-2 rounded-full w-8 h-8 shadow" src="images/rasel.jpg" alt="">
            </div>
            <div class="flex-1 border border-gray-200 dark:border-gray-500 rounded-lg px-3 md:px-6 py-3 leading-relaxed">
              <strong>Md Ferdowsur Rahman</strong> <span class="text-xs text-gray-400">May 24 at 3:34 PM</span>
              <p class="text-sm">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua.
              </p>
              
              <h4 class="my-3 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>
      
              <div class="space-y-4">
                <div class="flex">
                  <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-7 h-7 shadow" src="images/rasel.jpg" alt="">
                  </div>
                  <div class="flex-1 bg-gray-100 dark:bg-gray-600 rounded-lg px-4 py-2 leading-relaxed">
                    <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-xs sm:text-sm">
                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                      sed diam nonumy eirmod tempor invidunt ut labore et dolore
                      magna aliquyam erat, sed diam voluptua.
                    </p>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-7 h-7 shadow" src="images/rasel.jpg" alt="">
                  </div>
                  <div class="flex-1 px-4 py-1.5 leading-relaxed space-y-2">
                    <strong>Sarah</strong>
                    <form action="">
                        <textarea name="" id="" rows="2" class="w-full rounded-lg ring-1 px-3 py-2 focus:ring-purple-600 focus:ring-2 bg-transparent" placeholder="Your Comment"></textarea>
                        <button class="float-right px-3 py-1.5 text-sm bgpurple mt-1 bg-indigo-600 text-white rounded-md">Reply</button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="flex">
            <div class="flex-shrink-0 mr-3">
              <img class="mt-2 rounded-full w-8 h-8 shadow" src="images/rasel.jpg" alt="">
            </div>
            <div class="flex-1 md:px-6 md:py-3 leading-relaxed">
              <strong>Md Ferdowsur Rahman</strong>
              <form action="">
                  <textarea name="" id="" rows="2" class="w-full rounded-lg ring-1 px-3 py-2 focus:ring-purple-600 focus:ring-2 bg-transparent" placeholder="Your Comment"></textarea>
                  <button class="float-right px-3 py-1.5 text-sm bgpurple mt-1 bg-indigo-600 text-white rounded-md">
                      <div class="flex space-x-2 items-center">
                          <span>Add New Comment</span>
                          <span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                          </span>
                      </div>
                  </button>
              </form>
              
              
            </div>
          </div>
          
          
        </div>
    </div>
  </div>
