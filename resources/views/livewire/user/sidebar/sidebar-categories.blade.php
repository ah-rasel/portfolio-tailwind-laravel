<div class="p-4 bg-gray-100 rounded dark:bg-gray-800">
    <h3 class="pb-4 font-bold tracking-wide">Categories</h3>
    <ul class="space-y-1">
    @foreach ($categories as $category)
     <li>
          <a href="{{ route('posts.of.category',$category) }}" class="flex items-center space-x-2 text-sm hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            <div>{{$category->name." (".$category->posts_count.")"}}</div>
          </a>
      </li>
      @endforeach
    </ul>
  </div>