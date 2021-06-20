<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;

class CreatePost extends Component
{
    public $title,$slug,$content,$category_id;
    public $categories;
    public function mount()
    {
        $this->categories = Category::all();
    }
    protected $rules = [
        'title' => 'required',
        'slug' => 'required|unique:posts,slug',
        'content' => 'required',
    ];
    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function AddPost()
    {
        $this->validate();
        $post = Post::create([
            'title'=>$this->title,
            'slug'=>$this->slug,
            'content'=>$this->content,
            'category_id'=>2,
            'user_id'=>auth()->user()->id,
        ]);
        return redirect()->route('post.edit',$post);
    }
    public function render()
    {
        return view('livewire.admin.post.create-post')->extends('layouts.admin');
    }
}
