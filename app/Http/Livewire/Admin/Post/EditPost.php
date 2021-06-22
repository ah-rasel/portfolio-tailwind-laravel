<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class EditPost extends Component
{
    public $post;
    public $selected_category;
    public $parent_id;
    public $new_category_name;
    
    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function updatedPostTitle()
    {
        $this->post->slug = Str::slug($this->post->title);
    }
    protected $rules = [
        'post.title' => 'required',
        'post.slug' => 'required',
        'post.content' => 'required|max:255',
        'post.category_id' => 'required',
    ];
    public function Update()
    {
        $this->validate();
        $this->post->category_id = $this->selected_category ?? $this->post->category_id;
        $this->post->update();
    }
    public function AddNewCategory()
    {
        $this->parent_id = $this->parent_id ?? 0;
        Category::create([
            'name'=>$this->new_category_name,
            'slug'=>Str::slug($this->new_category_name),
            'parent_id'=>$this->parent_id,
        ]);
        $this->parent_id = $this->new_category_name = null;
    }
    public function render()
    {
        return view('livewire.admin.post.edit-post',[
            'parentCategories'=>Category::where('parent_id',0)->get(),
        ])->extends('layouts.admin');
    }
}
