<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class RecentPosts extends Component
{
    public function render()
    {
        return view('livewire.admin.recent-posts',[
            'posts'=>Post::orderBy('created_at','DESC')
            ->limit(5)
            ->get()
        ]);
    }
}
