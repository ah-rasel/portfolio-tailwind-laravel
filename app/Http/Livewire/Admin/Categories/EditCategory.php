<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class EditCategory extends Component
{
    public $category;
    public $parent_id;
    public function mount(Category $category)
    {
        $this->category = $category;
    }
    public function updatedCategoryName()
    {
        $this->category->slug = Str::slug($this->category->name);
    }
    protected $rules = [
        'category.name' => 'required',
        'category.slug' => 'required|unique:posts,slug',
        'category.description' => 'required|max:255',
    ];
    public function Update()
    {
        // dd($this->parent_id);
        $this->validate();

        if($this->parent_id){
        $this->category->parent_id = ($this->parent_id == $this->category->id) ? 0 : ($this->parent_id ?? $this->category->parent_id);
        }
        $this->category->update();
    }
    public function render()
    {
        return view('livewire.admin.categories.edit-category',[
            'parentCategories'=>Category::where('parent_id',0)->get()
        ])->extends('layouts.admin');
    }
}
