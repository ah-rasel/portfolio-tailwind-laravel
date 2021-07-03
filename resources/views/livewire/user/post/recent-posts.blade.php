<div class="p-4 bg-gray-100 rounded dark:bg-gray-800">
    <h3 class="pb-4 font-bold tracking-wider">Recent Posts</h3>
    <ul class="space-y-4">

        @foreach ($posts as $post) 
        <li>
          <a href="{{route('post.view',$post)}}" class="flex items-center justify-start space-x-2 text-xs">
          <div class="px-3 text-xl font-bold text-gray-500 dark:text-gray-300">0{{$loop->iteration}}</div> 
          <div class="font-semibold text-blue-400 dark:text-blue-300">{{$post->title}}</div>
          </a>
        </li>
        @endforeach
        
    </ul>
 </div>