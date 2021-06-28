<?php

namespace App\Http\Livewire\User\Post;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Livewire\Component;

class CommentAndReplies extends Component
{
    public $post;
    public $comment;
    public $reply;
    public $comment_to_reply = false;
    public $action_on_comment = false;
    public $action_on_comment_id = false;
    public $action_on_reply = false;
    public $action_on_reply_id = false;
    protected $listeners = ['CommentAdded' => 'render'];
    
    protected $rules = [
        'comment' => 'required',
    ];
    protected $messages = [
        'comment.required' => 'Come on !! you can not put an empty comment',
        'reply.required' => 'I am confused !! What\'s the point of adding an empty reply ?',
    ];

    public function mount($post)
    {
        $this->post = $post;
    }

    public function AddComment()
    {
        $this->validate();
        Comment::create([
            'comment'=>$this->comment,
            'post_id'=>$this->post->id,
            'user_id'=>auth()->user()->id,
        ]);
        $this->emit('CommentAdded');
        $this->comment = '';
    }
    public function AddReply($comment_id)
    {
        $this->validate([
            'reply'=>'required',
        ]);
        Reply::create([
            'reply'=>$this->reply,
            'comment_id'=>$comment_id,
            'user_id'=>auth()->user()->id,
        ]);
        $this->emit('CommentAdded');
        $this->reply = '';
    }
    public function PerformActionOnComment($id)
    {
        $this->action_on_comment_id = $id;
        $this->action_on_comment = !$this->action_on_comment;
    }
    public function PerformActionOnReply($id)
    {
        $this->action_on_reply_id = $id;
        $this->action_on_reply = !$this->action_on_reply;
    }
    public function DeleteComment($id)
    {
        try {
            $comment = Comment::with('replies')->where('id',$id)->first();
            if($comment->user_id == auth()->user()->id){
                foreach($comment->replies as $reply){
                    $reply->delete();
                }
                 $comment->delete();
            }
        } catch (\Exception $exception) {
            
        }

        $this->action_on_comment = false;
        $this->emit('CommentAdded');
    }
    public function DeleteReply($id)
    {
        try {
            $reply = Reply::where('id',$id)->first();
            if($reply->user_id == auth()->user()->id){
                 $reply->delete();
            }
        } catch (\Exception $exception) {
            
        }
        $this->action_on_reply = false;
        $this->emit('CommentAdded');
    }
    public function render()
    {
        return view('livewire.user.post.comment-and-replies');
    }
}
