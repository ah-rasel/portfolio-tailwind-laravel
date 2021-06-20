<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class EditPost extends Component
{
    public $post;
    
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
        'post.slug' => 'required|unique:posts,slug',
        'post.content' => 'required|max:255',
    ];
    public function Update()
    {
        $this->validate();
        $this->post->update();
    }
    public function render()
    {
        return view('livewire.admin.post.edit-post')->extends('layouts.admin');
    }
}
