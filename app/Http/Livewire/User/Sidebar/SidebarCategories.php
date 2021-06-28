<?php

namespace App\Http\Livewire\User\Sidebar;

use App\Models\Category;
use Livewire\Component;

class SidebarCategories extends Component
{
    public function render()
    {
        return view('livewire.user.sidebar.sidebar-categories',[
            'categories'=>Category::withCount('posts')
            ->where('parent_id',0)
            ->get()
        ]);
    }
}
