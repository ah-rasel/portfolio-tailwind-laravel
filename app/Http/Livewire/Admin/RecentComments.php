<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class RecentComments extends Component
{
    public function render()
    {
        return view('livewire.admin.recent-comments',[
            'comments'=>Comment::with(['user:id,name','post'])->limit(5)->get(),
        ]);
    }
}
