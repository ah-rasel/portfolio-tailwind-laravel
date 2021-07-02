<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;
    public function mount()
    {
        if(Gate::denies('post_access')){
            redirect()->route('dashboard');
        }
    }
    public function DeletePost(Post $post)
    {
        if(Gate::denies('post_delete')){
            redirect()->route('dashboard');
        }else{
            try {
                $post->delete();
            } catch (QueryException $exception) {
                return redirect()->back()->with('error_message','The post "'.$post->title.'" Can not be deleted .');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.post.all-posts',[
            'posts'=>
            Post::with('user','category')
            ->orderBy('id', 'DESC')
            ->paginate(10),
        ])->extends('layouts.admin');
    }
}
