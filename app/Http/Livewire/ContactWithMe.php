<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactWithMe extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required|max:254',
    ];
    protected $messages = [
        'name.required' => 'I believe you must have a name ?',
        'email.required' => 'I am confused !! Don\'t you have an email address ?',
        'message.required' => 'Come On !! What\'s the Point of sending an empty message ?',
        'message.max' => 'The message has been so long .',
    ];
    public function SendMessage()
    {
        $this->validate();
        Message::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message,
        ]);
        $this->name = $this->email = $this->message = '' ;
    }
    public function render()
    {
        return view('livewire.contact-with-me');
    }
}
