<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;

class CreatePost extends Component
{
    public $title,$slug,$content;
    public $selected_category;
    public $parent_id,$new_category_name;
    public function mount()
    {
        if(Gate::denies('post_create')){
            redirect()->route('dashboard');
        }
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
        if(Gate::denies('post_create')){
            redirect()->route('dashboard');
        }else{
            $this->validate();
            $post = Post::create([
                'title'=>$this->title,
                'slug'=>$this->slug,
                'content'=>$this->content,
                'category_id'=>$this->selected_category,
                'user_id'=>auth()->user()->id,
            ]);
            return redirect()->route('post.edit',$post);
        }
    }

    public function AddNewCategory()
    {
        if(Gate::denies('category_create')){
            redirect()->route('dashboard');
        }else{
            $this->parent_id = $this->parent_id ?? 0;
            Category::create([
                'name'=>$this->new_category_name,
                'slug'=>Str::slug($this->new_category_name),
                'parent_id'=>$this->parent_id,
            ]); 
        $this->parent_id = $this->new_category_name = null;
        }
        
    }
    
    public function render()
    {
        return view('livewire.admin.post.create-post',[
            'parentCategories'=>Category::where('parent_id',0)->get()
        ])->extends('layouts.admin');
    }
}
