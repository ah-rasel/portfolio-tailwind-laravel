<div class="col-span-6 bg-gray-50 dark:bg-gray-700 p-4 rounded-md">

    <!-- Post content -->
    <div class="space-y-3">
     <div class="text-xl font-bold">{{$post->title}}</div>
     <div class="flex space-x-4 text-gray-500 dark:text-gray-300 text-xs font-semibold">

      <div class="flex space-x-1.5 justify-center items-center">
          <img class="h-7 w-7 rounded-full border-2 border-white dark:border-gray-50 shadow object-cover object-top" 
          src="{{$post->user->profile_photo_url}}" alt="Image of Md rasel">
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
    @livewire('user.post.comment-and-replies',['post' => $post])
  </div>
