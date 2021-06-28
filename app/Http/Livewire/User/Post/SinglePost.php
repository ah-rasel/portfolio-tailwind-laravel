<?php

namespace App\Http\Livewire\User\Post;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $post;
    public function mount(Post $post)
    {
        $post->load('user:id,name','category','comments.user:id,name','comments.replies.user:id,name');
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.user.post.single-post')
        ->extends('user.base_for_blog')
        ->section('blogContent');
    }
}
