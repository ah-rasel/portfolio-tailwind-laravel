<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ViewCategories extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user.category.view-categories',[
            'categories' => Category::withCount('posts')->paginate(10),
        ])
        ->extends('user.base_for_blog')
        ->section('blogContent');
    }
}
