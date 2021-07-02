<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class AllMessages extends Component
{
    use WithPagination;
    public $current_message;
    public $messageToOpen;
    public $individualMessageOpen = false;
    public $orderBy = 'created_at';
    public $SortBy = 'DESC';
    public $deleted_message = '';
    
    public function MessageToShow($id)
    {
        try {
            $this->messageToOpen = Message::find($id);
            $this->messageToOpen->read_status = 1;
            $this->messageToOpen->update();
            $this->individualMessageOpen = true;
            $this->current_message = $id;
        } catch (\Exception $exception) { 

        }
    }
    public function DeleteMessage($id)
    {
        try {
            $message = Message::find($id);
            if($this->individualMessageOpen && $this->messageToOpen && $message->id == $this->messageToOpen->id){
                $this->individualMessageOpen = false;
                $this->messageToOpen = '';
            }
            $this->deleted_message = "Messasge from ".$message->name;
            $message->delete();
            $this->emitSelf('message_deleted');
        } catch (\Exception $exception) { 
        }
    }
    public function ChangeMark($id)
    {
        try {
            $message = Message::find($id);
            $message->read_status = !$message->read_status;
            $message->update();
            $this->individualMessageOpen = ($message->id == $this->messageToOpen->id)? false:true;
            if(!$this->individualMessageOpen){
                $this->messageToOpen = '';
            }
        } catch (\Exception $exception) { 

        }
    }
    public function MarkAllRead()
    {
        Message::where('read_status',0)->update(['read_status'=>1]);
    }
    public function render()
    {
        $this->getMessages();
        return view('livewire.portfolio.all-messages',[
            'messages'=>Message::orderBy($this->orderBy, $this->SortBy)->paginate(6),
        ])
        ->extends('layouts.admin');
    }
}
