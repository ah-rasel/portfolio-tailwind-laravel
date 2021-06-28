<?php

namespace App\Http\Livewire\User\Post;

use App\Models\Post;
use Livewire\Component;

class RecentPosts extends Component
{
    public $posts;
    public function getPosts()
    {
        $this->posts = Post::orderBy('created_at','DESC')
            ->limit(5)
            ->get();
    }
    public function render()
    {
        $this->getPosts();
        return view('livewire.user.post.recent-posts');
    }
}
