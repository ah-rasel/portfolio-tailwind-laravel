<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AddNewCategory extends Component
{
    public $name,$slug,$description;
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
        $this->validate();
        $category = Category::create([
            'name'=>$this->name,
            'slug'=>$this->slug,
            'description'=>$this->description,
        ]);
        return redirect()->route('category.edit',$category);
    }
    
        
    public function render()
    {
        return view('livewire.admin.categories.add-new-category')
                    ->extends('layouts.admin');
    }
}
