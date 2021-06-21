<div class="col-span-6 space-y-2">
    <div class="items-center justify-between mb-4 space-y-2 md:flex md:space-y-0">
        <div class="">
            <h3 class="text-xl font-bold">Posts Under " {{$category->name}} " Category</h3>
        </div>

        <div class="md:w-96">
            <x-input.search placeholder="Search for Topics" ></x-blog-search>
        </div>
    </div>
    @foreach ($posts as $post)
        <x-blog.item :item-title="$post->title" :count-value="$loop->iteration" :link-text="route('post.view',$post)"></x-blog.item>
    @endforeach
    {{ $posts->links('livewire.admin.admin-pagination') }}
</div>