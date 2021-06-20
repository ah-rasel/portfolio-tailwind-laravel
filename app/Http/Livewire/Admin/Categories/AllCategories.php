<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Livewire\WithPagination;

class AllCategories extends Component
{
    use WithPagination;
    public function DeleteCategory(Category $category)
    {
        try {
            $category->delete();
        } catch (QueryException $exception) {
            return redirect()->back()->with('error_message','The Category "'.$category->name.'" Can not be deleted . Because there are posts under these categories');
        }
        
    }
    public function render()
    {
        return view('livewire.admin.categories.all-categories',[
            'categories'=>
            Category::orderBy('id', 'DESC')
            ->paginate(10),
        ])->extends('layouts.admin');
    }
}
