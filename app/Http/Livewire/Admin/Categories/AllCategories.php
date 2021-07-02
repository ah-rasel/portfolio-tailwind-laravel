<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class AllCategories extends Component
{
    use WithPagination;
    public function mount()
    {
        if(Gate::denies('category_access')){
            redirect()->route('dashboard');
        }
    }
    public function DeleteCategory(Category $category)
    {
        if(Gate::denies('category_delete')){
            redirect()->route('dashboard');
        }else{
            try {
                $category->delete();
            } catch (QueryException $exception) {
                return redirect()->back()->with('error_message','The Category "'.$category->name.'" Can not be deleted . Because there are posts under these categories');
            }
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
