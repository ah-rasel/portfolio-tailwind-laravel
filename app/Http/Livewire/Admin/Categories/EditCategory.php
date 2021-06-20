<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class EditCategory extends Component
{
    public $category;
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
        $this->validate();
        $this->category->update();
    }
    public function render()
    {
        return view('livewire.admin.categories.edit-category')->extends('layouts.admin');
    }
}
