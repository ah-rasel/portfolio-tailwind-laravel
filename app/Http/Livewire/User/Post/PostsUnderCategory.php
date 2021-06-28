<?php

namespace App\Http\Livewire\User\Post;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsUnderCategory extends Component
{
    use WithPagination;
    public $category;
    public function mount(Category $category)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.user.post.posts-under-category',[
            'posts'=> Post::where('category_id',$this->category->id)->paginate(10),
        ])
        ->extends('user.base_for_blog')
        ->section('blogContent');
    }
}
