<?php

namespace App\Http\Livewire\User\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user.post.all-posts',[
            'posts'=> Post::paginate(15),
        ])
        ->extends('user.base_for_blog')
        ->section('blogContent');
    }
}
