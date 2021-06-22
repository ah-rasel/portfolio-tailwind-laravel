<div class="col-span-6 space-y-2">
    <div class="items-center justify-between mb-4 space-y-2 md:flex md:space-y-0">
        <div class="">
            <h3 class="text-xl font-bold">All Topics</h3>
        </div>

        <div class="md:w-96">
            <x-input.search placeholder="Search for Topics" ></x-blog-search>
        </div>
    </div>

    @php
      $skipped = ($categories->currentPage() * $categories->perPage()) - $categories->perPage();
     @endphp

    @foreach ($categories as $category)
        <x-blog.item :item-title="$category->name" :count-value="$loop->iteration+$skipped" font-case="uppercase" :item-count-value="$category->posts_count.' posts'" :link-text="route('posts.of.category',$category)"></x-blog.item>
    @endforeach
    {{ $categories->links('livewire.admin.admin-pagination') }}
</div>