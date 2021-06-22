<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AddNewCategory extends Component
{
    public $name,$slug,$description;
    public $parent_id;
    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:posts,slug',
        'description' => 'required|max:255',
    ];
    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function AddCategory()
    {
        $this->parent_id = $this->parent_id ?? 0;
        $this->validate();
        $category = Category::create([
            'name'=>$this->name,
            'slug'=>$this->slug,
            'description'=>$this->description,
            'parent_id'=>$this->parent_id,
        ]);
        return redirect()->route('category.edit',$category);
    }
    
    public function render()
    {
        return view('livewire.admin.categories.add-new-category',[
            'parentCategories'=>Category::where('parent_id',0)->get()
        ])
                    ->extends('layouts.admin');
    }
}
