<div wire:poll class="p-5 rounded-md shadow bg-white dark:bg-gray-800">
    <h4 class="font-bold">Recent Comments</h4>
    <div class="">
        <ul class="mt-2 space-y-1">
            @foreach ($comments as $comment)
                <li title="Commented on : Hello">
                    <a href="#" class="text-blue-500">{{$comment->user->name}}</a> Commented on a
                    <a href="{{route('post.view',$comment->post)}}" class="text-blue-500">post</a>
                    <span class="text-xs text-gray-400 ml-2">{{$comment->date_to_display}}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>