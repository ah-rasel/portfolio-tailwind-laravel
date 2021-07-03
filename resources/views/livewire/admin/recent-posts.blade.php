<div class="p-5 rounded-md shadow bg-white dark:bg-gray-800">
    <h4 class="font-bold">New Posts</h4>
    <div class="">
        <ul class="mt-2 text-blue-500 dark:text-blue-400 space-y-1">
           @foreach ($posts as $post)
            <li>
                <a href="{{route('post.view',$post)}}" class="">
                    <span class="mr-2 ">{{$loop->iteration}}.</span>
                    {{$post->title}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>