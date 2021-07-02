<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $selected=[];
    public $deleted_record;
    public function Delete($id)
    {
        $user = User::find($id);
        $this->deleted_record = $user->name;
        $user->delete();
        $this->emitSelf('record_deleted');
    }
    public function DeleteSelected()
    {
        User::destroy($this->selected);
        $this->deleted_record = "Selected Users";
        $this->emitSelf('record_deleted');
        $this->selected = [];
    }
    public function render()
    {
        return view('livewire.users',[
            'users'=>User::with('roles')->paginate(10),
        ])->extends('layouts.admin');
    }
}
